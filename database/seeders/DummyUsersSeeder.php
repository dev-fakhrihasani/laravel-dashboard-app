<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin1'),
                'role' => 'admin',
            ],
            [
                'name' => 'Member1',
                'email' => 'member1@gmail.com',
                'password' => bcrypt('member1'),
                'role' => 'member',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
