<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('colors')->insert([
            'primary' => '#0d6efd',
            'secondary' => '#6c757d',
            'text' => '#212529',
            'bg' => '#ffffff',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
