<?php

declare(strict_types=1);

use Vortech\UnitConversions\Acceleration;
use Vortech\UnitConversions\Density;
use Vortech\UnitConversions\ElectricCurrent;
use Vortech\UnitConversions\FlowRate;
use Vortech\UnitConversions\Resistance;
use Vortech\UnitConversions\Torque;
use Vortech\UnitConversions\Voltage;
use Vortech\UnitConversions\Volume;

dataset('remaining conversions', [
    'cubic meters to liters via cubic decimeters' => [fn () => Volume::fromCubicMeter(1)->toCubicDecimeter(), 1000],
    'cubic centimeters to cubic millimeters' => [fn () => Volume::fromCubicCentimeter(1)->toCubicMillimeter(), 1000],
    'cubic feet to cubic inches' => [fn () => Volume::fromCubicFoot(1)->toCubicInch(), 1728],
    'cubic yards to cubic feet' => [fn () => Volume::fromCubicYard(1)->toCubicFoot(), 27],
    'cubic inches to cubic centimeters' => [fn () => Volume::fromCubicInch(1)->toCubicCentimeter(), 16.387064],
    'liters per minute to liters per hour' => [fn () => FlowRate::fromLiterPerMinute(1)->toLiterPerHour(), 60],
    'cubic meters per hour to liters per second' => [fn () => FlowRate::fromCubicMeterPerHour(3.6)->toLiterPerSecond(), 1],
    'cubic meters per second to liters per second' => [fn () => FlowRate::fromCubicMeterPerSecond(1)->toLiterPerSecond(), 1000],
    'gallons per minute to liters per minute' => [fn () => FlowRate::fromGallonPerMinute(1)->toLiterPerMinute(), 3.785411784],
    'cubic feet per minute to liters per minute' => [fn () => FlowRate::fromCubicFootPerMinute(1)->toLiterPerMinute(), 28.316846592],
    'grams per cubic centimeter to kilograms per cubic meter' => [fn () => Density::fromGramPerCubicCentimeter(1)->toKilogramPerCubicMeter(), 1000],
    'kilograms per liter to grams per liter' => [fn () => Density::fromKilogramPerLiter(1)->toGramPerLiter(), 1000],
    'pounds per cubic foot to kilograms per cubic meter' => [fn () => Density::fromPoundPerCubicFoot(1)->toKilogramPerCubicMeter(), 16.01846337396],
    'pounds per cubic inch to pounds per cubic foot' => [fn () => Density::fromPoundPerCubicInch(1)->toPoundPerCubicFoot(), 1728],
    'newton meters to newton centimeters' => [fn () => Torque::fromNewtonMeter(1)->toNewtonCentimeter(), 100],
    'kilonewton meters to newton meters' => [fn () => Torque::fromKilonewtonMeter(1)->toNewtonMeter(), 1000],
    'pound force feet to newton meters' => [fn () => Torque::fromPoundForceFoot(1)->toNewtonMeter(), 1.3558179483314],
    'pound force feet to pound force inches' => [fn () => Torque::fromPoundForceFoot(1)->toPoundForceInch(), 12],
    'kilogram force meters to newton meters' => [fn () => Torque::fromKilogramForceMeter(1)->toNewtonMeter(), 9.80665],
    'standard gravity to meters per second squared' => [fn () => Acceleration::fromStandardGravity(1)->toMeterPerSecondSquared(), 9.80665],
    'feet per second squared to meters per second squared' => [fn () => Acceleration::fromFootPerSecondSquared(1)->toMeterPerSecondSquared(), 0.3048],
    'gal to meters per second squared' => [fn () => Acceleration::fromGal(100)->toMeterPerSecondSquared(), 1],
    'volts to millivolts' => [fn () => Voltage::fromVolt(1.5)->toMillivolt(), 1500],
    'kilovolts to volts' => [fn () => Voltage::fromKilovolt(1)->toVolt(), 1000],
    'megavolts to kilovolts' => [fn () => Voltage::fromMegavolt(1)->toKilovolt(), 1000],
    'amperes to milliamperes' => [fn () => ElectricCurrent::fromAmpere(0.5)->toMilliampere(), 500],
    'kiloamperes to amperes' => [fn () => ElectricCurrent::fromKiloampere(2)->toAmpere(), 2000],
    'ohms to milliohms' => [fn () => Resistance::fromOhm(1)->toMilliohm(), 1000],
    'kiloohms to ohms' => [fn () => Resistance::fromKiloohm(4.7)->toOhm(), 4700],
    'megaohms to kiloohms' => [fn () => Resistance::fromMegaohm(1)->toKiloohm(), 1000],
]);

it('converts the remaining quantities', function (Closure $conversion, float $expected) {
    expect($conversion()->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('remaining conversions');
