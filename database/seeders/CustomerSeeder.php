<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
            ['name' => 'Supermercados de Belo Horizonte LTDA','fantasy_name' => 'Supermercados BH', 'address' => 'Rua X, 12, Centro', 'city' => 'Luz', 'state' => 'MG', 'phone' => '(31) 9 8239-4392', 'email' => 'contato@superbh.com.br'],
            ['name' => 'Supermercados de Luz LTDA','fantasy_name' => 'Super Luz', 'address' => 'Rua H, 435, Centro', 'city' => 'Luz', 'state' => 'MG', 'phone' => '(31) 9 3445-2133', 'email' => 'contato@superluz.com.br'],
        ]);
    }
}
