<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemCotCamGiacVaoBangBanGai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ban_gai', function (Blueprint $table) {
            //
            $table->text('cam_giac',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ban_gai', function (Blueprint $table) {
            //
            if (Schema::hasColumn('ban_gai', 'cam_giac')) {
                $table->dropColumn('cam_giac');
            }
        });
    }
}
