<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Lesson\Models;

use App\Domain\Auditorium\Models\Auditorium;
use App\Domain\Group\Models\Group;
use App\Domain\Lesson\Models\Lesson;
use App\Domain\Subject\Models\Subject;
use App\Domain\Teacher\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lesson>
 */
final class LessonFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Lesson::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'subject_id' => Subject::factory(),
            'group_id' => Group::factory(),
            'teacher_id' => Teacher::factory(),
            'auditorium_id' => Auditorium::factory(),
            'datetime' => fake()->dateTimeBetween(Carbon::now(), Carbon::now()->addMonths(12)),
        ];
    }
}
