<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_agents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agents');
            $table->foreign('agents')->references('id')->on('agents');
            $table->unsignedBigInteger('artistic_segments');
            $table->foreign('artistic_segments')->references('id')->on('artistic_segments');
            $table->string('email')->unique();
            $table->string('cnpj', 14)->nullable();
            $table->string('inChargeName');
            $table->date('birthDate');
            $table->string('dadName', 100);
            $table->string('momName', 100);
            $table->string('genre');
            $table->string('schooling');
            $table->string('adress');
            $table->string('adressNumber');
            $table->string('adressDistrict');
            $table->string('adressZipCode', 8);
            $table->string('adressCity');
            $table->string('bank');
            $table->string('bankAgency');
            $table->string('bankAccount');
            $table->string('bankAccountType');
            $table->boolean('acceptLGPD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_agents');
    }
}
