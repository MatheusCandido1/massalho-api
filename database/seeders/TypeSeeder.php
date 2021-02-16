<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            ['name' => 'Farofa'],
            ['name' => 'Tempero'],
            ['name' => 'Sais'],
            ['name' => 'Especiarias'],
            ['name' => 'Molhos']
        ]);
    }
}
