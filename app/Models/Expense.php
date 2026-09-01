<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Expense extends Model
{
    protected $primaryKey = 'expense_id';
    public $timestamps = false;

    protected $fillable = ['branch_id', 'encoded_by', 'category', 'amount', 'expense_date', 'description'];

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function encodedBy() {
        return $this->belongsTo(User::class, 'encoded_by');
    }
}
