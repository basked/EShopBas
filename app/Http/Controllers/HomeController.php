<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


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

    public function testSetDB ()
    {
        $this->testDB();
        $this->testIns();
    }

   public function testConnect(){
      echo  Schema::getConnection()->getDatabaseName();
   }
    // тестирование функции

    private function testDB ()
    {


        $tableMaster = 'shops';
        $tableDetail = 'shops_detail';

        // если есть удаляем таблицы
        Schema::dropIfExists($tableDetail);
        Schema::dropIfExists($tableMaster);


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
                $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');;
            });
        };

        // Add column PHONE for Detail
        if (!Schema::hasColumn($tableDetail, 'phone')) {
            Schema::table($tableDetail, function (Blueprint $table) {
                $table->string('phone')->after('email')->comment('phone');
            });
        }
        // Add column PHONE_MOBILE for Detail
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
        // добавим для магазина время вставки/ редактирования
        Schema::table('shops', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable()->after('status');
        });
        // Some actions
        /*Schema::table($tableDetail, function (Blueprint $table) {
            // Will not work run all actions
            $table->string('test', 12)->after('email');
            echo 'Add Test Column';
            $table->renameColumn('test', 'test1');
            echo 'Rename Column from test to test1';
            $table->dropColumn('test1');
        });*/

    }

    private function testIns ()
    {
        $date = new DateTime();

        // Insert data to Shops
        DB::table('shops')->insert([['name' => 'BelBazar.by', 'status' => 1, 'created_at' => $date],
            ['name' => 'CandyLady.by', 'status' => 1, 'created_at' => $date],
            ['name' => 'BrestModa.by', 'status' => 1, 'created_at' => $date]
        ]);
        // insert data to Shops_detail
        DB::table('shops_detail')->insert([
            ['shop_id'=>1, 'address'=>'г.Брест,ул. Сов. Конституции, д.15А, к. 710','email'=> 'basket.baza@gmail.com','phone'=>'','phone_mobile'=> '+375 29 8210344'],
            ['shop_id'=>1, 'address'=>'г.Брест,ул. Сов. Конституции, д.15А, к. 711','email'=> 'basket@gmail.com','phone'=>'','phone_mobile'=> '+375 29 8210344'],
            ['shop_id'=>1, 'address'=>'г.Брест,ул. Сов. Конституции, д.15А, к. 712','email'=> 'basket_pro@gmail.com','phone'=>'','phone_mobile'=> '+375 29 8210344'],
            ['shop_id'=>2, 'address'=>'г.Брест, ул. Я. Купалы, д.3/1, к. 301','email'=> 'basket_pro@gmail.com','phone'=>'','phone_mobile'=> '+375 29 8210344'],
            ['shop_id'=>3, 'address'=>'г.Пружаны, ул. Строительная, д. 15','email'=> 'basket_pro@gmail.com','phone'=>'','phone_mobile'=> '+375 29 8210344'],
        ]);

        //
    }
}
