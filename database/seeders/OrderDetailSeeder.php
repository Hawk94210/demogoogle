<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = 1;
        $orderDetail->product_id = 1;
        $orderDetail->quantityOrdered = 2;
        $orderDetail->priceEach = 1500000;
        $orderDetail->save();
    }
}
