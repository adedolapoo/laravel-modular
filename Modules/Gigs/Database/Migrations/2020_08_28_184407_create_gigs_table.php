<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title')->nullable();
			//$table->integer('specialisation_id');
			$table->integer('business_id');
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->string('slug')->nullable();
			$table->string('uuid')->nullable();
			$table->integer('talent_no')->nullable();
			$table->text('description')->nullable();
			$table->boolean('status')->default(0);
            $table->date('start_date')->nullable();
            $table->date ('end_date')->nullable();
            $table->text ('deliverables')->nullable();
            $table->text ('requirements')->nullable();
            $table->integer ('industry_id')->nullable();
            $table->string ('experience_level')->nullable();

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
        Schema::dropIfExists('gigs');
    }
}
