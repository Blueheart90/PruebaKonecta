<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Se crea el user admin
        User::create([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name' => 'consultor',
            'role_id' => 2,
            'email' => 'consultor@gmail.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
