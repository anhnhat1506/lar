<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemCotMoTaVaoBangDanhBai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danh_bai', function (Blueprint $table) {
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
        Schema::table('danh_bai', function (Blueprint $table) {
            //
            if (Schema::hasColumn('danh_bai', 'mo_ta')) {
                $table->dropColumn('mo_ta');
            }
        });
    }
}
