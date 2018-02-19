<?php
/*Определенная миграция
* a migrate create_bank_details_table
*  a migrate:rollback create_bank_details_table
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Bank;
use App\BankOffice;


/** Set Proxy Connect
 * @param bool $isActive
 * @return array
 */
class BankController extends Controller
{
    private function getProxy($isActive = false)
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
     *
     */
    public function getGuzzleBanks()
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', 'banks/list', $this->getProxy());
        $res = json_decode($request->getBody()->getContents());

        for ($i = 0; $i <= count($res->aaData); $i++) {
            $bank = new Bank();
            $bank->name = strip_tags($res->aaData[$i][0]);
            $bank->name_short = strip_tags($res->aaData[$i][0]);
            $crawler = new Crawler($res->aaData[$i][0]);
            $bank->link = $crawler->filter('a')->attr('href');
            // id на сайте banki24.by
            $bank->bank_site_id = $this->getBankId($bank->link);
            $bank->site = strip_tags($res->aaData[$i][1]);
            $bank->status = 1;
            $bank->save();
        }
    }

    public function getGuzzleBanksDetail()
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by',
            'timeout' => 120.0
        ]);
        $banks = Bank::all();
        foreach ($banks as $bank) {
            echo $bank->bank_site_id;
            $request = $client->request('GET', 'offices/list/' . $bank->bank_site_id, $this->getProxy());
            $res = json_decode($request->getBody()->getContents());
            /*   echo '<pre>';
            dd($res->aaData);
               echo '</pre>';*/
            for ($i = 0; $i <= count($res->aaData); $i++) {
                $bankOffice = new BankOffice();
                $bankOffice->bank_id = $bank->id;
                $bankOffice->name = strip_tags($res->aaData[$i][0]);
                $bankOffice->address = $res->aaData[$i][1];
                $crawler = new Crawler($res->aaData[$i][0]);
                $crawler2 = new Crawler($res->aaData[$i][2]);
                $bankOffice->link = $crawler->filter('a')->attr('href');
                $bankOffice->name_full = $crawler2->filter('a')->attr('data-name');
                $bankOffice->gps_x = $crawler2->filter('a')->attr('data-x');
                $bankOffice->gps_y = $crawler2->filter('a')->attr('data-y');
                $bankOffice->save();
                unset($crawler);
                unset($crawler2);
            }
            return 1;
        }
    }

    private function getBankId($uri)
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', $uri . '/otdeleniya', $this->getProxy());
        $res = $request->getBody()->getContents();
        $pb = strpos($res, '"url": "/offices/list/');
        $pe = strpos($res, '"', $pb + strlen('"url": "/offices/list/'));
        $bankId = substr($res, $pb + strlen('"url": "/offices/list/'), $pe - $pb - strlen('"url": "/offices/list/'));
        return $bankId;

    }
}
