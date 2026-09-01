<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockTransfer extends Model
{
    protected $primaryKey = 'transfer_id';
    public $timestamps = false;

    protected $fillable = [
        'product_id', 'source_branch_id', 'destination_branch_id',
        'requested_by', 'quantity', 'transfer_date', 'status',
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function sourceBranch() {
        return $this->belongsTo(Branch::class, 'source_branch_id');
    }
    public function destinationBranch() {
        return $this->belongsTo(Branch::class, 'destination_branch_id');
    }
    public function requestedBy() {
        return $this->belongsTo(User::class, 'requested_by');
    }
}
