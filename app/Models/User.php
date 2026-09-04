<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'branch_id', 'name', 'email', 'password', 'role', 'status', 'must_change_password', 'date_created',
    ];

    protected $hidden = ['password'];

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function salesTransactions() {
        return $this->hasMany(SalesTransaction::class, 'cashier_id');
    }
    public function expenses() {
        return $this->hasMany(Expense::class, 'encoded_by');
    }
    public function notifications() {
        return $this->hasMany(Notification::class, 'user_id');
    }
    public function activityLogs() {
        return $this->hasMany(ActivityLog::class, 'user_id');
    }

    public function isOwner(): bool
    {
        return $this->role === 'Owner';
    }

    public function isCashier(): bool
    {
        return $this->role === 'Cashier';
    }

    public function isChecker(): bool
    {
        return $this->role === 'Checker';
    }
}
