<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $primaryKey = 'branch_id';
    public $timestamps = false;

    protected $fillable = [
        'branch_name', 'location', 'contact_number', 'status',
        'date_registered', 'vat_enabled', 'vat_rate',
    ];

    public function users() {
        return $this->hasMany(User::class, 'branch_id');
    }
    public function inventory() {
        return $this->hasMany(Inventory::class, 'branch_id');
    }
    public function salesTransactions() {
        return $this->hasMany(SalesTransaction::class, 'branch_id');
    }
    public function expenses() {
        return $this->hasMany(Expense::class, 'branch_id');
    }
    public function reports() {
        return $this->hasMany(Report::class, 'branch_id');
    }
}
