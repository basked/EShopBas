<?php

namespace Modules\Dev\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('dev::index');
        // return view('dev::video');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('dev::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('dev::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('dev::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function bestKurses(){
        $bestKuks=DB::table('banks')
            ->leftJoin('bank_kurs', 'banks.id', '=', 'bank_kurs.bank_id')
            ->select('banks.name',  DB::raw('min(prodaja) as min_prodaja'))
            ->where('bank_kurs.prodaja','>',0)
            ->where('bank_kurs.status_id','=',1)
            ->groupBy('banks.name')->orderBy('min_prodaja','desc')
            ->havingRaw('min(prodaja) > 0')
            ->get()->toJson();
        return $bestKuks;
    }

    public function bestKursesPivot(){
//        $bestKuks=DB::table('banks')
//            ->leftJoin('bank_kurs', 'banks.id', '=', 'bank_kurs.bank_id')
//            ->select('banks.name',  DB::raw('b.name ,CONCAT(cast(EXTRACT(YEAR_MONTH FROM bk.created_at) AS CHAR), cast(EXTRACT(DAY_MINUTE FROM bk.created_at) AS CHAR)) AS Year_to_min,bk.currencies CURR,MAX(bk.pokupka) MIN_POKUPKA,MIN(bk.prodaja) MAX_PRoDAJA'))
//            ->where('bank_kurs.prodaja','>',0)
//            ->where('bank_kurs.pokupka','>',0)
//            ->groupBy('b.name' ,'CONCAT(cast(EXTRACT(YEAR_MONTH FROM bk.created_at) AS CHAR), cast(EXTRACT(DAY_MINUTE FROM bk.created_at) AS CHAR))','bk.currencies')->orderBy('name','desc')
//            ->get()->toJson();

        $bestKursParse = DB::select('SELECT
  b.name ,CONCAT(cast(EXTRACT(YEAR_MONTH FROM bk.created_at) AS CHAR)
  , cast(EXTRACT(DAY_MINUTE FROM bk.created_at) AS CHAR)) AS Year_to_min,
  bk.currencies CURR,
  MAX(bk.pokupka) MIN_POKUPKA,
  MIN(bk.prodaja) MAX_PRODAJA
FROM banks b, bank_kurs bk
WHERE b.id = bk.bank_id and bk.prodaja>0 AND bk.pokupka>0
GROUP BY CONCAT(cast(EXTRACT(YEAR_MONTH FROM bk.created_at) AS CHAR)
, cast(EXTRACT(DAY_MINUTE FROM bk.created_at) AS CHAR)),
b.name,bk.currencies
order by 1 asc, 2 desc');
        return $bestKursParse;
    }
}
