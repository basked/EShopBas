<?php

namespace Modules\Blog\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [];

    public function category()
    {
        return $this->hasOne(BlogCategory::class);
    }
    public function autor()
    {
        return $this->hasOne(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(BlogTag::class,'post_tags','post_id','tag_id');
    }
}
