<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Psy\Shell;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct ()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        return view('home');
    }

    public function test ()
    {
        $tableMaster = 'shops';
        $tableDetail = 'shops_detail';

        // Create Master Table
        if (!Schema::hasTable($tableMaster)) {
            Schema::create($tableMaster, function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->smallInteger('status');
            });
        };

        // Create Details Table
        if (!Schema::hasTable($tableDetail)) {
            Schema::create($tableDetail, function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('shop_id')->unsigned();
                $table->string('address');
                $table->string('email');
                $table->foreign('shop_id')->references('id')->on('shops');
            });
        };

        // Add column PHONE for Detail
        if (!Schema::hasColumn($tableDetail, 'phone_mobile')) {
            Schema::table($tableDetail, function (Blueprint $table) {
                $table->string('phone_mobile')->after('phone')->comment('phone_mobile');
            });
        }

        //Change attribute column
        if (!Schema::hasColumn($tableDetail, 'email')) {
            Schema::table($tableDetail, function (Blueprint $table) {
                $table->string('email', 50)->nullable()->unique()->change();
            });
        }

        Schema::table($tableDetail, function (Blueprint $table) {

          //  $table->string('test', 12)->after('email');
            echo 'Add Test Column';
          //  $table->renameColumn('test','test1');
            echo 'Rename Column from test to test1';
            $table->dropColumn('test1');
        });

    }
}
