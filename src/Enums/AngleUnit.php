<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum AngleUnit: string implements LinearUnit
{
    use IsUnit;

    case Degree = 'deg';
    case Radian = 'rad';
    case Gradian = 'gon';
    case Arcminute = 'arcmin';
    case Arcsecond = 'arcsec';
    case Turn = 'turn';

    /**
     * How many degrees this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Degree => 1.0,
            self::Radian => 180 / M_PI,
            self::Gradian => 0.9,
            self::Arcminute => 1 / 60,
            self::Arcsecond => 1 / 3_600,
            self::Turn => 360.0,
        };
    }
}
