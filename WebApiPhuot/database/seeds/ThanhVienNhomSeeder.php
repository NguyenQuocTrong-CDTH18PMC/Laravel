<?php

use Illuminate\Database\Seeder;

class ThanhVienNhomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanh_vien_nhoms')->insert([
            ["nhom_id"=>1,"user_id"=>1,"status"=>1],
            ["nhom_id"=>1,"user_id"=>2,"status"=>1],
            ["nhom_id"=>1,"user_id"=>3,"status"=>1],
            ["nhom_id"=>1,"user_id"=>4,"status"=>1],
            ["nhom_id"=>1,"user_id"=>5,"status"=>1],
            ["nhom_id"=>1,"user_id"=>6,"status"=>1],

        ]

        );
    }
}
