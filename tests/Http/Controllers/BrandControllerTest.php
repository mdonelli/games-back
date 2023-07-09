<?php

namespace Tests\Http\Controllers;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class BrandControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function test_get_brands(): void
    {
        $response = $this->get('/api/brands');
        $this->assertTrue($response->isOk());

        $response->assertJson(fn(AssertableJson $json) => $json->has(4)
            ->each(fn(AssertableJson $json) => $json->has('brandid')
            )
        );
    }
}
