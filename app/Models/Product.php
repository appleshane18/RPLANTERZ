<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'name', 'category', 'description', 'cost_price', 'selling_price',
        'barcode', 'unit_of_measure', 'image_url', 'date_added',
    ];

    public function inventory() {
        return $this->hasMany(Inventory::class, 'product_id');
    }
    public function salesItems() {
        return $this->hasMany(SalesItem::class, 'product_id');
    }
}
