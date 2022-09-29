<?php

namespace App\Models;

use App\Models\Subscriber;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberCategory extends Model
{
    use HasFactory;
    protected $fillable = ['subscriber_id', 'cate_id'];

    public function subscriber()
    {

        return $this->belongsTo(Subscriber::class, 'subscriber_id')->where('status', '1');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }
}
