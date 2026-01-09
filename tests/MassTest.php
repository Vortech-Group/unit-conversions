<?php

use Vortech\UnitConversions\Mass;

it('can convert grams to kilograms', function () {
    $mass = Mass::fromGrams(1000)->toKilograms();

    expect(bccomp($mass->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert kilograms to tons', function () {
    $mass = Mass::fromKilograms(1000)->toTons();

    expect(bccomp($mass->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert tons to kilograms', function () {
    $mass = Mass::fromTons(1)->toKilograms();

    expect(bccomp($mass->getValue(), 1000, 0))
        ->toBe(0);
});