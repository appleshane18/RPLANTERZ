<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefundDetail extends Model
{
    protected $primaryKey = 'refund_detail_id';
    public $timestamps = false;

    protected $fillable = ['refund_id', 'product_id', 'quantity', 'amount'];

    public function refund() {
        return $this->belongsTo(Refund::class, 'refund_id');
    }
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
