<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


/**
 * Modules\Blog\Entities\Category
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Sluggable;
    // таблица в БД
    protected $table = 'blog_categories';
    protected $fillable = [];
    // показываем только нужные поля
    protected $visible = ['title', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    // trait
    public function sluggable()
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }

    public static function basket()
    {
        echo 'basked';
    }
}
