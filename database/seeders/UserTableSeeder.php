<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name'=> "Utilisateur-".Str::random(3),
            'username'=> "Pseudo-".Str::random(3),
            'email'=> Str::random(10).'@gmail.com',
            'phone_number'=> mt_rand(),
            'password'=> Hash::make('password'),
            'confirmation_token'=> NULL,
        ]);
    }
}