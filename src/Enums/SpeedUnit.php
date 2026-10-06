<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum SpeedUnit: string implements LinearUnit
{
    use IsUnit;

    case MeterPerSecond = 'm/s';
    case KilometerPerHour = 'km/h';
    case MilePerHour = 'mph';
    case Knot = 'kn';
    case FootPerSecond = 'ft/s';

    /**
     * How many millimeter per hours this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::MeterPerSecond => 3_600_000.0,
            self::KilometerPerHour => 1_000_000.0,
            self::MilePerHour => 1_609_344.0,
            self::Knot => 1_852_000.0,
            self::FootPerSecond => 1_097_280.0,
        };
    }
}
