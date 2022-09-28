<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corp_agents', function (Blueprint $table) {
            $table->dropColumn(['schooling','momName','dadName','inChargeName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corp_agents', function (Blueprint $table) {
            $table->string('schooling');
            $table->string('momName');
            $table->string('dadName');
            $table->string('inChargeName');
        });
    }
};
