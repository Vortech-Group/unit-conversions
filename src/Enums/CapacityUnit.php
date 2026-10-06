<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum CapacityUnit: string implements LinearUnit
{
    use IsUnit;

    case Milliliter = 'ml';
    case Centiliter = 'cl';
    case Deciliter = 'dl';
    case Liter = 'l';
    case Hectoliter = 'hl';
    case FluidOunce = 'floz';
    case Pint = 'pt';
    case Gallon = 'gal';

    /**
     * How many milliliters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Milliliter => 1.0,
            self::Centiliter => 10.0,
            self::Deciliter => 100.0,
            self::Liter => 1_000.0,
            self::Hectoliter => 100_000.0,
            self::FluidOunce => 29.5735295625,
            self::Pint => 473.176473,
            self::Gallon => 3_785.411784,
        };
    }
}
