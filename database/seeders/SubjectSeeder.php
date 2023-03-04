<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Subject\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        Subject::factory()->count(300)->make();
    }
}
