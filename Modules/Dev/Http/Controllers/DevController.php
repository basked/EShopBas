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
}
