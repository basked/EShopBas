<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bank;
use App\BankOffice;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class BankKurs extends Model
{
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


    public static function getDataFromSite($bank_site_id, $currencies)
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);
        $request = $client->request('GET', 'kurs/list_one/' . $bank_site_id . '?code=' . $currencies, self::getProxy());
        $bank_kurses = json_decode($request->getBody()->getContents());
        return $bank_kurses;
    }

    public static function getDataFromSiteAll()
    {
        $currencies = ['usd', 'eur', 'rub', 'pln', 'uah'];
        $bank_kurses = [];
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 120.0
        ]);
        $banks = Bank::all();
        foreach ($currencies as $currency) {
            foreach ($banks as $bank) {
                $request = $client->request('GET', 'kurs/list_one/' . $bank->bank_site_id . '?code=' . $currency,
                    self::getProxy());
                $bank_kurs = json_decode($request->getBody()->getContents(), true);
                $bank_kurses['kurs_info'][] = $bank_kurs;
                $bank_kurses['bank_id'][] = $bank->id;
                $bank_kurses['bank_currency'][] = $currency;
            }
        }
        return $bank_kurses;
    }


    public static function setDataFromSite($bankKurses)
    {
        try {
            for ($i = 0; $i < count($bankKurses['kurs_info']); $i++) {
                foreach ($bankKurses['kurs_info'][$i] as $kurs_info) {
                    if (!empty($kurs_info)) {
                        $bankKurs = new BankKurs();

                        // $bankKurs->pokupka = str_replace(',', '.', $kurs_info[1]);

                        if (!empty(str_replace(',', '.', $kurs_info[1]))*1) {
                            $bankKurs->pokupka = (float)str_replace(',', '.', $kurs_info[1]);
                        };
                        if (!empty(str_replace(',', '.', $kurs_info[2]))*1) {
                            $bankKurs->prodaja = (float)str_replace(',', '.', $kurs_info[2]);
                        };

                        $bankKurs->bank_id = $bankKurses['bank_id'][$i];
                        $bankKurs->bank_offices_id = self::getOfficesId($kurs_info[0]);
                        $bankKurs->currencies = $bankKurses['bank_currency'][$i];
                        $bankKurs->save();
                    }
                }
            }
        } catch
        (Exception $e) {
            echo 'Ошибки при записи данных в таблицу : ' . BankOffice::table, $e->getMessage(), "\n";
        }
    }

    public static function bankKursesParse()
    {
        $bankKurses = self::getDataFromSiteAll();
        self::setDataFromSite($bankKurses);
    }


    private static function getOfficesId($offices)
    {
        $crawler = new Crawler($offices);
        $office_site_id = explode('/', $crawler->filter('a')->eq(2)->attr('href'))[4];
        $office_id = BankOffice::where('office_site_id', '=', $office_site_id)->value('id');
        return $office_id;
    }


}
