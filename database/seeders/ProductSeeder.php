<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductBatch;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $branches = Branch::all();

        $products = [
            [
                'barcode' => '4800001000011',
                'name' => 'Urea Fertilizer (46-0-0) 50kg',
                'category' => 'Fertilizer',
                'cost_price' => 1200.00,
                'markup_percentage' => 20.00,
                'selling_price' => 1440.00,
                'unit_of_measure' => 'bag',
                'description' => '50kg sack urea fertilizer',
                'qty' => 25,
            ],
            [
                'barcode' => '4800001000028',
                'name' => 'Hybrid Corn Seeds 5kg',
                'category' => 'Seeds',
                'cost_price' => 950.00,
                'markup_percentage' => 25.00,
                'selling_price' => 1187.50,
                'unit_of_measure' => 'pack',
                'description' => '5kg pack hybrid corn seeds',
                'qty' => 20,
            ],
            [
                'barcode' => '4800001000035',
                'name' => 'Glyphosate Herbicide 1L',
                'category' => 'Crop Protection',
                'cost_price' => 280.00,
                'markup_percentage' => 30.00,
                'selling_price' => 364.00,
                'unit_of_measure' => 'bottle',
                'description' => '1L agricultural herbicide',
                'qty' => 30,
            ],
        ];

        foreach ($products as $index => $item) {
            $product = Product::firstOrCreate(
                ['barcode' => $item['barcode']],
                [
                    'name' => $item['name'],
                    'category' => $item['category'],
                    'cost_price' => $item['cost_price'],
                    'markup_percentage' => $item['markup_percentage'],
                    'selling_price' => $item['selling_price'],
                    'unit_of_measure' => $item['unit_of_measure'],
                    'description' => $item['description'],
                    'image_url' => null,
                ]
            );

            foreach ($branches as $bIndex => $branch) {
                ProductBatch::firstOrCreate(
                    [
                        'product_id' => $product->product_id,
                        'branch_id' => $branch->branch_id,
                        'batch_name' => 'INIT-B' . ($index + 1) . '-' . ($bIndex + 1),
                    ],
                    [
                        'supplier_name' => 'Opening Balance',
                        'quantity_received' => $item['qty'],
                        'quantity_remaining' => $item['qty'],
                        'unit_cost' => $item['cost_price'],
                        'date_received' => now()->toDateString(),
                        'expiry_date' => now()->addYear()->toDateString(),
                    ]
                );

                Inventory::firstOrCreate(
                    [
                        'product_id' => $product->product_id,
                        'branch_id' => $branch->branch_id,
                    ],
                    [
                        'quantity' => $item['qty'],
                        'reorder_level' => 10,
                    ]
                );
            }
        }
    }
}
