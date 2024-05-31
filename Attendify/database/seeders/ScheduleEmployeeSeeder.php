<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleEmployeeSeeder extends Seeder
{
    public function run()
    {
        DB::table('schedule_employees')->insert([
            [
                'emp_id' => 111,
                'schedule_id' => 1,
            ],
            [
                'emp_id' => 112,
                'schedule_id' => 2,
            ],
            // Add more schedule assignments as needed
        ]);
    }
}
