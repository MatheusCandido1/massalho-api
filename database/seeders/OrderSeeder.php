<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            ['quantity' => 54, 'status' => 1, 'user_id' => 1, 'product_id' => 1],
            ['quantity' => 23, 'status' => 0, 'user_id' => 1, 'product_id' => 1],
            ['quantity' => 12, 'status' => 0, 'user_id' => 1, 'product_id' => 1],
        ]);
    }
}
