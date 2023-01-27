<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Color;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    public static ?Collection $colors_id = null;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        if (empty(self::$colors_id)) {
            self::$colors_id = Color::all()->pluck('id');
        }

        if (self::$colors_id->isEmpty()) {
            throw new Exception('Нет доступных цветов');
        }

        $color_id = self::$colors_id->random();

        return [
            'model' => $this->faker->word(),
            'number' => 'А001АА72',
            'color_id' => $color_id,
            'comment' => $this->faker->sentence(2),
        ];
    }
}
