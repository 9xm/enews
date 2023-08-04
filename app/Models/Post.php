<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['alert_title','title', 'slug_title', 'slug', 'content', 'status', 'category_id', 'user_id'];
    
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
