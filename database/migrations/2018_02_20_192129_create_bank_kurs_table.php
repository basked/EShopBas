<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankKursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_kurs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('pokupka',5)->nullable();
            $table->double('prodaja',5)->nullable();
            $table->unsignedInteger('bank_id');
            $table->unsignedInteger('bank_offices_id');
            $table->enum('currencies',['usd','eur','rub','pln','uah']);
            $table->unsignedSmallInteger('status_id');
            $table->timestamps();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('bank_offices_id')->references('id')->on('bank_offices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_kurs');
    }
}
