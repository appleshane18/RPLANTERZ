<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $primaryKey = 'refund_id';
    public $timestamps = false;

    protected $fillable = ['transaction_id', 'processed_by', 'total_refund_amount', 'reason', 'refund_date'];

    public function transaction() {
        return $this->belongsTo(SalesTransaction::class, 'transaction_id');
    }
    public function processedBy() {
        return $this->belongsTo(User::class, 'processed_by');
    }
    public function details() {
        return $this->hasMany(RefundDetail::class, 'refund_id');
    }
}
