<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pensil')->insert([
        ['merkpensil' => 'Deli 2H', 'stockpensil' => 65, 'tersedia' => 'Y'],
            ['merkpensil' => 'Deli 3H', 'stockpensil' => 25, 'tersedia' => 'Y'],
            ['merkpensil' => 'Deli 4H', 'stockpensil' => 0, 'tersedia' => 'N'],
            ['merkpensil' => 'Deli 9B', 'stockpensil' => 7, 'tersedia' => 'Y'],
            ['merkpensil' => 'Deli F', 'stockpensil' => 30, 'tersedia' => 'Y'],
            ['merkpensil' => 'Deli H', 'stockpensil' => 45, 'tersedia' => 'Y'],
            ['merkpensil' => 'Faber-Castell 2B', 'stockpensil' => 145, 'tersedia' => 'Y'],
            ['merkpensil' => 'Faber-Castell 3B', 'stockpensil' => 56, 'tersedia' => 'Y'],
            ['merkpensil' => 'Faber-Castell B', 'stockpensil' => 0, 'tersedia' => 'N'],
            ['merkpensil' => 'Faber-Castell HB', 'stockpensil' => 87, 'tersedia' => 'Y'],
            ['merkpensil' => 'Greebel 2B', 'stockpensil' => 175, 'tersedia' => 'Y'],
            ['merkpensil' => 'Greebel 3B', 'stockpensil' => 75, 'tersedia' => 'Y'],
            ['merkpensil' => 'Greebel 4B', 'stockpensil' => 55, 'tersedia' => 'Y'],
            ['merkpensil' => 'Greebel 5B', 'stockpensil' => 42, 'tersedia' => 'Y'],
            ['merkpensil' => 'Greebel B', 'stockpensil' => 0, 'tersedia' => 'N'],
            ['merkpensil' => 'Greebel HB', 'stockpensil' => 135, 'tersedia' => 'Y'],
            ['merkpensil' => 'Maped 2B', 'stockpensil' => 180, 'tersedia' => 'Y'],
            ['merkpensil' => 'Maped 3B', 'stockpensil' => 90, 'tersedia' => 'Y'],
            ['merkpensil' => 'Maped HB', 'stockpensil' => 140, 'tersedia' => 'Y'],
            ['merkpensil' => 'Standard F', 'stockpensil' => 34, 'tersedia' => 'Y'],
            ['merkpensil' => 'Tombow 2H', 'stockpensil' => 68, 'tersedia' => 'Y'],
            ['merkpensil' => 'Tombow 3H', 'stockpensil' => 0, 'tersedia' => 'N'],
            ['merkpensil' => 'Tombow 4H', 'stockpensil' => 16, 'tersedia' => 'Y'],
            ['merkpensil' => 'Tombow F', 'stockpensil' => 24, 'tersedia' => 'Y'],
        ]);
    }
}
