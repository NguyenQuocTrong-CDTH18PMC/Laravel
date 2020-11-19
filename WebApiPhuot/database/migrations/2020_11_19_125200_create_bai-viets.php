<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiViets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->datetime('date');

            $table->unsignedInteger('diadiem_id');
            $table->foreign('diadiem_id')->references('id')->on('dia_diems');

            $table->unsignedInteger('loaibaiviet_id');
            $table->foreign('loaibaiviet_id')->references('id')->on('loai_bai_viets');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->tinyInteger('status')->default(1);
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
        //
        Schema::dropIfExists('bai_viets');
    }
}
