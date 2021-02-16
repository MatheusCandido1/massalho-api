<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Measure;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measure::insert([
            ['name' => 'grama','initials' => 'g'],
            ['name' => 'milílitro','initials' => 'ml']
        ]);
    }
}
