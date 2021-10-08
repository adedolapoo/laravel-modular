<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveOldLovsToTalentEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('', function (Blueprint $table) {
            Schema::table('talent_educations', function (Blueprint $table) {
                $table->dropColumn('institution');
                $table->dropColumn('course');
                $table->dropColumn('degree');
                $table->dropColumn('grade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('', function (Blueprint $table) {
            $table->string('institution')->nullable();
            $table->string('course')->nullable();
            $table->string('degree')->nullable();
            $table->string('grade')->nullable();
        });
    }
}
