<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocAnnexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_annex', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_type');
            $table->foreign('doc_type')->references('id')->on('doc_type');
            $table->timestamps();
            $table->string('fileType');
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('doc_annex');
    }
}
