<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesItem extends Model
{
    protected $primaryKey = 'item_id';
    public $timestamps = false;

    protected $fillable = ['transaction_id', 'product_id', 'quantity', 'unit_price', 'subtotal', 'vat_amount'];

    public function transaction() {
        return $this->belongsTo(SalesTransaction::class, 'transaction_id');
    }
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
