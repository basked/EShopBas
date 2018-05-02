<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [];
    public function posts(){
        return $this->hasMany(BlogPost::class);
    }
}
