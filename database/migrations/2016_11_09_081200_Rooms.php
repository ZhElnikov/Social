<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create ('rooms',function(Blueprint $t){
			$t->increments('id');
			$t->integer('user_id');
			$t->string('name');
			$t->enum('showhile',array('show','hide'))->default('show');
			$t->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
