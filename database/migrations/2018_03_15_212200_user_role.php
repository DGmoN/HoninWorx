<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_role', function (Blueprint $table) {
        $table->increments('id', true);
        $table->integer('user_id')->unsigned();
        $table->integer('role_id')->unsigned();
      });
      Schema::table('user_role', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('role_id')
            ->references('id')->on('role');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
}
