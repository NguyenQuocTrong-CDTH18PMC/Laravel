<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(DiaDiemSeeder::class);
        $this->call(LoaiBaiVietSeeder::class);
        $this->call(BaiVietSeeder::class);

    }
}
