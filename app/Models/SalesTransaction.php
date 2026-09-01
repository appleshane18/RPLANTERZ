<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

    protected $fillable = [
        'cashier_id', 'branch_id', 'transaction_date', 'total_amount',
        'receipt_number', 'is_vat_applied', 'vat_amount',
    ];

    public function cashier() {
        return $this->belongsTo(User::class, 'cashier_id');
    }
    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function items() {
        return $this->hasMany(SalesItem::class, 'transaction_id');
    }
    public function refunds() {
        return $this->hasMany(Refund::class, 'transaction_id');
    }
}
