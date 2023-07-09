<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Brand
{
    const Orange = 10;
    const Lucky = 11;
    const HighRoll = 12;
    const Winner = 13;

    /**
     * @return Collection
     */
    public static function getBrands(): Collection
    {
        return DB::table('brand_games')
            ->select('brandid')
            ->distinct()
            ->get();
    }

    /**
     * @param int $brandId
     * @return bool
     */
    public static function exists(int $brandId): bool
    {
        return DB::table('brand_games')
            ->where('brandid', '=', $brandId)
            ->exists();
    }
}
