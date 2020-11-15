<?php

use Illuminate\Database\Seeder;

class DiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dia_diems')->insert([
            ["name"=>"Đà lạt","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Củ Chi","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Tây nguyên","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Đia đạo bến đình","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Bình thuận","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Komtum","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1],
            ["name"=>"Đà lạt","toadoX"=>"12","toadoY"=>"13","loai_id"=>1,"status"=>1]
        ]

        );
    }
}
