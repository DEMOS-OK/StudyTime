<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Auditorium\Models;

use App\Domain\Auditorium\Models\Auditorium;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Auditorium>
 */
final class AuditoriumFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Auditorium::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'corpus' => fake()->numberBetween(1, 20),
            'office' => fake()->numberBetween(1, 100),
        ];
    }
}
