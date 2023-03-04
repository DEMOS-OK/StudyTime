<?php

declare(strict_types=1);

namespace Database\Factories\Domain\Group\Models;

use App\Domain\Group\Models\Group;
use App\Domain\Specialization\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Group>
 */
final class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'specialization_id' => Specialization::factory(),
        ];
    }
}
