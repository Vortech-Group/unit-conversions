<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum LengthUnit: string implements LinearUnit
{
    use IsUnit;

    case Millimeter = 'mm';
    case Centimeter = 'cm';
    case Decimeter = 'dm';
    case Meter = 'm';
    case Kilometer = 'km';
    case Inch = 'in';
    case Foot = 'ft';
    case Yard = 'yd';
    case Mile = 'mi';

    /**
     * How many millimeters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Millimeter => 1.0,
            self::Centimeter => 10.0,
            self::Decimeter => 100.0,
            self::Meter => 1_000.0,
            self::Kilometer => 1_000_000.0,
            self::Inch => 25.4,
            self::Foot => 304.8,
            self::Yard => 914.4,
            self::Mile => 1_609_344.0,
        };
    }
}
