<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function($table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->boolean('spam')->default(0);
            $table->string('title', 250);
            $table->string('image', 250)->nullable();
            $table->boolean('status')->default(0);
            $table->string('slug');
            $table->text('description')->nullable()->default(NULL);
            $table->text('category_id')->nullable();
            $table->text('body')->nullable();
            $table->integer('view_cache')->unsigned()->default(0);
            $table->integer('user_id')->unsigned();
            $table->timestamps();

           /* $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      /*  Schema::table('posts', function($table)
        {
            $table->dropForeign('user_id');
        });*/

        Schema::drop('posts');
    }
}
