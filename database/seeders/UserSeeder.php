<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'super admin',
            'is_admin'=>'admin',
            'email'=>'admin@email.com',
            'phone'=>'01111111111111111111111111',
            'password'=>Hash::make('1234'),
        ]);

        User::factory(10)->create();
    }
}
