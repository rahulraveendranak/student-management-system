<?php

namespace Database\Seeders;

use App\Models\ReportingTeacher;
use Illuminate\Database\Seeder;

class ReportingTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReportingTeacher::truncate();
        ReportingTeacher::factory()->count(5)->create();
    }
}
