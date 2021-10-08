<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer')->nullable();
            $table->string('specialisation')->nullable();
            $table->string('industry')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('achievements')->nullable();
            $table->string('awards')->nullable();
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('talent_experiences');
    }
}
