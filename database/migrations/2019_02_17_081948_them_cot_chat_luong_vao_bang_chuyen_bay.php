<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemCotChatLuongVaoBangChuyenBay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chuyen_bay', function (Blueprint $table) {
            //
            $table->text('chat_luong',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chuyen_bay', function (Blueprint $table) {
            //
            if (Schema::hasColumn('chuyen_bay', 'chat_luong'))  {
                # code...
                $table->dropColumn('chat_luong');
            }
        });
    }
}
