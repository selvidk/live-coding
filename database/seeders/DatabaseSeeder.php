<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'   => 'admin',
            'email'  => 'selvi.dwikartika30@gmail.com',
            'role'   => 1,
            'status' => 1,
            'password' => Hash::make('admin'),
        ]);
    }
}
