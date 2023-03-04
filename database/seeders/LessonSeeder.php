<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Lesson\Models\Lesson;
use DB;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lesson')->truncate();
        Lesson::factory()->count(300)->make();
    }
}
