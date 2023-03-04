<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Specialization\Models;

use App\Domain\Specialization\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Specialization>
 */
final class SpecializationFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Specialization::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'title' => fake()->domainWord,
        ];
    }
}
