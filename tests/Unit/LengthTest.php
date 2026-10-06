<?php

declare(strict_types=1);

use Vortech\UnitConversions\Enums\LengthUnit;
use Vortech\UnitConversions\Length;

dataset('length conversions', [
    'Millimeter 1.5 to Millimeter' => ['Millimeter', 1.5, 'Millimeter', 1.5],
    'Millimeter 1.5 to Centimeter' => ['Millimeter', 1.5, 'Centimeter', 0.15],
    'Millimeter 1.5 to Decimeter' => ['Millimeter', 1.5, 'Decimeter', 0.015],
    'Millimeter 1.5 to Meter' => ['Millimeter', 1.5, 'Meter', 0.0015],
    'Millimeter 1.5 to Kilometer' => ['Millimeter', 1.5, 'Kilometer', 1.5e-06],
    'Centimeter 1.5 to Millimeter' => ['Centimeter', 1.5, 'Millimeter', 15.0],
    'Centimeter 1.5 to Centimeter' => ['Centimeter', 1.5, 'Centimeter', 1.5],
    'Centimeter 1.5 to Decimeter' => ['Centimeter', 1.5, 'Decimeter', 0.15],
    'Centimeter 1.5 to Meter' => ['Centimeter', 1.5, 'Meter', 0.015],
    'Centimeter 1.5 to Kilometer' => ['Centimeter', 1.5, 'Kilometer', 1.5e-05],
    'Decimeter 1.5 to Millimeter' => ['Decimeter', 1.5, 'Millimeter', 150.0],
    'Decimeter 1.5 to Centimeter' => ['Decimeter', 1.5, 'Centimeter', 15.0],
    'Decimeter 1.5 to Decimeter' => ['Decimeter', 1.5, 'Decimeter', 1.5],
    'Decimeter 1.5 to Meter' => ['Decimeter', 1.5, 'Meter', 0.15],
    'Decimeter 1.5 to Kilometer' => ['Decimeter', 1.5, 'Kilometer', 0.00015],
    'Meter 1.5 to Millimeter' => ['Meter', 1.5, 'Millimeter', 1500.0],
    'Meter 1.5 to Centimeter' => ['Meter', 1.5, 'Centimeter', 150.0],
    'Meter 1.5 to Decimeter' => ['Meter', 1.5, 'Decimeter', 15.0],
    'Meter 1.5 to Meter' => ['Meter', 1.5, 'Meter', 1.5],
    'Meter 1.5 to Kilometer' => ['Meter', 1.5, 'Kilometer', 0.0015],
    'Kilometer 1.5 to Millimeter' => ['Kilometer', 1.5, 'Millimeter', 1500000.0],
    'Kilometer 1.5 to Centimeter' => ['Kilometer', 1.5, 'Centimeter', 150000.0],
    'Kilometer 1.5 to Decimeter' => ['Kilometer', 1.5, 'Decimeter', 15000.0],
    'Kilometer 1.5 to Meter' => ['Kilometer', 1.5, 'Meter', 1500.0],
    'Kilometer 1.5 to Kilometer' => ['Kilometer', 1.5, 'Kilometer', 1.5],
]);

it('converts between units', function (string $from, float $value, string $to, float $expected) {
    $result = Length::{'from'.$from}($value)->{'to'.$to}();

    expect($result->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('length conversions');

it('keeps the value when converting to the same unit', function () {
    expect(Length::fromMillimeter(42.5)->toMillimeter()->getValue())->toBe(42.5);
});

it('returns the target unit', function () {
    expect(Length::fromMillimeter(1)->toKilometer()->getUnit())->toBe(LengthUnit::Kilometer);
});
