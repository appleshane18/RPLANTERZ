<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntryLine extends Model
{
    protected $primaryKey = 'line_id';
    public $timestamps = false;

    protected $fillable = ['entry_id', 'account_id', 'debit', 'credit'];

    public function entry() {
        return $this->belongsTo(JournalEntry::class, 'entry_id');
    }
    public function account() {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
