const DB_NAME = 'rplanterz_pos_db';
const DB_VERSION = 1;
const STORE_PRODUCTS = 'cached_products';
const STORE_PENDING_SALES = 'pending_sales';

function openPosDb() {
    return new Promise((resolve, reject) => {
        const request = indexedDB.open(DB_NAME, DB_VERSION);

        request.onupgradeneeded = (event) => {
            const db = event.target.result;

            if (!db.objectStoreNames.contains(STORE_PRODUCTS)) {
                const prodStore = db.createObjectStore(STORE_PRODUCTS, { keyPath: 'product_id' });
                prodStore.createIndex('barcode', 'barcode', { unique: false });
            }

            if (!db.objectStoreNames.contains(STORE_PENDING_SALES)) {
                const salesStore = db.createObjectStore(STORE_PENDING_SALES, { keyPath: 'client_uuid' });
                salesStore.createIndex('sync_status', 'sync_status', { unique: false });
            }
        };

        request.onsuccess = () => resolve(request.result);
        request.onerror = () => reject(request.error);
    });
}

// 1. I-save ang active products mula sa server habang ONLINE para magamit pag OFFLINE
async function cacheProductsForOffline(products) {
    const db = await openPosDb();
    const tx = db.transaction(STORE_PRODUCTS, 'readwrite');
    const store = tx.objectStore(STORE_PRODUCTS);

    await new Promise((resolve, reject) => {
        const clearReq = store.clear();
        clearReq.onsuccess = () => resolve();
        clearReq.onerror = () => reject(clearReq.error);
    });

    for (const product of products) {
        store.put(product);
    }

    return new Promise((resolve, reject) => {
        tx.oncomplete = () => resolve(true);
        tx.onerror = () => reject(tx.error);
    });
}

// 2. Kunin ang cached products kapag OFFLINE
async function getOfflineProducts() {
    const db = await openPosDb();
    const tx = db.transaction(STORE_PRODUCTS, 'readonly');
    const store = tx.objectStore(STORE_PRODUCTS);

    return new Promise((resolve, reject) => {
        const req = store.getAll();
        req.onsuccess = () => resolve(req.result || []);
        req.onerror = () => reject(req.error);
    });
}

// 3. I-save ang sale sa IndexedDB kapag OFFLINE (pending_sync)
async function queueOfflineSale(salePayload) {
    const db = await openPosDb();
    const tx = db.transaction(STORE_PENDING_SALES, 'readwrite');
    const store = tx.objectStore(STORE_PENDING_SALES);

    const record = {
        ...salePayload,
        client_uuid: salePayload.client_uuid || (crypto.randomUUID ? crypto.randomUUID() : `RPL-${Date.now()}-${Math.random().toString(36).slice(2, 8)}`),
        sync_status: 'pending_sync',
        queued_at: new Date().toISOString(),
    };

    return new Promise((resolve, reject) => {
        const req = store.put(record);
        req.onsuccess = () => resolve(record);
        req.onerror = () => reject(req.error);
    });
}

// 4. Kunin lahat ng pending sales na isisi-sync pagbalik ng internet
async function getPendingSales() {
    const db = await openPosDb();
    const tx = db.transaction(STORE_PENDING_SALES, 'readonly');
    const store = tx.objectStore(STORE_PENDING_SALES);

    return new Promise((resolve, reject) => {
        const req = store.getAll();
        req.onsuccess = () => resolve(req.result || []);
        req.onerror = () => reject(req.error);
    });
}

// 5. Burahin sa local pending queue ang mga na-sync na sa server
async function removeSyncedSales(syncedUuids) {
    if (!Array.isArray(syncedUuids) || syncedUuids.length === 0) return;

    const db = await openPosDb();
    const tx = db.transaction(STORE_PENDING_SALES, 'readwrite');
    const store = tx.objectStore(STORE_PENDING_SALES);

    for (const uuid of syncedUuids) {
        store.delete(uuid);
    }

    return new Promise((resolve, reject) => {
        tx.oncomplete = () => resolve(true);
        tx.onerror = () => reject(tx.error);
    });
}
