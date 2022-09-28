<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->string('fileType');
            $table->string('mineType');
            $table->boolean('required');
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
        Schema::dropIfExists('doc_type');
    }
}
