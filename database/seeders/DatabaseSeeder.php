<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use function Symfony\Component\Translation\t;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
    }
}