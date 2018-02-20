<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;
use App\BankKurs;

class BankKursController extends Controller
{
    public function bankKursesParse(){
        dd(BankKurs::bankKursesParse());
    }

    public function bankKurses()
    {
        dd(BankKurs::getDataFromSiteAll());
    }

}
