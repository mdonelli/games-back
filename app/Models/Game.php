<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Game extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'launchcode';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * @param int $brandId
     * @param string $country
     * @return Collection
     */
    public static function getFilteredByBrandIdAndCountry(int $brandId, string $country): Collection
    {
        return DB::query()->select(
            'launchcode',
            'name',
            'rtp',
            'provider_name',
            'brand_category',
            'brand_is_hot',
            'brand_is_new',
        )
            ->fromSub(function ($query) use ($brandId, $country) {
                $query->select(
                    'game.launchcode as launchcode',
                    'game.name as name',
                    'game.rtp as rtp',
                    'game_providers.name as provider_name',
                    'brand_games.category as brand_category',
                    'brand_games.hot as brand_is_hot',
                    'brand_games.new as brand_is_new',
                    'game_brand_block.brandid as brand_block',
                    'game_country_block.brandid as country_block'
                )
                    ->from('game')
                    ->join('game_providers', 'game_providers.id', '=', 'game.game_provider_id')
                    ->join('brand_games', function ($join) use ($brandId) {
                        $join->on('brand_games.launchcode', '=', 'game.launchcode')
                        ->where('brand_games.brandid', '=', $brandId);
                    })
                    ->leftJoin('game_brand_block', function ($join) use ($brandId) {
                        $join->on('game_brand_block.launchcode', '=', 'game.launchcode')
                            ->where('game_brand_block.brandid', '=', $brandId);
                    })
                    ->leftJoin('game_country_block', function ($join) use ($brandId, $country) {
                        $join->on('game_country_block.launchcode', '=', 'game.launchcode')
                            ->where('game_country_block.brandid', '=', $brandId)
                            ->where('game_country_block.country', '=', $country);
                    });
            }, 'sub')
            ->whereNull('sub.brand_block')
            ->whereNull('sub.country_block')
            ->get();
    }
}
