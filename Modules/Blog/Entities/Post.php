<?php

namespace Modules\Blog\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

/**
 * Modules\Blog\Entities\Post
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property int|null $category_id
 * @property int|null $user_id
 * @property int $status
 * @property int $views
 * @property int $is_featured
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $autor
 * @property-read \Modules\Blog\Entities\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post active()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post unactive()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Post whereViews($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    use Sluggable;
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;
    // таблица в БД
    /**
     * @var string
     */
    protected $table = 'blog_posts';

    protected $fillable = ['title', 'content','category_id','user_id','status','is_featured'];
    // показываем только нужные поля
    protected $visible = ['title', 'slug', 'content', 'status', 'views', 'autor','is_featured'];

    /**
     * Связь с категорией
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Связь с автором
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autor()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Связь с тегами
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_post_tags', 'post_id', 'tag_id');
    }

    // trait

    /**
     *СЕО ссылка
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => ['source' => 'title']
        ];
    }

    /**
     * Добавление
     * @param $fields
     * @return static
     */
    public static function add($fields)
    {
        $post = new static();
        // массовое связывание
        $post->fill($fields);
        // остальные поля
        $post->user_id = 1;
        $post->save();
        return $post;
    }

    /**
     * Редактирование
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     *  Удаление
     * @param $fields
     * @throws \Exception
     */
    public function remove($fields)
    {
        Storage::delete('uploads/' . $this->image);
        $this->delete();
    }

    /**
     *  Загрузка картинок
     * @return array
     */
    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        };
        // удаляем если есть картинка
        Storage::delete('uploads/' . $this->image);
        $filename = str_random(10) . '.' . $image->extension();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    /**
     * Вывод картинки
     * @return string
     */
    public function getImage()
    {
        if ($this->image == null) {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }

    /**
     * Устанавливаем категорию
     * @param $id
     */
    public function setCategory($id)
    {
        if ($id == null) {
            return;
        };
        $this->category_id = $id;
        $this->save();
    }

    /**
     * Устанавливаем тэги
     * @param $ids
     */
    public function setTags($ids)
    {
        if ($ids == null) {
            return;
        };
        $this->tags()->sync($ids);
    }

    /**
     * Устанавливаем как черновик (не активно)
     */
    public function setDraft()
    {
        $this->status = Post::IS_DRAFT;
        $this->save();
    }

    /**
     *Устанавливаем как чистовик (активно)
     */
    public function setPublic()
    {
        $this->status = Post::IS_PUBLIC;
        $this->save();
    }

    /**
     *  Переключатель статуса
     * @param $value
     */
    public function toggleStatus($value)
    {
        if ($value == null) {
            return $this->setDraft();
        }
        $this->setPublic();
    }

    /**
     * Устанавливаем как рекомендованая статья
     */
    public function setFeatured()
    {
        $this->is_featured = 1;
        $this->save();
    }

    /**
     *Устанавливаем как стандартная статья
     */
    public function setStandart()
    {
        $this->is_featured = 0;
        $this->save();
    }

    /**
     *  Переключатель рекомендованая/стандарьная
     * @param $value
     */
    public function toggleFeatured($value)
    {
        if ($value == null) {
            return $this->setStandart();
        }
        $this->setFeatured();
    }


    // scopes
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeUnactive($query)
    {
        return $query->where('status', 0);
    }
}
