<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
class DevController extends Controller
{
    public function DevData(){
      return Bank::all();
    }
}
