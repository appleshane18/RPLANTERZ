<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'report_id';
    public $timestamps = false;

    protected $fillable = ['type', 'branch_id', 'date_range_start', 'date_range_end', 'generated_by', 'generated_at'];

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
    public function generatedBy() {
        return $this->belongsTo(User::class, 'generated_by');
    }
}
