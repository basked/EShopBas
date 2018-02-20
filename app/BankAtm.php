<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bank;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

/**
 * App\BankAtm
 *
 * @property int $id
 * @property int $bank_id
 * @property string $name
 * @property string $name_full
 * @property string $address
 * @property string $link
 * @property mixed $currencies
 * @property string|null $work_time
 * @property float|null $gps_x
 * @property float|null $gps_y
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereCurrencies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereGpsX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereGpsY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereNameFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereWorkTime($value)
 * @mixin \Eloquent
 */
class BankAtm extends Model
{
    public $timestamps = false;

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
     * @param $bank_site_id
     * @return mixed
     */
    public static function getDataFromSite($bank_site_id)
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);

        $request = $client->request('GET', 'atms/list/' . $bank_site_id, self::getProxy());
        $bank_atms = json_decode($request->getBody()->getContents());
        return $bank_atms;
    }

    /**
     * @return array
     */
    public static function getDataFromSiteAll()
    {
        $bank_atms = [];
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);
        $banks = Bank::all();
        foreach ($banks as $bank) {
            $request = $client->request('GET', 'atms/list/' . $bank->bank_site_id, self::getProxy());
            $bank_atm = json_decode($request->getBody()->getContents(), true);
            // $bank_office['aaData']['id']=$bank->id;
            $bank_atms['atm_info'][] = $bank_atm['aaData'];
            $bank_atms['bank_id'][] = $bank->id;
        }
        return $bank_atms;
    }

    /**
     * @param $bankOffices
     */
    public static function setDataFromSite($bankAtms)
    {
        try {
            for ($i = 0; $i < count($bankAtms['atm_info']); $i++) {
                if (!empty($bankAtms['atm_info'][$i])) {
                    foreach ($bankAtms['atm_info'][$i] as $atm_info) {
                        $bankAtm = new BankAtm();
                        $bankAtm->bank_id = $bankAtms['bank_id'][$i];
                        $crawler1 = new Crawler($atm_info[0]);
                        $crawler2 = new Crawler($atm_info[2]);
                        $crawler3 = new Crawler($atm_info[3]);
                        $bankAtm->name = $crawler1->filter('a')->text();
                        $bankAtm->name_full = $crawler3->filter('a')->attr('data-name');
                        $bankAtm->address = $crawler1->filter('a')->text();
                        $bankAtm->atm_site_id = explode('atm-', $crawler1->filter('a')->attr('href'))[1];
                        $bankAtm->currencies = json_encode(explode(',', $atm_info[1]));
                        if ($crawler2->filter('a')->count() > 0) {
                            $bankAtm->work_time = $crawler2->filter('a')->attr('title');
                        }
                        $bankAtm->gps_x = $crawler3->filter('a')->attr('data-x');
                        $bankAtm->gps_y = $crawler3->filter('a')->attr('data-y');
                        $bankAtm->save();
                        unset($crawler1);
                        unset($crawler2);
                        unset($crawler3);
                    }
                }
            }
        } catch
        (Exception $e) {
            echo 'Ошибки при записи данных в таблицу : ' . BankAtm::table, $e->getMessage(), "\n";
        }
    }

    /**
     *
     */
    public static function bankAtmsParse()
    {
        $bankAtms = self::getDataFromSiteAll();
        self::setDataFromSite($bankAtms);
    }
}
