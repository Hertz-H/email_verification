<?php

namespace App\Models;

use App\Models\Location;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    // protected $guarded = [];


    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }
}
