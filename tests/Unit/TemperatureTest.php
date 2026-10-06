<?php

declare(strict_types=1);

use Vortech\UnitConversions\Enums\TemperatureUnit;
use Vortech\UnitConversions\Temperature;

dataset('temperature conversions', [
    'celsius to fahrenheit' => ['Celsius', 100, 'Fahrenheit', 212],
    'celsius to kelvin' => ['Celsius', 0, 'Kelvin', 273.15],
    'fahrenheit to celsius' => ['Fahrenheit', 32, 'Celsius', 0],
    'fahrenheit to kelvin' => ['Fahrenheit', 212, 'Kelvin', 373.15],
    'kelvin to celsius' => ['Kelvin', 273.15, 'Celsius', 0],
    'kelvin to fahrenheit' => ['Kelvin', 373.15, 'Fahrenheit', 212],
    'celsius to celsius' => ['Celsius', 21.5, 'Celsius', 21.5],
]);

it('converts between units', function (string $from, float $value, string $to, float $expected) {
    $result = Temperature::{'from'.$from}($value)->{'to'.$to}();

    expect($result->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('temperature conversions');

it('returns the target unit', function () {
    expect(Temperature::fromCelsius(1)->toKelvin()->getUnit())->toBe(TemperatureUnit::Kelvin);
});
