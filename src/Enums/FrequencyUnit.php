<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum FrequencyUnit: string implements LinearUnit
{
    use IsUnit;

    case Hertz = 'Hz';
    case Kilohertz = 'kHz';
    case Megahertz = 'MHz';
    case Gigahertz = 'GHz';
    case RevolutionPerMinute = 'rpm';

    /**
     * How many hertzs this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Hertz => 1.0,
            self::Kilohertz => 1_000.0,
            self::Megahertz => 1_000_000.0,
            self::Gigahertz => 1_000_000_000.0,
            self::RevolutionPerMinute => 1 / 60,
        };
    }
}
