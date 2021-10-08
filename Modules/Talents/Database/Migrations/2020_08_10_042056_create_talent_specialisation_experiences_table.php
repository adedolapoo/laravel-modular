<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentSpecialisationExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_specialisation_experiences', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('talent_specialisation_id');
            $table->string('employer_id');
            $table->string('industry')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('achievements')->nullable();
            $table->string('awards')->nullable();
            $table->string('grade')->nullable();

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
        Schema::dropIfExists('talent_specialisation_experiences');
    }
}
