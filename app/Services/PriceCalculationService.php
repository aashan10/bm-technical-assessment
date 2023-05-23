<?php

namespace BM\Services;

class PriceCalculationService
{

    // Assuming the array structure is ['ID' => 'price']
    // If the array structure was something like ['id' => someId, 'price' => somePrice], we would need to use array_column() to get the prices
    public static function filterByThreshold(array $prices, float $threshold): array
    {
        return array_filter($prices, function ($price) use ($threshold) {
            return $price > $threshold;
        });
    }

    public static function calculateTotalPrices(array $prices): float
    {
        return array_reduce($prices, function ($carry, $price) {
            return $carry + $price;
        }, 0);
    }

}