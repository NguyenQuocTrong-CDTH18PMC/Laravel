<?php

use Illuminate\Database\Seeder;

class ChiTietLichTrinhNhomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chi_tiet_lich_trinh_nhoms')->insert([
            ["nhomphuot_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["nhomphuot_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["nhomphuot_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
            ["nhomphuot_id"=>"1","lotrinh_id"=>"1","status"=>"1"],
        ]
        );
    }
}
