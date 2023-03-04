<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Specialization\Models\Specialization;
use DB;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('specialization')->truncate();
        Specialization::factory()->count(15)->make();
    }
}
