<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        Car::factory()->create([
//            'model' => 'audi',
//            'number' => 'fdsfadsf',
//            'color_id' => 1,
//            'comment' => 'shdfjhdsahfdsaf',
//        ]);
        Car::factory()->create([
            'number' => 'А001АА72'
        ]);

        Car::factory()->create([
            'number' => 'А002АА72'
        ]);

        Car::factory()->create([
            'number' => 'А003АА72'
        ]);

        Car::factory()->create([
            'number' => 'А004АА72'
        ]);

        Car::factory()->create([
            'number' => 'А005АА72'
        ]);
    }
}
