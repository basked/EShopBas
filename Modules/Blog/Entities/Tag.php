<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='blog_tags';
    protected $fillable = [];
}
