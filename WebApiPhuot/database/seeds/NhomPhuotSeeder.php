<?php

use Illuminate\Database\Seeder;

class NhomPhuotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        DB::table('nhom_phuots')->insert([
            ["name"=>"Nhóm phượt 1","message"=>"this is a message","ngaydi"=>new DateTime,"status"=>1],
            ["name"=>"Nhóm phượt 2","message"=>"this is a message","ngaydi"=>new DateTime,"status"=>1],
            ["name"=>"Nhóm phượt 3","message"=>"this is a message","ngaydi"=>new DateTime,"status"=>1],
            ["name"=>"Nhóm phượt 4","message"=>"this is a message","ngaydi"=>new DateTime,"status"=>1],
            ["name"=>"Nhóm phượt 5","message"=>"this is a message","ngaydi"=>new DateTime,"status"=>1]
        ]);
    }
}
