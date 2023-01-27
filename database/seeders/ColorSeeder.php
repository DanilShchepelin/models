<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Color::factory()->create([
            'name' => 'Black'
        ]);

        Color::factory()->create([
            'name' => 'Red'
        ]);

        Color::factory()->create([
            'name' => 'Green'
        ]);

        Color::factory()->create([
            'name' => 'Blue'
        ]);

        Color::factory()->create([
            'name' => 'Yellow'
        ]);
    }
}
