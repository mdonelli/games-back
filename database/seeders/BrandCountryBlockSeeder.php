<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandCountryBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_country_block')->insert([
            [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::Orange,
                'country' => Country::UK
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::Orange,
                'country' => Country::Germany
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Orange,
                'country' => Country::France
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' => Brand::Orange,
                'country' => Country::Italy
            ],[
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Orange,
                'country' => Country::UK
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::Orange,
                'country' => Country::Germany
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::Orange,
                'country' => Country::France
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::Orange,
                'country' => Country::Italy
            ],[
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Orange,
                'country' => Country::UK
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Orange,
                'country' => Country::Germany
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Orange,
                'country' => Country::France
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Orange,
                'country' => Country::Italy
            ],
        ]);

        DB::table('game_country_block')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Lucky,
                'country' => Country::UK
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Lucky,
                'country' => Country::Germany
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' => Brand::Lucky,
                'country' => Country::France
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::Lucky,
                'country' => Country::Italy
            ],[
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::Lucky,
                'country' => Country::UK
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Lucky,
                'country' => Country::Germany
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::Lucky,
                'country' => Country::France
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Lucky,
                'country' => Country::Italy
            ],[
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Lucky,
                'country' => Country::UK
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Lucky,
                'country' => Country::Germany
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Lucky,
                'country' => Country::France
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Lucky,
                'country' => Country::Italy
            ],
        ]);

        DB::table('game_country_block')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::HighRoll,
                'country' => Country::UK
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::HighRoll,
                'country' => Country::Germany
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::HighRoll,
                'country' => Country::France
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' => Brand::HighRoll,
                'country' => Country::Italy
            ],[
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::HighRoll,
                'country' => Country::UK
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::HighRoll,
                'country' => Country::Germany
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::HighRoll,
                'country' => Country::France
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::HighRoll,
                'country' => Country::Italy
            ],[
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::HighRoll,
                'country' => Country::UK
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::HighRoll,
                'country' => Country::Germany
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::HighRoll,
                'country' => Country::France
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::HighRoll,
                'country' => Country::Italy
            ],
        ]);

        DB::table('game_country_block')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Winner,
                'country' => Country::UK
            ], [
                'launchcode' => 'queen-of-the-seas',
                'brandid' => Brand::Winner,
                'country' => Country::Germany
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' => Brand::Winner,
                'country' => Country::France
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::Winner,
                'country' => Country::Italy
            ],[
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::Winner,
                'country' => Country::UK
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::Winner,
                'country' => Country::Germany
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::Winner,
                'country' => Country::France
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Winner,
                'country' => Country::Italy
            ],[
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::Winner,
                'country' => Country::UK
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Winner,
                'country' => Country::Germany
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Winner,
                'country' => Country::France
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Winner,
                'country' => Country::Italy
            ],
        ]);
    }
}
