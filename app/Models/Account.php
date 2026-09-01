<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $primaryKey = 'account_id';
    public $timestamps = false;

    protected $fillable = ['account_name', 'account_type', 'normal_balance'];

    public function journalEntryLines() {
        return $this->hasMany(JournalEntryLine::class, 'account_id');
    }
}
