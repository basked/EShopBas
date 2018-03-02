<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bank;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

/**
 * App\BankOffice
 *
 * @property int $id
 * @property int $bank_id
 * @property string $name
 * @property string $name_full
 * @property string $address
 * @property string $link
 * @property float|null $gps_x
 * @property float|null $gps_y
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereGpsX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereGpsY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankOffice whereNameFull($value)
 * @mixin \Eloquent
 */
class BankOffice extends Model
{
    // не использовать временные метки
    public $timestamps = false;
    // поля видны для Json
    protected $visible = ['id','name','bank_id','address','gps_x','gps_y','kurses'];
   // Связь со связанными таблицами
    protected $with = ['banks','kurses'];

    public function banks()
    {
        return $this->belongsTo('App\Bank');
    }

    // Связь с курсами для банка
    public function kurses()
    {
        return $this->hasMany('App\BankKurs','bank_offices_id','id')->where('status_id','=','1')->orderBy('bank_offices_id');
    }


    /**
     *
     */
    public static function bankOfficesParse ()
    {
        $bankOffices = self::getDataFromSiteAll();
        self::setDataFromSite($bankOffices);
    }

    /**
     * @return array
     */
    public static function getDataFromSiteAll ()
    {

        $bank_offices = [];
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);
        $banks = Bank::all();
        foreach ($banks as $bank) {
            $request = $client->request('GET', 'offices/list/' . $bank->bank_site_id, self::getProxy());
            $bank_office = json_decode($request->getBody()->getContents(), true);
            // $bank_office['aaData']['id']=$bank->id;
            $bank_offices['office_info'][] = $bank_office['aaData'];
            $bank_offices['bank_id'][] = $bank->id;
        }
        return $bank_offices;
    }

    /**
     * @param bool $isActive
     * @return array
     */
    private static function getProxy ($isActive = false)
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
     * @param $bankOffices
     */
    public static function setDataFromSite ($bankOffices)
    {
        try {
            for ($i = 0; $i < count($bankOffices['office_info']); $i++) {
                foreach ($bankOffices['office_info'][$i] as $office_info) {
                    $bankOffice = new BankOffice();
                    $bankOffice->bank_id = $bankOffices['bank_id'][$i];
                    $bankOffice->name = strip_tags($office_info[0]);
                    $bankOffice->address = $office_info[1];
                    $crawler = new Crawler($office_info[0]);
                    $crawler2 = new Crawler($office_info[2]);
                    $bankOffice->office_site_id = explode('/', $crawler->filter('a')->attr('href'))[4];
                    $bankOffice->name_full = $crawler2->filter('a')->attr('data-name');
                    $bankOffice->gps_x = $crawler2->filter('a')->attr('data-x');
                    $bankOffice->gps_y = $crawler2->filter('a')->attr('data-y');
                    $bankOffice->save();
                    unset($crawler);
                    unset($crawler2);
                }
            }
        } catch
        (Exception $e) {
            echo 'Ошибки при записи данных в таблицу : ' . BankOffice::table, $e->getMessage(), "\n";
        }
    }

    /**
     * @param $bank_site_id
     * @return mixed
     */
    public static function getDataFromSite ($bank_site_id)
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);
        $request = $client->request('GET', 'offices/list/' . $bank_site_id, self::getProxy());
        $bank_offices = json_decode($request->getBody()->getContents());
        return $bank_offices;
    }
}
