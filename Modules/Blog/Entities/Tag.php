<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{   // таблица в БД
    protected $table='blog_tags';
    // показываем только нужные поля
    protected $visible = ['title','slug'];
    // массовое заполнение
    protected $filable = [];
}
