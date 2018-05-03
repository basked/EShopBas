<?php

namespace Modules\Blog\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='blog_posts';

    protected $fillable = [];

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function autor()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }
}
