<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artistic_segments');
            $table->foreign('artistic_segments')->references('id')->on('artistic_segments');
            $table->timestamps();
            $table->string('name', 100);
            $table->string('cpf', 11)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phoneNumber', 11);
            $table->string('dadName', 100);
            $table->string('momName', 100);
            $table->date('birthDate');
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
        Schema::drop('agents');
    }
}