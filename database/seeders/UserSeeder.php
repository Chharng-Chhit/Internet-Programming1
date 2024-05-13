<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create(
        // [
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ];
        // );
        $user = [
            [
                'name'      => 'Chharng Chhit',
                'email'     => 'chharngchhit@gmail.com',
                'password'  => bcrypt(12345678),
                'avatar'    => '',
            ],
            [
                'name'      => 'Chhit',
                'email'     => 'chharngchhit1@gmail.com',
                'password'  => bcrypt(12345678),
                'avatar'    => '1.png',
            ],
            [
                'name'      => 'Chharng',
                'email'     => 'chharngchhit2@gmail.com',
                'password'  => bcrypt(12345678),
                'avatar'    => '1.png',
            ]
        ];
        DB::table('users')->insert($user);
    }
}
