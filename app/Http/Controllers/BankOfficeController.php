<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BankOffice;

class BankOfficeController extends Controller
{
   public function bankOffices(){
      dd(BankOffice::getDataFromSiteAll());
   }

    public function bankOfficesParse(){
        dd(BankOffice::bankOfficesParse());
    }

}
