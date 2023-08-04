<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title','slug_title', 'slug', 'icon_svg', 'content', 'position'];

    public function post(){
        return $this->belongsTo(Post::class);
    }


}
