<?php

namespace App\Services;


use App\Models\WeeklyCourse;

class PriceService
{
    public function getPrices()
    {
        $prices = [];

        foreach(WeeklyCourse::PRICES as $index => $name) {
            $prices[] = [
                'name' => $name,
                'products_count' => $this->getProductCount($index)
            ];
        }

        return $prices;
    }

    private function getProductCount($index)
    {
        return WeeklyCourse::
            when($index == 0, function ($query) {
                $query->where('price', '<', '50');
            })
            ->when($index == 1, function ($query) {
                $query->whereBetween('price', ['50', '100']);
            })
            ->when($index == 2, function ($query) {
                $query->whereBetween('price', ['100', '500']);
            })
            ->when($index == 3, function ($query) {
                $query->where('price', '>', '500');
            })
            ->count();
    }
}
