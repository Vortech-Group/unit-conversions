<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum TimeUnit: string implements LinearUnit
{
    use IsUnit;

    case Millisecond = 'ms';
    case Second = 's';
    case Minute = 'min';
    case Hour = 'h';
    case Day = 'd';
    case Week = 'wk';

    /**
     * How many milliseconds this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Millisecond => 1.0,
            self::Second => 1_000.0,
            self::Minute => 60_000.0,
            self::Hour => 3_600_000.0,
            self::Day => 86_400_000.0,
            self::Week => 604_800_000.0,
        };
    }
}
