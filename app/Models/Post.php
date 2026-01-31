<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'content',
        'user_id',
        'is_published',
        'views',
        'is_popular'
    ];
    public function user(){
       return $this->belongsTo(User::class);
    }
}