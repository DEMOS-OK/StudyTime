<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Auditorium\Models\Auditorium;
use DB;
use Illuminate\Database\Seeder;

class AuditoriumSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('auditorium')->truncate();
        Auditorium::factory()->count(200)->make();
    }
}
