<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [
                'id' => 111,
                'name' => 'Mvrc',
                'position' => 'Dev',
                'email' => 'mjaspa9@gmail.com',
                'pin_code' => '1234',
                'permissions' => json_encode(['view_reports', 'edit_profile']),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 112,
                'name' => 'Marc-Aspa',
                'position' => 'BSCS2A-Student',
                'email' => 'aspa2221591@mkt.ceu.edu.ph',
                'pin_code' => '5678',
                'permissions' => json_encode(['view_reports']),
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more employees as needed
        ]);
    }
}
