<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            'name' => 'red',
        ]);
        DB::table('colors')->insert([
            'name' => 'blue',
        ]);
        DB::table('colors')->insert([
            'name' => 'white',
        ]);
        DB::table('colors')->insert([
            'name' => 'black',
        ]);
    }
}
