<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Orange
        DB::table('brand_games')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => true,
                'new' => true
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => true
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' =>  Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'boat-bonanza',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-fire',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-the-seas',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::Orange,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::Orange,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'magic-guardians',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'taiko-beats',
                'brandid' => Brand::Orange,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ],
        ]);

        //HighRoll
        DB::table('brand_games')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => true
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => true,
                'new' => true
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' =>  Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'boat-bonanza',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-fire',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-the-seas',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::HighRoll,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::HighRoll,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'magic-guardians',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'taiko-beats',
                'brandid' => Brand::HighRoll,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ],
        ]);

        //Lucky
        DB::table('brand_games')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => true
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => true,
                'new' => true
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' =>  Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'boat-bonanza',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'queen-of-fire',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-the-seas',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::Lucky,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::Lucky,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'magic-guardians',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'taiko-beats',
                'brandid' => Brand::Lucky,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ],
        ]);

        //Winner
        DB::table('brand_games')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => true,
                'new' => true
            ], [
                'launchcode' => 'chicken-madness',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => true,
                'new' => true
            ], [
                'launchcode' => 'book-of-golden-sands',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'cash-noire-tm',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '27-joker-fruits',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => '20-super-hot',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'crystal-hot-40-free-spins',
                'brandid' =>  Brand::Winner,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'egyptian-magic',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'lumberjack-2',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'boat-bonanza',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'burning-slots-20',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'golden-crown',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'queen-of-fire',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'ninja',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'infinite-wilds',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'jewels-beat',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'queen-of-the-seas',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'sevens-fire',
                'brandid' => Brand::Winner,
                'category' => 'casino',
                'hot' => true,
                'new' => false
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'brandid' => Brand::Winner,
                'category' => 'slots',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'magic-guardians',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => false,
                'new' => false
            ], [
                'launchcode' => 'taiko-beats',
                'brandid' => Brand::Winner,
                'category' => 'jackpot',
                'hot' => true,
                'new' => false
            ],
        ]);
    }
}
