<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigTalentCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gig_talent_comments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('gig_talent_id')->nullable();
			$table->integer('gig_id')->nullable();
			$table->integer('user_id');
			$table->boolean('is_business')->default(0);
			$table->text('body')->nullable();

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
        Schema::dropIfExists('gig_talent_comments');
    }
}
