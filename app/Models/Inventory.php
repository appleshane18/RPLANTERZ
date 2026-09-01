<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'inventory_id';
    public $timestamps = false;

    protected $fillable = ['product_id', 'branch_id', 'quantity', 'reorder_level', 'last_updated'];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
