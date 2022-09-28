<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsCorpAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corp_agents', function ($table) {
            
            $table->renameColumn('agents','fk_agent');
            $table->renameColumn('artistic_segments','fk_artsegment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corp_agents', function ($table) {

            $table->renameColumn('fk_agent','agents');
            $table->renameColumn('fk_artsegment','artistic_segments');

        });
    }
}