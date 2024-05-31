<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        DB::table('schedules')->insert([
            [
                'slug' => Str::slug('Morning Shift', '-'),
                'time_in' => '08:00:00',
                'time_out' => '16:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => Str::slug('Afternoon Shift', '-'),
                'time_in' => '14:00:00',
                'time_out' => '22:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'slug' => Str::slug('Night Shift', '-'),
                'time_in' => '22:00:00',
                'time_out' => '06:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more schedules as needed
        ]);
    }
}
