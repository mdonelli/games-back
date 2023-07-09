<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_providers')->insert([
            ['name' => '7 Mojos'],
            ['name' => 'Amusnet Interactive'],
            ['name' => 'Apollo Games'],
            ['name' => 'BF Games'],
        ]);
    }
}
