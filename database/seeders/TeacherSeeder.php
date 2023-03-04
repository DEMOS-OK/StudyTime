<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Teacher\Models\Teacher;
use DB;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('teacher')->truncate();
        Teacher::factory()->count(60)->make();
    }
}
