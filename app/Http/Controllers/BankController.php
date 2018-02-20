<?php
/*Определенная миграция
* a migrate create_bank_details_table
*  a migrate:rollback create_bank_details_table
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

/** Set Proxy Connect
 * @param bool $isActive
 * @return array
 */
class BankController extends Controller
{

  public function banks(){
     dd(Bank::getDataFromSite());
  }

  public function banksParse(){
     dd(Bank::BankParse());
  }
}
