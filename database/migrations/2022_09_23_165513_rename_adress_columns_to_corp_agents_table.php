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
            $table->renameColumn('adressNumber','adress_number');
            $table->renameColumn('adressDistrict','adress_district');
            $table->renameColumn('adressZipCode','adress_zip_code');
            $table->renameColumn('adressCity','adress_city');
            $table->renameColumn('acceptLGPD','accept_LGPD');
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
            $table->renameColumn('adress_number','adressNumber');
            $table->renameColumn('adress_district','adressDistrict');
            $table->renameColumn('adress_zip_code','adressZipCode');
            $table->renameColumn('adress_city','adressCity');
            $table->renameColumn('accept_LGPD','acceptLGPD');
        });
    }
};
