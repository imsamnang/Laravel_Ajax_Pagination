<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUserLoginHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_login_histories', function (Blueprint $table) {
            $table->increments('login_id');
            $table->string('login_ipadress','255');
            $table->string('login_user_agent','255');
            $table->integer('user_id_for')->unsigned();
            $table->timestamps();//when logout update (update at)
             
            $table->foreign('user_id_for')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_login_histories');
    }
}
