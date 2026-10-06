<?php

declare(strict_types=1);

use Vortech\UnitConversions\Contracts\LinearUnit;
use Vortech\UnitConversions\Enums\CapacityUnit;
use Vortech\UnitConversions\Enums\LengthUnit;
use Vortech\UnitConversions\Enums\SpeedUnit;
use Vortech\UnitConversions\Enums\TemperatureUnit;
use Vortech\UnitConversions\Enums\TimeUnit;
use Vortech\UnitConversions\Length;
use Vortech\UnitConversions\Mass;
use Vortech\UnitConversions\Temperature;

it('exposes its unit and value', function () {
    $length = Length::fromMeter(12.5);

    expect($length->getUnit())->toBe(LengthUnit::Meter)
        ->and($length->getValue())->toBe(12.5);
});

it('returns a quantity of the same kind from a conversion', function () {
    expect(Length::fromKilometer(1)->toMeter())->toBeInstanceOf(Length::class)
        ->and(Temperature::fromCelsius(1)->toKelvin())->toBeInstanceOf(Temperature::class);
});

it('chains conversions', function () {
    $meters = Length::fromKilometer(1.5)->toMeter();
    $centimeters = $meters->toCentimeter();

    expect($meters->getValue())->toBe(1500.0)
        ->and($meters->getUnit())->toBe(LengthUnit::Meter)
        ->and($centimeters->getValue())->toBe(150000.0)
        ->and($centimeters->getUnit())->toBe(LengthUnit::Centimeter)
        ->and($centimeters->toKilometer()->getValue())->toBe(1.5);
});

it('chains temperature conversions', function () {
    $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

    expect($fahrenheit->getValue())->toEqualWithDelta(212, 1e-9)
        ->and($fahrenheit->toCelsius()->getValue())->toEqualWithDelta(100, 1e-9);
});

it('leaves the original quantity untouched', function () {
    $kilometers = Length::fromKilometer(1.5);
    $kilometers->toMeter();

    expect($kilometers->getValue())->toBe(1.5)
        ->and($kilometers->getUnit())->toBe(LengthUnit::Kilometer);
});

it('uses the short symbol as the enum value', function () {
    expect(LengthUnit::Kilometer->symbol())->toBe('km')
        ->and(CapacityUnit::from('hl'))->toBe(CapacityUnit::Hectoliter)
        ->and(SpeedUnit::MilePerHour->symbol())->toBe('mph');
});

it('compares units', function () {
    expect(LengthUnit::Meter->is(LengthUnit::Meter))->toBeTrue()
        ->and(LengthUnit::Meter->isNot(LengthUnit::Foot))->toBeTrue()
        ->and(LengthUnit::Meter->is(TimeUnit::Minute))->toBeFalse();
});

it('has a positive factor for every linear unit', function () {
    foreach ([CapacityUnit::cases(), LengthUnit::cases(), TimeUnit::cases(), SpeedUnit::cases()] as $cases) {
        foreach ($cases as $unit) {
            expect($unit)->toBeInstanceOf(LinearUnit::class)
                ->and($unit->factor())->toBeGreaterThan(0.0);
        }
    }
});

it('does not give temperature units a linear factor', function () {
    expect(TemperatureUnit::Kelvin)->not->toBeInstanceOf(LinearUnit::class);
});

it('rejects units of another quantity', function () {
    new Mass(1, LengthUnit::Meter);
})->throws(TypeError::class);
