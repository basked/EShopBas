<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Exception;

/**
 * App\Bank
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $name_short
 * @property string $link link to bank24.by
 * @property string $site
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereNameShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bank whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bank extends Model
{
    protected $visible = ['name','site','created_at'];

    public static function bankParse()
    {
        $banks = self::getDataFromSite();
        self::setDataFromSite($banks);
    }

    public static function getDataFromSite()
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', 'banks/list', self::getProxy());
        $banks = json_decode($request->getBody()->getContents());
        return $banks;
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

    /**
     * @param array $banks
     */
    public static function setDataFromSite($banks = [])
    {
        if (sizeof($banks) != 0) {
            try {
                for ($i = 0; $i < count($banks->aaData); $i++) {
                    $bank = new Bank();
                    $bank->name = strip_tags($banks->aaData[$i][0]);
                    $bank->name_short = strip_tags($banks->aaData[$i][0]);
                    $crawler = new Crawler($banks->aaData[$i][0]);
                    $bank->link = $crawler->filter('a')->attr('href');
                    $bank->bank_site_id = self::getBankId($bank->link);
                    $bank->site = strip_tags($banks->aaData[$i][1]);
                    $bank->status = 1; // активный
                    $bank->save();
                }
            } catch (Exception $e) {
                echo 'Ошибки при записи данных в таблицу : ' . $bank->table, $e->getMessage(), "\n";
            }
        }
    }

    /**
     * @param $uri
     * @return bool|string
     */
    private static function getBankId($uri)
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', $uri . '/otdeleniya', self::getProxy());
        $res = $request->getBody()->getContents();
        $pb = strpos($res, '"url": "/offices/list/');
        $pe = strpos($res, '"', $pb + strlen('"url": "/offices/list/'));
        $bankId = substr($res, $pb + strlen('"url": "/offices/list/'), $pe - $pb - strlen('"url": "/offices/list/'));
        return $bankId;

    }

    // находим все курсы
    public static function getBankKurses($bankId = 0)
    {
        return Bank::findOrFail($bankId)->kurses()->
        where('status', '=', '1')->
        orderBy('bank_offices_id', 'desc')->
        orderBy('currencies')->
        get(['bank_id', 'bank_offices_id', 'pokupka', 'prodaja', 'currencies']);
    }

    // взять все курсы
    public function kurses()
    {
        return $this->hasMany('App\BankKurs');
    }

}
