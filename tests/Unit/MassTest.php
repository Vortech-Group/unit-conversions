<?php

declare(strict_types=1);

use Vortech\UnitConversions\Enums\MassUnit;
use Vortech\UnitConversions\Mass;

dataset('mass conversions', [
    'Grams 1.5 to Grams' => ['Grams', 1.5, 'Grams', 1.5],
    'Grams 1.5 to Kilograms' => ['Grams', 1.5, 'Kilograms', 0.0015],
    'Grams 1.5 to Tons' => ['Grams', 1.5, 'Tons', 1.5e-06],
    'Kilograms 1.5 to Grams' => ['Kilograms', 1.5, 'Grams', 1500.0],
    'Kilograms 1.5 to Kilograms' => ['Kilograms', 1.5, 'Kilograms', 1.5],
    'Kilograms 1.5 to Tons' => ['Kilograms', 1.5, 'Tons', 0.0015],
    'Tons 1.5 to Grams' => ['Tons', 1.5, 'Grams', 1500000.0],
    'Tons 1.5 to Kilograms' => ['Tons', 1.5, 'Kilograms', 1500.0],
    'Tons 1.5 to Tons' => ['Tons', 1.5, 'Tons', 1.5],
]);

it('converts between units', function (string $from, float $value, string $to, float $expected) {
    $result = Mass::{'from'.$from}($value)->{'to'.$to}();

    expect($result->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('mass conversions');

it('keeps the value when converting to the same unit', function () {
    expect(Mass::fromGrams(42.5)->toGrams()->getValue())->toBe(42.5);
});

it('returns the target unit', function () {
    expect(Mass::fromGrams(1)->toTons()->getUnit())->toBe(MassUnit::Ton);
});
