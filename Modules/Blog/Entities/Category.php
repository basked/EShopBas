<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];
    protected $table='blog_categories';
    public function posts(){
        return $this->hasOne(Post::class);
    }
}
