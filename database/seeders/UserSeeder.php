<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('password')
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
