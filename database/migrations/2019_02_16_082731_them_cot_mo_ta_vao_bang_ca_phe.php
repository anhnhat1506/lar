<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemCotMoTaVaoBangCaPhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ca_phe', function (Blueprint $table) {
            //
            $table->text('mo_ta',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ca_phe', function (Blueprint $table) {
            //
            if(Schema::hasColumn('ca_phe', 'mo_ta')) {
                $table->dropColumn('mo_ta');
            }
            
        });
    }
}
