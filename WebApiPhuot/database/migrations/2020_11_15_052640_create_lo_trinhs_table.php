<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoTrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lo_trinhs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhom_id');
            $table->unsignedInteger('diadiem_id');
           //$table->foreign('nhom_id')->references('id')->on('nhom_phuots')->onDelete('cascade');
            $table->foreign('diadiem_id')->references('id')->on('dia_diems');
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
        Schema::dropIfExists('lo_trinhs');
    }
}
