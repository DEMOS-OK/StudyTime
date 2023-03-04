<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Student\Models\Student;
use DB;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('student')->truncate();
        Student::factory()->count(1000)->make();
    }
}
