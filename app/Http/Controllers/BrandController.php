<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BrandController
{
    /**
     * @return JsonResponse
     */
    public function getBrands(): JsonResponse
    {
        try {
            $brands = Brand::getBrands();
            if ($brands->count() === 0) {
                throw new \Exception('No brands found');
            }

            return response()->json($brands);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
