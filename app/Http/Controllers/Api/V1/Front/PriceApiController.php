<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\FeatureResource;
use App\Models\Feature;
use App\Services\PriceService;
use Illuminate\Http\Request;

class PriceApiController extends Controller
{
    public function index(PriceService $priceService)
    {
        $prices = $priceService->getPrices();

        return response()->json($prices);
    }
    public function features()
    {
        $categories = Feature::withCount('universities')
            ->get();

        return FeatureResource::collection($categories);
    }
}
