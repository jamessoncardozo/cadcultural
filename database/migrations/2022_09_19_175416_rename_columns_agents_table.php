<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class RenameColumnsAgentsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agents', function ($table) {
            
            $table->renameColumn('phoneNumber','phone_number');
            $table->renameColumn('dadName','dad_name');
            $table->renameColumn('momName','mom_name');
            $table->renameColumn('birthDate','birth_date');
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
        Schema::table('agents', function ($table) {

            $table->renameColumn('phone_number','phoneNumber');
            $table->renameColumn('dad_name','dadName');
            $table->renameColumn('mom_name','momName');
            $table->renameColumn('birth_date','birthDate');
            $table->renameColumn('adress_number','adressNumber');
            $table->renameColumn('adress_district','adressDistrict');
            $table->renameColumn('adress_zip_code','adressZipCode');
            $table->renameColumn('adress_city','adressCity');
            $table->renameColumn('accept_LGPD','acceptLGPD');

        });
    }
}
