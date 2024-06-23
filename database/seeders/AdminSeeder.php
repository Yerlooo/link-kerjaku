<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'gioks',
                'email' => 'gio@gmail.com',
                'is_admin' => 1,
                'password' => Hash::make('admin'),
            ],
        ];
        DB::table('admins')->insert($admins);
    }
}

