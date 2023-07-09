<?php

namespace Database\Seeders;

use App\Models\GameProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mojos = GameProvider::where('name', '7 Mojos')->firstOrFail();

        DB::table('game')->insert([
            [
                'launchcode' => 'book-of-rampage',
                'name' => 'Book of Rampage',
                'game_provider_id' => $mojos->id,
                'rtp' => 2
            ], [
                'launchcode' => 'chicken-madness',
                'name' => 'Chicken Madness',
                'game_provider_id' => $mojos->id,
                'rtp' => 3
            ], [
                'launchcode' => 'book-of-golden-sands',
                'name' => 'Book of Golden Sands',
                'game_provider_id' => $mojos->id,
                'rtp' => 4
            ], [
                'launchcode' => 'cash-noire-tm',
                'name' => 'Cash Noire',
                'game_provider_id' => $mojos->id,
                'rtp' => 5
            ], [
                'launchcode' => '27-joker-fruits',
                'name' => '27 Joker Fruits',
                'game_provider_id' => $mojos->id,
                'rtp' => 6
            ], [
                'launchcode' => '20-super-hot',
                'name' => '20 Super Hot',
                'game_provider_id' => $mojos->id,
                'rtp' => 7
            ],
        ]);

        $amusnet = GameProvider::where('name', 'Amusnet Interactive')->firstOrFail();

        DB::table('game')->insert([
            [
                'launchcode' => 'crystal-hot-40-free-spins',
                'name' => 'Crystal Hot 40 Free Spins',
                'game_provider_id' => $amusnet->id,
                'rtp' => 2
            ], [
                'launchcode' => 'egyptian-magic',
                'name' => 'Egyptian Magic',
                'game_provider_id' => $amusnet->id,
                'rtp' => 3
            ], [
                'launchcode' => 'dragons-realm-high-cash',
                'name' => 'Dragons Realm High Cash',
                'game_provider_id' => $amusnet->id,
                'rtp' => 4
            ], [
                'launchcode' => 'lumberjack-2',
                'name' => 'Lumberjack 2',
                'game_provider_id' => $amusnet->id,
                'rtp' => 5
            ], [
                'launchcode' => 'boat-bonanza',
                'name' => 'Boat Bonanza',
                'game_provider_id' => $amusnet->id,
                'rtp' => 6
            ], [
                'launchcode' => 'burning-slots-20',
                'name' => 'Burning Slots 20',
                'game_provider_id' => $amusnet->id,
                'rtp' => 7
            ],
        ]);

        $apollo = GameProvider::where('name', 'Apollo Games')->firstOrFail();

        DB::table('game')->insert([
            [
                'launchcode' => 'golden-crown',
                'name' => 'Golden Crown',
                'game_provider_id' => $apollo->id,
                'rtp' => 2
            ], [
                'launchcode' => 'queen-of-fire',
                'name' => 'Queen of fire',
                'game_provider_id' => $apollo->id,
                'rtp' => 3
            ], [
                'launchcode' => 'ninja',
                'name' => 'Ninja',
                'game_provider_id' => $apollo->id,
                'rtp' => 4
            ], [
                'launchcode' => 'princess-cash-high-cash',
                'name' => 'Princess Cash',
                'game_provider_id' => $apollo->id,
                'rtp' => 5
            ], [
                'launchcode' => 'infinite-wilds',
                'name' => 'Infinite Wilds',
                'game_provider_id' => $apollo->id,
                'rtp' => 6
            ], [
                'launchcode' => 'jewels-beat',
                'name' => 'Jewels Beat',
                'game_provider_id' => $apollo->id,
                'rtp' => 7
            ],
        ]);

        $bf = GameProvider::where('name', 'BF Games')->firstOrFail();

        DB::table('game')->insert([
            [
                'launchcode' => 'queen-of-the-seas',
                'name' => 'Queen of the Seas',
                'game_provider_id' => $bf->id,
                'rtp' => 2
            ], [
                'launchcode' => 'sevens-fire',
                'name' => 'Sevens Fire',
                'game_provider_id' => $bf->id,
                'rtp' => 3
            ], [
                'launchcode' => 'wild-west-duels-tm',
                'name' => 'Wild West Duels',
                'game_provider_id' => $bf->id,
                'rtp' => 4
            ], [
                'launchcode' => 'wild-wild-riches-megaways-tm',
                'name' => 'Wild Wild Riches Megaways',
                'game_provider_id' => $bf->id,
                'rtp' => 5
            ], [
                'launchcode' => 'magic-guardians',
                'name' => 'Magic Guardians',
                'game_provider_id' => $bf->id,
                'rtp' => 6
            ], [
                'launchcode' => 'taiko-beats',
                'name' => 'Taiko Beats',
                'game_provider_id' => $bf->id,
                'rtp' => 7
            ],
        ]);
    }
}
