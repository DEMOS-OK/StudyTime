<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuditoriumSeeder::class,
            GroupSeeder::class,
            LessonSeeder::class,
            SpecializationSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            SubjectSeeder::class
        ]);
    }
}
