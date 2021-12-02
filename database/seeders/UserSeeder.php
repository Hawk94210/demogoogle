<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = 'nAm';
        $user->email = 'nvux@gmail.com';
        $user->password = bcrypt('123456');
        $user->level = '1';
        $user->save();
    }
}
