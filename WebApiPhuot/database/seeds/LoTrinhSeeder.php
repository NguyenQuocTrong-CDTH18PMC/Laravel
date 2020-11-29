<?php

use Illuminate\Database\Seeder;

class LoTrinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lo_trinhs')->insert([
            ["nhom_id"=>"1","diadiem_id"=>"1","status"=>"1"],
            ["nhom_id"=>"1","diadiem_id"=>"1","status"=>"1"],
            ["nhom_id"=>"1","diadiem_id"=>"1","status"=>"1"],
            ["nhom_id"=>"1","diadiem_id"=>"1","status"=>"1"],
            ["nhom_id"=>"1","diadiem_id"=>"1","status"=>"1"], 
        ]
        );
    }
}
