<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            ['code' => '43763','name' => 'Molho de Buteco', 'size' => '150.00', 'quantity' => '60', 'measure_id' => '2', 'type_id' => '5'],
        ]);
    }
}
