<?php

namespace Tests\Unit;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class GameFilterTest extends TestCase
{
    /**
     * @return void
     */
    public function test_game_filter(): void
    {
        $brands = [
            Brand::Orange,
            Brand::Lucky,
            Brand::HighRoll,
            Brand::Winner,
        ];

        $countries = [
            Country::UK,
            Country::Germany,
            Country::Italy,
            Country::France,
        ];

        foreach ($brands as $brandId) {
            foreach ($countries as $country) {
                $this->assertBlocking($brandId, $country);
            }
        }
    }

    /**
     * @param int $brandId
     * @param string $country
     * @return void
     */
    protected function assertBlocking(int $brandId, string $country): void
    {
        $brandBlock = DB::table('game_brand_block')
            ->select('launchcode')
            ->where('brandid', '=', $brandId)
            ->get()
            ->map(function ($value) {
                return $value->launchcode;
            })
            ->toArray();

        $brandCountryBlock = DB::table('game_country_block')
                ->select('launchcode')
                ->where('brandid', '=', $brandId)
                ->where('country', '=', $country)
                ->get()
                ->map(function ($value) {
                    return $value->launchcode;
                })
                ->toArray();

        $result = Game::getFilteredByBrandIdAndCountry($brandId, $country);
        foreach ($result as $game) {
            $this->assertFalse(in_array($game->launchcode, $brandBlock));
            $this->assertFalse(in_array($game->launchcode, $brandCountryBlock));
        }
    }
}
