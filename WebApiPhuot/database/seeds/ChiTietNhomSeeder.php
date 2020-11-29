<?php

use Illuminate\Database\Seeder;

class ChiTietNhomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chi_tiet_nhoms')->insert([
            ["user_id"=>"1","nhomphuot_id"=>"1","status"=>"1"],
            ["user_id"=>"1","nhomphuot_id"=>"1","status"=>"1"],
            ["user_id"=>"1","nhomphuot_id"=>"1","status"=>"1"],
            ["user_id"=>"1","nhomphuot_id"=>"1","status"=>"1"],
        ]
        );
    }
}
