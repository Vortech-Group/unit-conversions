<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum FlowRateUnit: string implements LinearUnit
{
    use IsUnit;

    case LiterPerHour = 'l/h';
    case LiterPerMinute = 'l/min';
    case LiterPerSecond = 'l/s';
    case CubicMeterPerHour = 'm3/h';
    case CubicMeterPerSecond = 'm3/s';
    case GallonPerMinute = 'gpm';
    case CubicFootPerMinute = 'cfm';

    /**
     * How many liter per hours this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::LiterPerHour => 1.0,
            self::LiterPerMinute => 60.0,
            self::LiterPerSecond => 3_600.0,
            self::CubicMeterPerHour => 1_000.0,
            self::CubicMeterPerSecond => 3_600_000.0,
            self::GallonPerMinute => 227.12470704,
            self::CubicFootPerMinute => 1_699.01079552,
        };
    }
}
