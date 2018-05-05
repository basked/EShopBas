<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Blog\Entities\Subscription
 *
 * @property int $id
 * @property string $email
 * @property string|null $token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Subscription whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Subscription whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Blog\Entities\Subscription whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Subscription extends Model
{
    // таблица в БД
    protected $table = 'blog_subscriptions';
    protected $fillable = [];

    /**
     *  Добавление
     * @param $email
     * @return static
     */
    public static function add($email){
        $sub=new static();
        $sub->email=$email;
        $sub->token=str_random(100);
        $sub->save();
        return $sub;
    }

    /**
     * Удаление
     * @throws \Exception
     */
    public function remove(){
      $this->delete();
    }
}
