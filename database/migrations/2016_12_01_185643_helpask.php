<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Helpask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('help_asks', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name')->nullable();
    		$table->string('email')->nullable();
    		$table->string('tel')->nullable();
    		$table->string('ask')->nullable();
    		$table->integer('user_id')->nullable();
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('helpask');
    }
}
