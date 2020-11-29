<?php

use Illuminate\Database\Seeder;

class ChiTietLichTrinhDiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chi_tiet_lich_trinh_dia_diems')->insert([
            ["diadiem_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["diadiem_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["diadiem_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["diadiem_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
        ]
        );
    }
}
