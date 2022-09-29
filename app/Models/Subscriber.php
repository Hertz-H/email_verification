<?php

namespace App\Models;

use App\models\SubscriberCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $fillable = ['email'];
    public function subscriberCategories()
    {
        return $this->hasMany(SubscriberCategory::class, 'subscriber_id');
    }
}
