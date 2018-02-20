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
    public $timestamps = false;


    public static function bankOfficesParse ()
    {
        $bankOffices = self::getDataFromSiteAll();
        self::setDataFromSite($bankOffices);
    }


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

    /**
     * @param bool $isActive
     * @return array
     */
    private static function getProxy ($isActive = true)
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
            $bank_office = json_decode($request->getBody()->getContents());
           // array_push($bank_office,$bank->id);

            array_push($bank_offices, $bank_office->aaData);
        }
       return $bank_offices;
    }

    public static function setDataFromSite ($bankOffices = [])
    {
        if (sizeof($bankOffices) != 0) {
            try {
                for ($i = 0; $i < count($bankOffices); $i++) {
                    $bankOffice = new BankOffice();
                    $bankOffice->bank_id = $bankOffices[$i]['id'];
                    $bankOffice->name = strip_tags($bankOffices[$i][0]);
                    $bankOffice->address = $bankOffices[$i][1];
                    $crawler = new Crawler($bankOffices[$i][0]);
                    $crawler2 = new Crawler($bankOffices[$i][2]);
                    $bankOffice->link = $crawler->filter('a')->attr('href');
                    $bankOffice->name_full = $crawler2->filter('a')->attr('data-name');
                    $bankOffice->gps_x = $crawler2->filter('a')->attr('data-x');
                    $bankOffice->gps_y = $crawler2->filter('a')->attr('data-y');
                    $bankOffice->save();
                    unset($crawler);
                    unset($crawler2);
                }
            } catch (Exception $e) {
                echo 'Ошибки при записи данных в таблицу : ' . BankOffice::table, $e->getMessage(), "\n";
            }
        }

    }
}
