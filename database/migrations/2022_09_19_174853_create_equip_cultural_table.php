<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipCulturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equip_cultural', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adress');
            $table->string('howToGetHere');
            $table->string('phoneNumber');
            $table->string('email');
            $table->mediumText('description');
            $table->string('fullPath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equip_cultural');
    }
}
