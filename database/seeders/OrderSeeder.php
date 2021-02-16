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
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        Order::insert([
            ['ready_date' => $dateNow, 'quantity' => 54, 'status' => 1, 'user_id' => 1, 'product_id' => 1],
            ['ready_date' => $dateNow, 'quantity' => 23, 'status' => 0, 'user_id' => 1, 'product_id' => 1],
            ['ready_date' => $dateNow, 'quantity' => 12, 'status' => 0, 'user_id' => 1, 'product_id' => 1],
        ]);
    }
}
