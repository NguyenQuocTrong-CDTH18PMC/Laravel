<?php

use App\ThanhVienNhom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //run php artisan db:seed
    //composer dump-autoload: đồng bộ seeder
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
           
            UserSeeder::class,
            DiaDiemSeeder::class,
            LoaiBaiVietSeeder::class,
            BaiVietSeeder::class,
           
            NhomPhuotSeeder::class,
            ThanhVienNhomSeeder::class,
            LoTrinhSeeder::class,
            ChiTietLichTrinhDiaDiemSeeder::class,
            ChiTietLichTrinhNhomSeeder::class,
            ChiTietNhomSeeder::class
            ]);
        // $this->call(DiaDiemSeeder::class);
        // $this->call(LoaiBaiVietSeeder::class);
        // $this->call(BaiVietSeeder::class);


    }
}
