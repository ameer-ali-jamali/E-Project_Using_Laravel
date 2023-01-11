<?php

namespace Database\Seeders;

use Faker\Factory as Random;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random = Random::create();

        for ($count = 1; $count <= 1500; $count++) {
            DB::table('users')->insert([
                'firstName' => $random->firstName(),
                'lastName' => $random->lastName(),
                'email'  => $random->email(),
                'password'  => bcrypt('user'),
            ]);
        }
    }
}