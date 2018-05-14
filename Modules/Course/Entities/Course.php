<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Course\Entities\Course
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $link
 * @property string $description
 * @property string $addition
 * @property string $duration
 * @property int $category_id
 * @property int $sourse_id
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereAddition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereSourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Course whereUpdatedAt($value)
 */
class Course extends Model
{
    protected $table = 'course_courses';
    protected $fillable = [];
}
