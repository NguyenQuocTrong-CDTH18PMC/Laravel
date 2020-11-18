<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["name"=>"Minh Hải","image"=>"minh-hai.jpg","email"=>"minhhai@gmail.com","phone"=>"0123456789","fullname"=>"Tô Minh Hải","status"=>1,"password"=>bcrypt("MinhHai")],
            ["name"=>"Minh Anh","image"=>"minh-anh.jpg","email"=>"minhanh@gmail.com","phone"=>"0246813579","fullname"=>"Nguyễn Minh Anh","status"=>1,"password"=>bcrypt("MinhAnh")],
            ["name"=>"Quốc Trọng","image"=>"quoc-trong.jpg","email"=>"quoctrong@gmail.com","phone"=>"0135792468","fullname"=>"Nguyễn Quốc Trọng","status"=>1,"password"=>bcrypt("QuocTrong")],
            ["name"=>"Quang Huy","image"=>"quang-huy.jpg","email"=>"quanghuy@gmail.com","phone"=>"0987654321","fullname"=>"Trương Quang Huy","status"=>1,"password"=>bcrypt("QuangHuy")],
            ["name"=>"Chấn Huy","image"=>"chan-huy.jpg","email"=>"chanhuyi@gmail.com","phone"=>"0975318642","fullname"=>"Lương Cao Chấn Huy","status"=>1,"password"=>bcrypt("ChanHuy")],
            ["name"=>"Đình Đức","image"=>"dinh-duc.jpg","email"=>"dinhduc@gmail.com","phone"=>"0864297531","fullname"=>"Bùi Đình Đức","status"=>1,"password"=>bcrypt("DinhDuc")],
        ]

        );
    }
}
