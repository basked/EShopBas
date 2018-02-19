<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Bank;

class BankController extends Controller
{

    /**
     *
     */
    public function getGuzzleBank ()
    {
        $client = new Client([
            'base_uri' => 'https://banki24.by/',
            'timeout' => 20.0
        ]);
        $request = $client->request('GET', 'banks/list', $this->getProxy());
        $res = json_decode($request->getBody()->getContents());

        print_r($res);
        for ($i = 0; $i < count($res->aaData); $i++) {
            $bank = new Bank();
            $bank->name = strip_tags($res->aaData[$i][0]);
            $bank->name_short = strip_tags($res->aaData[$i][0]);
            $crawler = new Crawler($res->aaData[$i][0]);
            $bank->link = 'https://banki24.by'. $crawler->filter('a')->attr('href');
            $bank->site = strip_tags($res->aaData[$i][1]);
            $bank->status = 1;
            $bank->save();
        }
    }


    /** Set Proxy Connect
     * @param bool $isActive
     * @return array
     */
    private function getProxy ($isActive = true)
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

}
