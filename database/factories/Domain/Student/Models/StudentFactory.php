<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Student\Models;

use App\Domain\Group\Models\Group;
use App\Domain\Student\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
final class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'patronymic' => fake()->word,
            'group_id' => Group::factory(),
        ];
    }
}
