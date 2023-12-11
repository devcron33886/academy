<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Jacques MBABAZI',
                'email_verified_at' => now(),
                'email' => 'mbabazijacques@gmail.com',
                'password' => bcrypt('Imma@1995$'),
                'is_admin' => true,
            ],
            [
                'id' => 2,
                'name' => 'Robert ABANGIRA',
                'email_verified_at' => now(),
                'email' => 'robert.abangira@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => false,
            ],
            [
                'id' => 3,
                'name' => 'Christopher KYEBAMBE',
                'email_verified_at' => now(),
                'email' => 'chris@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => false,
            ],
        ];

        User::insert($users);
    }
}
