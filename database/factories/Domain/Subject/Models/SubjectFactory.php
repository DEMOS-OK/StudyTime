<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Subject\Models;

use App\Domain\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
final class SubjectFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Subject::class;

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
