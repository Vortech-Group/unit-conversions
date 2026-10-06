<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum AreaUnit: string implements LinearUnit
{
    use IsUnit;

    case SquareMillimeter = 'mm2';
    case SquareCentimeter = 'cm2';
    case SquareMeter = 'm2';
    case Hectare = 'ha';
    case SquareKilometer = 'km2';
    case SquareInch = 'in2';
    case SquareFoot = 'ft2';
    case Acre = 'ac';

    /**
     * How many square millimeters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::SquareMillimeter => 1.0,
            self::SquareCentimeter => 100.0,
            self::SquareMeter => 1_000_000.0,
            self::Hectare => 10_000_000_000.0,
            self::SquareKilometer => 1_000_000_000_000.0,
            self::SquareInch => 645.16,
            self::SquareFoot => 92_903.04,
            self::Acre => 4_046_856_422.4,
        };
    }
}
