<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKyHocPhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky_hoc_phan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sinh_vien_id');
            $table->unsignedInteger('hoc_phan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dang_ky_hoc_phan');
    }
}
