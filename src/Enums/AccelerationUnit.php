<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum AccelerationUnit: string implements LinearUnit
{
    use IsUnit;

    case MeterPerSecondSquared = 'm/s2';
    case Gal = 'Gal';
    case FootPerSecondSquared = 'ft/s2';
    case StandardGravity = 'g';

    /**
     * How many meter per second squareds this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::MeterPerSecondSquared => 1.0,
            self::Gal => 0.01,
            self::FootPerSecondSquared => 0.3048,
            self::StandardGravity => 9.80665,
        };
    }
}
