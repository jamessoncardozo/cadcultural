<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agents', function ($table) {
            $table->dropColumn(['bank','bankAgency','bankAccountType','bankAccount']);
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
            $table->string('bank');
            $table->string('bankAgency');
            $table->string('bankAccount');
            $table->string('bankAccountType');
        });
    }
}
