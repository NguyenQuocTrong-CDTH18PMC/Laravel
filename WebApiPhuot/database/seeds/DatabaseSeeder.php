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
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            DiaDiemSeeder::class,
            NhomPhuotSeeder::class,
            UserSeeder::class,
            ThanhVienNhomSeeder::class
        ]);

    }
}
