<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
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
        User::insert([
            [
                'name' => 'Okvyan Rizky Pramarta',
                'username' => 'admin',
                'email' => '1941720114@student.polinema.ac.id',
                'password' => Hash::make('4580018764'),
                'role' => 'Admin',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
