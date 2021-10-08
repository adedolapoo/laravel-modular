<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_certifications', function (Blueprint $table) {
            $table->increments('id');
			$table->string('institution')->nullable();
			$table->string('name')->nullable();
			$table->string('year')->nullable();
			$table->string('validity')->nullable();
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
        Schema::dropIfExists('talent_certifications');
    }
}
