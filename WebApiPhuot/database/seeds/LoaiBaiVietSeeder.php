<?php

use Illuminate\Database\Seeder;

class LoaiBaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loai_bai_viets')->insert([
            ["name"=>"blog"],
            ["name"=>"story"],
            ["name"=>"sale"],
          
        ]
        );
    }
}
