<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'username' => 'user1',
                'user_domain' => 'domain1',
                'os_name' => 'Windows',
                'os_version' => '10',
                'machine_name' => 'Machine-001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'user2',
                'user_domain' => 'domain2',
                'os_name' => 'Linux',
                'os_version' => 'Ubuntu 22.04',
                'machine_name' => 'Machine-002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
