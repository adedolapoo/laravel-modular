<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('discipline')->nullable();
            $table->string('provider')->nullable();
            $table->string('year')->nullable();
            $table->integer('talent_id');

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
        Schema::dropIfExists('talent_trainings');
    }
}
