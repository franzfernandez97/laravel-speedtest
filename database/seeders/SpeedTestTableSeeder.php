<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeedTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('speed_tests')->insert([
            [
                'file_name' => 'test1.json',
                'date' => now(),
                'download_speed' => 100.50,
                'upload_speed' => 50.25,
                'isp' => 'ISP1',
                'server_country' => 'USA',
                'server_location' => 'New York',
                'client_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'file_name' => 'test2.json',
                'date' => now(),
                'download_speed' => 200.75,
                'upload_speed' => 75.50,
                'isp' => 'ISP2',
                'server_country' => 'Canada',
                'server_location' => 'Toronto',
                'client_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
