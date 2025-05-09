<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'username' => 'Admin',
                'nama' => 'Administrator',
                'password' => Hash::make('123456'),
            ],
            [

                'user_id' => 2,
                'level_id' => 2,
                'username' => 'Manager',
                'nama' => 'Manager',
                'password' => Hash::make('123456'),
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'username' => 'Staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('123456'),

            ],
        ];
        DB::table('m_user')->insert($data);
    }

}
