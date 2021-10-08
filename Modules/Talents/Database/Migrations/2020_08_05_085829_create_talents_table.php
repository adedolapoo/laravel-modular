<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->increments('id');
			$table->string('geo_location')->nullable();
			$table->string('phone')->nullable();
			$table->date('dob')->nullable();
			$table->string('gender')->nullable();
			$table->string('address')->nullable();
			$table->integer('lga_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('country_id')->nullable();
			$table->text('bio')->nullable();
            $table->integer('user_id');

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
        Schema::dropIfExists('talents');
    }
}
