<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
			$table->string('username')->nullable();
			$table->string('phone')->nullable();
			$table->text('address')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_first_login')->default(0);
            /*$table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
			$table->dropColumn('is_first_login');
			$table->dropColumn('phone');
			$table->dropColumn('address');
			$table->dropColumn('avatar');
			/*$table->dropColumn('state_id');
			$table->dropColumn('city_id');*/

        });
    }

}
