<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function education()
    {
        return $this->hasMany(Education::class, 'profile_id');
    }
    public function contact()
    {
        return $this->hasMany(Contact::class, 'profile_id');
    }
    public function skill()
    {
        return $this->hasMany(Skill::class, 'profile_id');
    }
    public function experience()
    {
        return $this->hasMany(Experience::class, 'profile_id');
    }
}
