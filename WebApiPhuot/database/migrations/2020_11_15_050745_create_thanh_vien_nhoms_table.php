<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhVienNhomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanh_vien_nhoms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhom_id');
            $table->unsignedInteger('user_id');
            $table->foreign('nhom_id')->references('id')->on('nhom_phuots')->onDelete('cascade');
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
        Schema::dropIfExists('thanh_vien_nhoms');
    }
}
