<?php

use Illuminate\Database\Seeder;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bai_viets')->insert([
            ["title"=>"My friend","content"=>"How to get friend","diadiem_id"=>"1","loaibaiviet_id"=>"1","date"=>"2020-02-02","user_id"=>1,"status"=>1],
            ["title"=>"My friend","content"=>"How to get friend","diadiem_id"=>"1","loaibaiviet_id"=>"1","date"=>"2020-02-02","user_id"=>1,"status"=>1],
            ["title"=>"My friend","content"=>"How to get friend","diadiem_id"=>"1","loaibaiviet_id"=>"1","date"=>"2020-02-02","user_id"=>1,"status"=>1],
            ["title"=>"My friend","content"=>"How to get friend","diadiem_id"=>"1","loaibaiviet_id"=>"1","date"=>"2020-02-02","user_id"=>1,"status"=>1]
        ]
        );
    }
}
