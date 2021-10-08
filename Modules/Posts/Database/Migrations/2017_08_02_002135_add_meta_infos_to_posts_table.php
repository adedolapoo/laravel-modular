<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMetaInfosToPostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function(Blueprint $table)
        {
			$table->string('meta_title')->nullable();
			$table->text('meta_keywords')->nullable();
			$table->text('meta_description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table)
        {
			$table->dropColumn('meta_title');
			$table->dropColumn('meta_keywords');
			$table->dropColumn('meta_description');

        });
    }

}
