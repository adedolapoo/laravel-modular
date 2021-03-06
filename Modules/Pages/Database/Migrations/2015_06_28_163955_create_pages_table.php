<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('meta_robots_no_index')->default(0);
            $table->string('meta_robots_no_follow')->default(0);

            $table->string('image')->nullable();
            $table->integer('position')->unsigned()->default(0);
            $table->integer('parent_id')->unsigned()->nullable()->default(null);

            $table->boolean('is_home')->default(0);
            $table->boolean('redirect')->default(0);

            $table->text('css')->nullable();
            $table->text('js')->nullable();

            $table->string('module')->nullable();
            $table->string('template')->nullable();

            $table->string('slug')->nullable();
            $table->string('uri')->unique()->nullable();

            $table->string('title');
            $table->text('body')->nullable();
            $table->text('tagline')->nullable();

            $table->boolean('status')->default(1);

            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();

            $table->timestamps();

            //$table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }

}
