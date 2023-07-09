<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('game_brand_block')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Orange,
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Orange,
            ], [
                'launchcode' => 'boat-bonanza',
                'brandid' => Brand::Orange,
            ],
        ]);

        DB::table('game_brand_block')->insert([
            [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::HighRoll,
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::HighRoll,
            ], [
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::HighRoll,
            ],
        ]);

        DB::table('game_brand_block')->insert([
            [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::Lucky,
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::Lucky,
            ], [
                'launchcode' => 'magic-guardians',
                'brandid' => Brand::Lucky,
            ],
        ]);

        DB::table('game_brand_block')->insert([
            [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Winner,
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Winner,
            ], [
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Winner,
            ],
        ]);
    }
}
