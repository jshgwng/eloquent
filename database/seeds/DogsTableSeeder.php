<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        echo 'Seeding'
        \App\Dog::truncate();
        (new Faker\Generator)->seed(123);

        factory(\App\Dog::class, 50)->create();
    }
}
