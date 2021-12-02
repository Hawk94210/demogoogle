<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->first_name = 'Vux';
        $order->last_name = 'N';
        $order->country = 'PTho';
        $order->email = 'njvux@gmail.com';
        $order->phone = '0399954562';
        $order->save();
    }
}
