<?php

namespace App\Models;


use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function companies()
    {
        return $this->hasMany(Company::class, 'location_id');
    }
}
