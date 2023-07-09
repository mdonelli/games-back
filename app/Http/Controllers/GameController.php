<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Country;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getGames(Request $request): JsonResponse
    {
        try {
            $brandId = $request->json()->get('brandid');
            $country = $request->json()->get('country');

            if (empty($brandId) || !Brand::exists($brandId)) {
                throw new \Exception('Invalid brand');
            }

            if (empty($country) || !Country::isSupported($country)) {
                throw new \Exception('Invalid country');
            }

            $games = Game::getFilteredByBrandIdAndCountry($brandId, $country);
            if ($games->count() === 0) {
                throw new \Exception('No valid games');
            }

            return response()->json($games);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
