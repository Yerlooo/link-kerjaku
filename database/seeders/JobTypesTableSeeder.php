<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobTypes = [
            ['name' => 'Full-time'],
            ['name' => 'Part-time'],
            ['name' => 'Kontrak'],
            ['name' => 'Freelance'],
            ['name' => 'Magang'],
        ];

        DB::table('job_types')->insert($jobTypes);
    }
}
