<?php

namespace App\Http\Controllers;

use App\BankAtm;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class BankAtmController extends Controller
{
    public function bankAtms(){
        dd(BankAtm::getDataFromSiteAll());
    }

    public function bankAtmsParse(){
        dd(BankAtm::bankAtmsParse());
    }

}
