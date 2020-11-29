<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietLichTrinhDiadiems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_lich_trinh_dia_diems', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('diadiem_id');
            $table->foreign('diadiem_id')->references('id')->on('dia_diems');

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
        Schema::dropIfExists('chi_tiet_lich_trinh_dia_diems');
    }
}
