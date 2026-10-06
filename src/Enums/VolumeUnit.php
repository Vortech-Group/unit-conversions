<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum VolumeUnit: string implements LinearUnit
{
    use IsUnit;

    case CubicMillimeter = 'mm3';
    case CubicCentimeter = 'cm3';
    case CubicDecimeter = 'dm3';
    case CubicMeter = 'm3';
    case CubicInch = 'in3';
    case CubicFoot = 'ft3';
    case CubicYard = 'yd3';

    /**
     * How many cubic millimeters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::CubicMillimeter => 1.0,
            self::CubicCentimeter => 1_000.0,
            self::CubicDecimeter => 1_000_000.0,
            self::CubicMeter => 1_000_000_000.0,
            self::CubicInch => 16_387.064,
            self::CubicFoot => 28_316_846.592,
            self::CubicYard => 764_554_857.984,
        };
    }
}
