<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Course\Entities\Content
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $link
 * @property int $course_id
 * @property string $duration
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Content whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Content extends Model
{
    protected $table = 'course_contents';
    protected $fillable = [];
}
