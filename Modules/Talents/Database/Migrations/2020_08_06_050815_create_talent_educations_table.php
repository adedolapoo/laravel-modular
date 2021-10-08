<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_educations', function (Blueprint $table) {
            $table->increments('id');
			$table->string('institution')->nullable();
			$table->string('course')->nullable();
			$table->string('start_date')->nullable();
			$table->string('end_date')->nullable();
			$table->string('degree')->nullable();
			$table->string('grade')->nullable();
            $table->text('documents')->nullable();
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
        Schema::dropIfExists('talent_educations');
    }
}
