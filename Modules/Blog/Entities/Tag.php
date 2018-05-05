<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Modules\Blog\Entities\Tag
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Tag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tag extends Model
{
    use Sluggable;
    // таблица в БД
    protected $table = 'blog_tags';
    // показываем только нужные поля
    protected $visible = ['title', 'slug'];
    // массовое заполнение
    protected $filable = [];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'blog_post_tags', 'tag_id', 'post_id');
    }

    // trait
    public function sluggable()
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }

}
