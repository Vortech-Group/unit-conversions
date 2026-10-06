<?php

declare(strict_types=1);

use Vortech\UnitConversions\Angle;
use Vortech\UnitConversions\DataSize;
use Vortech\UnitConversions\Energy;
use Vortech\UnitConversions\Force;
use Vortech\UnitConversions\Frequency;
use Vortech\UnitConversions\Power;
use Vortech\UnitConversions\Pressure;

dataset('more conversions', [
    'bytes to bits' => [fn () => DataSize::fromByte(1)->toBit(), 8],
    'kilobytes to bytes' => [fn () => DataSize::fromKilobyte(1)->toByte(), 1000],
    'kibibytes to bytes' => [fn () => DataSize::fromKibibyte(1)->toByte(), 1024],
    'gigabytes to megabytes' => [fn () => DataSize::fromGigabyte(1.5)->toMegabyte(), 1500],
    'gibibytes to mebibytes' => [fn () => DataSize::fromGibibyte(1)->toMebibyte(), 1024],
    'terabytes to gigabytes' => [fn () => DataSize::fromTerabyte(2)->toGigabyte(), 2000],
    'tebibytes to gibibytes' => [fn () => DataSize::fromTebibyte(1)->toGibibyte(), 1024],
    'mebibytes to megabytes' => [fn () => DataSize::fromMebibyte(1)->toMegabyte(), 1.048576],
    'kilojoules to joules' => [fn () => Energy::fromKilojoule(2)->toJoule(), 2000],
    'calories to joules' => [fn () => Energy::fromCalorie(1)->toJoule(), 4.184],
    'kilocalories to calories' => [fn () => Energy::fromKilocalorie(1)->toCalorie(), 1000],
    'kilowatt hours to watt hours' => [fn () => Energy::fromKilowattHour(1)->toWattHour(), 1000],
    'watt hours to joules' => [fn () => Energy::fromWattHour(1)->toJoule(), 3600],
    'btu to joules' => [fn () => Energy::fromBritishThermalUnit(1)->toJoule(), 1055.05585262],
    'kilowatts to watts' => [fn () => Power::fromKilowatt(1.5)->toWatt(), 1500],
    'megawatts to kilowatts' => [fn () => Power::fromMegawatt(1)->toKilowatt(), 1000],
    'metric horsepower to watts' => [fn () => Power::fromMetricHorsepower(1)->toWatt(), 735.49875],
    'mechanical horsepower to kilowatts' => [fn () => Power::fromMechanicalHorsepower(1)->toKilowatt(), 0.74569987158227],
    'bar to pascals' => [fn () => Pressure::fromBar(1)->toPascal(), 100000],
    'bar to kilopascals' => [fn () => Pressure::fromBar(1)->toKilopascal(), 100],
    'millibar to hectopascals' => [fn () => Pressure::fromMillibar(1)->toHectopascal(), 1],
    'atmospheres to pascals' => [fn () => Pressure::fromAtmosphere(1)->toPascal(), 101325],
    'psi to kilopascals' => [fn () => Pressure::fromPoundPerSquareInch(1)->toKilopascal(), 6.894757293168],
    'mmHg to pascals' => [fn () => Pressure::fromMillimeterOfMercury(760)->toPascal(), 101325.0144354],
    'kilonewtons to newtons' => [fn () => Force::fromKilonewton(1)->toNewton(), 1000],
    'kilogram force to newtons' => [fn () => Force::fromKilogramForce(1)->toNewton(), 9.80665],
    'pound force to newtons' => [fn () => Force::fromPoundForce(1)->toNewton(), 4.4482216152605],
    'newtons to dynes' => [fn () => Force::fromNewton(1)->toDyne(), 100000],
    'degrees to radians' => [fn () => Angle::fromDegree(180)->toRadian(), M_PI],
    'radians to degrees' => [fn () => Angle::fromRadian(M_PI)->toDegree(), 180],
    'turns to degrees' => [fn () => Angle::fromTurn(0.25)->toDegree(), 90],
    'degrees to gradians' => [fn () => Angle::fromDegree(90)->toGradian(), 100],
    'degrees to arcminutes' => [fn () => Angle::fromDegree(1)->toArcminute(), 60],
    'arcminutes to arcseconds' => [fn () => Angle::fromArcminute(1)->toArcsecond(), 60],
    'kilohertz to hertz' => [fn () => Frequency::fromKilohertz(1)->toHertz(), 1000],
    'gigahertz to megahertz' => [fn () => Frequency::fromGigahertz(2.4)->toMegahertz(), 2400],
    'rpm to hertz' => [fn () => Frequency::fromRevolutionPerMinute(60)->toHertz(), 1],
    'hertz to rpm' => [fn () => Frequency::fromHertz(50)->toRevolutionPerMinute(), 3000],
]);

it('converts the additional quantities', function (Closure $conversion, float $expected) {
    expect($conversion()->getValue())->toEqualWithDelta($expected, 1e-9);
})->with('more conversions');
