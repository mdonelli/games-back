<?php

namespace Tests\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GameControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function test_get_games(): void
    {
        $response = $this->postJson('/api/games', [
            'brandid' => Brand::Orange,
            'country' => Country::UK,
        ]);
        $this->assertTrue($response->isOk());

        $response->assertJson(fn(AssertableJson $json) => $json->has(18)
            ->each(fn(AssertableJson $json) => $json->whereType('launchcode', 'string')
                ->whereType('name', 'string')
                ->whereType('rtp', 'integer')
                ->whereType('provider_name', 'string')
                ->whereType('brand_category', 'string')
                ->whereType('brand_is_hot', 'integer')
                ->whereType('brand_is_new', 'integer')
            )
        );
    }
}
