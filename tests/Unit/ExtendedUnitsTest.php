<?php

declare(strict_types=1);

use Vortech\UnitConversions\Area;
use Vortech\UnitConversions\Capacity;
use Vortech\UnitConversions\Length;
use Vortech\UnitConversions\Mass;
use Vortech\UnitConversions\Speed;
use Vortech\UnitConversions\Time;

dataset('extended conversions', [
    'milligrams to grams' => [fn () => Mass::fromMilligrams(1500)->toGrams(), 1.5],
    'grams to milligrams' => [fn () => Mass::fromGrams(2)->toMilligrams(), 2000],
    'pounds to kilograms' => [fn () => Mass::fromPounds(1)->toKilograms(), 0.45359237],
    'ounces to grams' => [fn () => Mass::fromOunces(1)->toGrams(), 28.349523125],
    'kilograms to pounds' => [fn () => Mass::fromKilograms(0.45359237)->toPounds(), 1],
    'pounds to ounces' => [fn () => Mass::fromPounds(1)->toOunces(), 16],
    'inches to centimeters' => [fn () => Length::fromInch(1)->toCentimeter(), 2.54],
    'feet to inches' => [fn () => Length::fromFoot(1)->toInch(), 12],
    'yards to feet' => [fn () => Length::fromYard(1)->toFoot(), 3],
    'miles to kilometers' => [fn () => Length::fromMile(1)->toKilometer(), 1.609344],
    'kilometers to miles' => [fn () => Length::fromKilometer(1.609344)->toMile(), 1],
    'miles to yards' => [fn () => Length::fromMile(1)->toYard(), 1760],
    'gallons to liters' => [fn () => Capacity::fromGallons(1)->toLiters(), 3.785411784],
    'gallons to pints' => [fn () => Capacity::fromGallons(1)->toPints(), 8],
    'pints to fluid ounces' => [fn () => Capacity::fromPints(1)->toFluidOunces(), 16],
    'fluid ounces to milliliters' => [fn () => Capacity::fromFluidOunces(1)->toMilliliters(), 29.5735295625],
    'square meters to square centimeters' => [fn () => Area::fromSquareMeter(1)->toSquareCentimeter(), 10000],
    'hectares to square meters' => [fn () => Area::fromHectare(1)->toSquareMeter(), 10000],
    'square kilometers to hectares' => [fn () => Area::fromSquareKilometer(1)->toHectare(), 100],
    'acres to square meters' => [fn () => Area::fromAcre(1)->toSquareMeter(), 4046.8564224],
    'square feet to square inches' => [fn () => Area::fromSquareFoot(1)->toSquareInch(), 144],
    'square inches to square centimeters' => [fn () => Area::fromSquareInch(1)->toSquareCentimeter(), 6.4516],
    'minutes to seconds' => [fn () => Time::fromMinutes(2)->toSeconds(), 120],
    'hours to minutes' => [fn () => Time::fromHours(1.5)->toMinutes(), 90],
    'days to hours' => [fn () => Time::fromDays(1)->toHours(), 24],
    'weeks to days' => [fn () => Time::fromWeeks(2)->toDays(), 14],
    'seconds to milliseconds' => [fn () => Time::fromSeconds(1.5)->toMilliseconds(), 1500],
    'kilometers per hour to meters per second' => [fn () => Speed::fromKilometerPerHour(36)->toMeterPerSecond(), 10],
    'meters per second to kilometers per hour' => [fn () => Speed::fromMeterPerSecond(10)->toKilometerPerHour(), 36],
    'miles per hour to kilometers per hour' => [fn () => Speed::fromMilePerHour(1)->toKilometerPerHour(), 1.609344],
    'knots to kilometers per hour' => [fn () => Speed::fromKnot(1)->toKilometerPerHour(), 1.852],
    'feet per second to meters per second' => [fn () => Speed::fromFootPerSecond(1)->toMeterPerSecond(), 0.3048],
]);

it('converts the extended units', function (Closure $conversion, float $expected) {
    expect($conversion()->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('extended conversions');
