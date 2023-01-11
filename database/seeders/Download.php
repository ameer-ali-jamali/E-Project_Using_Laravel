<?php

namespace Database\Seeders;

use Faker\Factory as Random;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Download extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random = Random::create();

        for ($count = 1; $count <= 999; $count++) {
            DB::table('downloads')->insert([
                'userId' => $random->numberBetween(1, 1000),
                'bookId' => $random->numberBetween(1, 26),
            ]);
        }
    }
}