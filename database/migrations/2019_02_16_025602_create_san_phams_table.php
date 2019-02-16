<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('san_pham_id');
            //phan o giua nay dung de bo sung them cot ban dau
            $table->string('ten_san_pham',255);
            $table->integer('gia_ban');
            //end phan o gia
            $table->timestamps(); //neu timestamps =  true thi se tao ra 2 cot created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
