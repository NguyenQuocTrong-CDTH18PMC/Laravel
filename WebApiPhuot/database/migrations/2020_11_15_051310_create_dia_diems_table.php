<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaDiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_diems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('toadoX');
            $table->string('toadoY');
            $table->unsignedInteger('loai_id');
            $table->tinyInteger('status')->default(1);
            $table->foreign('loai_id')->references('id')->on('loai_dia_diems');
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
        Schema::dropIfExists('dia_diems');
    }
}
