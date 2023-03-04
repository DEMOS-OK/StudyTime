<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\Group\Models\Group;
use DB;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('group')->truncate();
        Group::factory()->count(50)->make();
    }
}
