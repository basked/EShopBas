<?php

namespace Modules\Course\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Exception;
use Modules\Course\Entities\Source;
use Modules\Course\Entities\Category;
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
    use Sluggable;
    protected $table = 'course_courses';
    protected $fillable = ['name'];
    protected $visible = ['name', 'slug'];

    // trait
    public function sluggable()
    {
        return [
            'slug' => ['source' => 'name']
        ];
    }

    /**
     * @param bool $isActive
     * @return array
     */
    private static function getProxy($isActive = true)
    {
        $proxy = [];
        if ($isActive == true) {
            $proxy = [
                'proxy' => [
                    'http' => 'http://gt-asup6:teksab@172.16.15.33:3128',
                    'https' => 'http://gt-asup6:teksab@172.16.15.33:3128'
                ]
            ];
        }
        return $proxy;
    }


    public static function getDataFromSite($page)
    {
        $client = new Client([
            'base_uri' => 'https://coursehunters.net/',
            'timeout' => 1800.0
        ]);
        $request = $client->request('GET', "frontend?page=$page", self::getProxy());
        $courses = $request->getBody()->getContents();
        return $courses ;
    }

    /**
     * @param array $banks
     */
    public static function setDataFromSite($courses = [])
    {
        if (sizeof($courses) != 0) {
           // try {
                $crawler = new Crawler($courses);
                for ($i = 0; $i < $res = $crawler->filter('.standard-block__flex>article')->count(); $i++) {
                    //if (!self::existCourse(trim($crawler->filter('.standard-course-block__course-name>a')->attr('href')))) {
                        $course = new Course();
                        $course->name = trim($crawler->filter('.standard-course-block')->eq($i)->filter('.standard-course-block__course-name')->eq(0)->filter('a')->text());
                        $course->name_original = trim($crawler->filter('.standard-course-block')->eq($i)->filter('.standard-course-block__course-name')->eq(1)->filter('span')->text());
                        $course->lang = trim($crawler->filter('.standard-course-block')->eq($i)->filter('.standard-course-block__course-lang')->text());
                        $course->link = trim($crawler->filter('.standard-course-block')->eq($i)->filter('.standard-course-block__course-name>a')->attr('href'));
                        $course->description = trim($crawler->filter('.standard-course-block')->eq($i)->filter('.standard-course-block__flex')->filter('.standard-course-block__description')->text());
                        $course->category_id=self::getCategoryId();
                        $course->sourse_id=self::getSourceId();
//                        $course->date=self::getSourceId();
//                        $course->date_add=trim($crawler->filter('.standard-course-block')->eq($i)->filter('time')->text());

                        $course->status = 1;
                        $course->save();
                   // }
                }
           // } catch (Exception $e) {
             //   echo 'Ошибки при записи данных в таблицу : ' . $courses->table, $e->getMessage(), "\n";
           // }
        }
    }
    public static function CoursesParse()
    {
        for($i=1;$i<50;$i++){
        $courses = self::getDataFromSite($i);
        //dd($courses);
        self::setDataFromSite($courses);}
    }


    private static function existCource($link)
    {
        $cnt = Course::where('link', '=', $link)->count();
        if ($cnt > 0) {
            return true;
        } else {
            return false;
        }
    }

   private static function getCategoryId($link_category=1){
        return 1;
   }
   private static function getSourceId($link_category=1){
        return 1;
   }

}
