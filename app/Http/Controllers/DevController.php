<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
class DevController extends Controller
{
    public function devGridData(){
//        return Bank::find([2,5,11])->toJson();
        return Bank::all()->toJson();
    }

    public function devGrid(){
      return  view('devextreme.grid');
    }
}
