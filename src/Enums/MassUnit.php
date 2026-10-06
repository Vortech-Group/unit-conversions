<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum MassUnit: string implements LinearUnit
{
    use IsUnit;

    case Milligram = 'mg';
    case Gram = 'g';
    case Kilogram = 'kg';
    case Ton = 't';
    case Ounce = 'oz';
    case Pound = 'lb';

    /**
     * How many milligrams this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Milligram => 1.0,
            self::Gram => 1_000.0,
            self::Kilogram => 1_000_000.0,
            self::Ton => 1_000_000_000.0,
            self::Ounce => 28_349.523125,
            self::Pound => 453_592.37,
        };
    }
}
