<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietLichTrinhNhoms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_lich_trinh_nhoms', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('nhomphuot_id');
            $table->foreign('nhomphuot_id')->references('id')->on('nhom_phuots');

            $table->unsignedInteger('lotrinh_id');
            $table->foreign('lotrinh_id')->references('id')->on('lo_trinhs');

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
        Schema::dropIfExists('chi_tiet_lich_trinh_nhoms');
    }
}
