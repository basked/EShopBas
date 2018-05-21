<?php

namespace Modules\Blog\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Blog\Entities\Comment
 *
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property int $post_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $autor
 * @property-read \Modules\Blog\Entities\Post $post
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereUserId($value)
 * @mixin \Eloquent
 * @property int $status
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Comment whereStatus($value)
 */
class Comment extends Model
{
    // таблица в БД
    protected $table = 'blog_comments';
    protected $fillable = ['text'];
    // показываем только нужные поля
    protected $visible = ['text'];

    /**
     * @return array
     */
    public function autor()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return array
     */
    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }

    public function allow()
    {
        $this->status = 1;
        $this->save();
    }

    public function disAllow()
    {
        $this->status = 0;
        $this->save();
    }

    public function toggleStatus()
    {
        if ($this->status = 0) {
            return $this->allow();
        }
        return $this->disAllow();
    }

    public function remove(){
        $this->delete();
    }
}
