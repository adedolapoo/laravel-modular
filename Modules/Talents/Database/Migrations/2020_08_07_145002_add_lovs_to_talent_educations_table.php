<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLovsToTalentEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talent_educations', function (Blueprint $table) {
            $table->integer('institution_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('degree_id')->nullable();
            $table->integer('grade_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talent_educations', function (Blueprint $table) {
            $table->dropColumn('institution_id');
            $table->dropColumn('course_id');
            $table->dropColumn('degree_id');
            $table->dropColumn('grade_id');
        });
    }
}
