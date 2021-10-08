<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToTalentCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talent_certifications', function (Blueprint $table) {
            $table->integer('certification_id')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talent_certifications', function (Blueprint $table) {
            $table->dropColumn('certification_id');
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
        });
    }
}
