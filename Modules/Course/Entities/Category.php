<?php

namespace Modules\Course\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Exception;

/**
 * Modules\Course\Entities\Category
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $link
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Course\Entities\Category whereUpdatedAt($value)
 */
class Category extends Model
{
    protected $table = 'course_categories';
    protected $fillable = [];


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
    private static function getProxy($isActive = false)
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

    public static function getDataFromSite()
    {
        $client = new Client([
            'base_uri' => 'https://coursehunters.net/',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', 'archive', self::getProxy());
        $categories = $request->getBody()->getContents();
        return $categories;
    }

    /**
     * @param array $banks
     */
    public static function setDataFromSite($categories = [])
    {
        if (sizeof($categories) != 0) {
            try {
                $crawler = new Crawler($categories);
                for ($i = 0; $i < $res = $crawler->filter('.menu-aside__ul>li')->count(); $i++) {
                    $category = new Category();
                    $category->name = trim($crawler->filter('.menu-aside__ul>li>a')->eq($i)->text());
                    $category->link = trim($crawler->filter('.menu-aside__ul>li>a')->eq($i)->attr('href'));
                    $category->slug = '';
                    $category->status = 1;
                    $category->save();
                }
            } catch (Exception $e) {
                echo 'Ошибки при записи данных в таблицу : ' . $categories->table, $e->getMessage(), "\n";
            }
        }
    }

    public static function CategoresParse()
    {
        $categories = self::getDataFromSite();
        self::setDataFromSite($categories);
    }

    public static function categories(){
       self::CategoresParse();
        return Category::all(['name','link'])->toArray();
    }

}
