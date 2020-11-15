<?php

use Illuminate\Database\Seeder;

class LoaiDiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loai_dia_diems')->insert([
            ["name"=>"Đà lạt","status"=>1],
            ["name"=>"Củ Chi","status"=>1],
            ["name"=>"Tây nguyên","status"=>1],
            ["name"=>"Đia đạo bến đình","status"=>1],
            ["name"=>"Bình thuận","status"=>1],
            ["name"=>"Komtum","status"=>1],
            ["name"=>"Đà lạt","status"=>1]
        ]

        );
    }
}
