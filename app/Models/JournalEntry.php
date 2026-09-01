<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $primaryKey = 'entry_id';
    public $timestamps = false;

    protected $fillable = ['transaction_id', 'expense_id', 'entry_date', 'description'];

    public function salesTransaction() {
        return $this->belongsTo(SalesTransaction::class, 'transaction_id');
    }
    public function expense() {
        return $this->belongsTo(Expense::class, 'expense_id');
    }
    public function lines() {
        return $this->hasMany(JournalEntryLine::class, 'entry_id');
    }
}
