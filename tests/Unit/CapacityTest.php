<?php

declare(strict_types=1);

use Vortech\UnitConversions\Capacity;
use Vortech\UnitConversions\Enums\CapacityUnit;

dataset('capacity conversions', [
    'Milliliters 1.5 to Milliliters' => ['Milliliters', 1.5, 'Milliliters', 1.5],
    'Milliliters 1.5 to Centiliters' => ['Milliliters', 1.5, 'Centiliters', 0.15],
    'Milliliters 1.5 to Deciliters' => ['Milliliters', 1.5, 'Deciliters', 0.015],
    'Milliliters 1.5 to Liters' => ['Milliliters', 1.5, 'Liters', 0.0015],
    'Milliliters 1.5 to Hectoliters' => ['Milliliters', 1.5, 'Hectoliters', 1.5e-05],
    'Centiliters 1.5 to Milliliters' => ['Centiliters', 1.5, 'Milliliters', 15.0],
    'Centiliters 1.5 to Centiliters' => ['Centiliters', 1.5, 'Centiliters', 1.5],
    'Centiliters 1.5 to Deciliters' => ['Centiliters', 1.5, 'Deciliters', 0.15],
    'Centiliters 1.5 to Liters' => ['Centiliters', 1.5, 'Liters', 0.015],
    'Centiliters 1.5 to Hectoliters' => ['Centiliters', 1.5, 'Hectoliters', 0.00015],
    'Deciliters 1.5 to Milliliters' => ['Deciliters', 1.5, 'Milliliters', 150.0],
    'Deciliters 1.5 to Centiliters' => ['Deciliters', 1.5, 'Centiliters', 15.0],
    'Deciliters 1.5 to Deciliters' => ['Deciliters', 1.5, 'Deciliters', 1.5],
    'Deciliters 1.5 to Liters' => ['Deciliters', 1.5, 'Liters', 0.15],
    'Deciliters 1.5 to Hectoliters' => ['Deciliters', 1.5, 'Hectoliters', 0.0015],
    'Liters 1.5 to Milliliters' => ['Liters', 1.5, 'Milliliters', 1500.0],
    'Liters 1.5 to Centiliters' => ['Liters', 1.5, 'Centiliters', 150.0],
    'Liters 1.5 to Deciliters' => ['Liters', 1.5, 'Deciliters', 15.0],
    'Liters 1.5 to Liters' => ['Liters', 1.5, 'Liters', 1.5],
    'Liters 1.5 to Hectoliters' => ['Liters', 1.5, 'Hectoliters', 0.015],
    'Hectoliters 1.5 to Milliliters' => ['Hectoliters', 1.5, 'Milliliters', 150000.0],
    'Hectoliters 1.5 to Centiliters' => ['Hectoliters', 1.5, 'Centiliters', 15000.0],
    'Hectoliters 1.5 to Deciliters' => ['Hectoliters', 1.5, 'Deciliters', 1500.0],
    'Hectoliters 1.5 to Liters' => ['Hectoliters', 1.5, 'Liters', 150.0],
    'Hectoliters 1.5 to Hectoliters' => ['Hectoliters', 1.5, 'Hectoliters', 1.5],
]);

it('converts between units', function (string $from, float $value, string $to, float $expected) {
    $result = Capacity::{'from'.$from}($value)->{'to'.$to}();

    expect($result->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('capacity conversions');

it('keeps the value when converting to the same unit', function () {
    expect(Capacity::fromMilliliters(42.5)->toMilliliters()->getValue())->toBe(42.5);
});

it('returns the target unit', function () {
    expect(Capacity::fromMilliliters(1)->toHectoliters()->getUnit())->toBe(CapacityUnit::Hectoliter);
});
