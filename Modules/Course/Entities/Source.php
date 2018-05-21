<?php

namespace Modules\Course\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Exception;

/**
 * Modules\Course\Entities\Source
 *
 * @mixin \Eloquent
 */
class Source extends Model
{
    use Sluggable;
    protected $table = 'course_sources';
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
        $request = $client->request('GET', '', self::getProxy());
        $sources = $request->getBody()->getContents();
        return $sources;
    }

    /**
     * @param array $banks
     */
    public static function setDataFromSite($sources = [])
    {
        if (sizeof($sources) != 0) {
            try {
                $crawler = new Crawler($sources);
                for ($i = 0; $i < $res = $crawler->filter('.flex')->filter('.flex__item:nth-child(2)>section>a')->count(); $i++) {
                    if (!self::existSource(trim($crawler->filter('.publisher')->eq($i)->attr('href')))) {
                        $source = new Source();
                        $source->name = trim($crawler->filter('.publisher')->eq($i)->text());
                        $source->link = trim($crawler->filter('.publisher')->eq($i)->attr('href'));
                        $source->status = 1;
                        $source->save();
                    }
                }
            } catch (Exception $e) {
                echo 'Ошибки при записи данных в таблицу : ' . $sources->table, $e->getMessage(), "\n";
            }
        }
    }

    public static function SoursesParse()
    {
        $sources = self::getDataFromSite();
        self::setDataFromSite($sources);
    }

    private static function existSource($link)
    {
        $cnt = Source::where('link', '=', $link)->count();
        if ($cnt > 0) {
            return true;
        } else {
            return false;
        }
    }


}
