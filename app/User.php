<?php

namespace App;

use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $is_admin
 * @property int $status
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStatus($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Entities\Post[] $posts
 */
class User extends Authenticatable
{
    use Notifiable;
    const IS_BANNED = 1;
    const IS_ACTIVE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];
    protected $visible = [
        'name',
        'email',
        'password',
        'is_admin'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Связь с постами
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }


    /**
     * Связь с коментами
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    /**
     * Добавление
     * @param $fields
     * @return static
     */
    public static function add($fields)
    {
        $user = new static();
        $user->fill($fields);
        $user->password = bcrypt($fields['passwod']);
        $user->save();
        return $user;
    }

    /**
     * Редактирование
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->password = bcrypt($fields['passwod']);
        $user->save();
    }

    /**
     * Удаление
     * @throws \Exception
     */
    public function remove()
    {
        $this->delete();
    }

    /**
     *  Загрузка аватара
     * @return array
     */
    public function uploadAvatar($image)
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
            return '/img/no-user.png';
        }
        return '/uploads/' . $this->image;
    }

    /**
     * Обычный пользователь
     */
    public function makeAdmin()
    {
        $this->is_admin = 1;
        $this->save();
    }

    /**
     * Админ
     */
    public function makeNormal()
    {
        $this->is_admin = 0;
        $this->save();
    }

    /**
     *  Переключатель Админ/Обычный
     * @param $value
     */
    public function toggleAdmin($value)
    {
        if ($value == null) {
            return $this->makeNormal();
        }
        return $this->makeAdmin();
    }


    /**
     * Забанить
     */
    public function ban()
    {
        $this->status = User::IS_BANNED;
        $this->save();
    }

    /**
     * Разбанить
     */
    public function unban()
    {
        $this->status = User::IS_ACTIVE;
        $this->save();
    }

    /**
     *  Переключатель бана
     * @param $value
     */
    public function toggleBan($value)
    {
        if ($value == null) {
            return $this->unban();
        }
        return $this->ban();
    }

}
