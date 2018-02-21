<?php
/*Определенная миграция
* a migrate create_bank_details_table
*  a migrate:rollback create_bank_details_table
 */

namespace App\Http\Controllers;

use App\BankOffice;
use Illuminate\Http\Request;
use App\Bank;


/** Set Proxy Connect
 * @param bool $isActive
 * @return array
 */
class BankController extends Controller
{

    public function banks()
    {
        dd(Bank::getDataFromSite());
    }

    public function banksParse()
    {
        dd(Bank::BankParse());
    }

    public function banksKurses($bankId)
    {
        $bankName = Bank::findOrFail($bankId);
        $officesCount = BankOffice::where('bank_id', '=', $bankId)->count();


        $bankKurses = Bank::getBankKurses($bankId);
        return view('banks.bank',
            [
                'bankKurses' => $bankKurses,
                'name' => $bankName->name,
                'cnt' => $officesCount
            ]);


    }
}
