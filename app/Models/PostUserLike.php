<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    use HasFactory;

    protected $table = 'post_user_like';
    protected $guarded = false;
//    protected $fillable = ['title', 'content', 'preview_image', 'main_image'];
}
