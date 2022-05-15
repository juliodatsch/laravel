<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Julio Cesar',
            'email' =>'JulioCesar7930@hotmail.com',
            'password' =>bcrypt('julio123'),
        ]);
    }
}
