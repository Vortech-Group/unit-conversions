<?php

use Vortech\UnitConversions\Capacity;

it('can convert milliliters to liters', function () {
    $capacity = Capacity::fromMilliliters(1000)->toLiters();

    expect(bccomp($capacity->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert centiliters to liters', function () {
    $capacity = Capacity::fromCentiliters(100)->toLiters();

    expect(bccomp($capacity->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert deciliters to liters', function () {
    $capacity = Capacity::fromDeciliters(10)->toLiters();

    expect(bccomp($capacity->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert liters to hectoliters', function () {
    $capacity = Capacity::fromLiters(100)->toHectoliters();

    expect(bccomp($capacity->getValue(), 1, 0))
        ->toBe(0);
});

it('can convert hectoliters to liters', function () {
    $capacity = Capacity::fromHectoliters(1)->toLiters();

    expect(bccomp($capacity->getValue(), 100, 0))
        ->toBe(0);
});