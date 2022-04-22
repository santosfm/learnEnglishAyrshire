<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $table = 'posts';
    protected $fillable = ['title', 'body', 'image_path', 'published_at' , 'user_id'];

    public function user(){
        return $this->belongsTo(User::class); //1 post belongs to 1 user
    }
}
