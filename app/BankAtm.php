<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BankAtm
 *
 * @property int $id
 * @property int $bank_id
 * @property string $name
 * @property string $name_full
 * @property string $address
 * @property string $link
 * @property mixed $currencies
 * @property string|null $work_time
 * @property float|null $gps_x
 * @property float|null $gps_y
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereCurrencies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereGpsX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereGpsY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereNameFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BankAtm whereWorkTime($value)
 * @mixin \Eloquent
 */
class BankAtm extends Model
{
    public $timestamps = false;
}
