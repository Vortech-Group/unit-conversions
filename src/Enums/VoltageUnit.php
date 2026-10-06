<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum VoltageUnit: string implements LinearUnit
{
    use IsUnit;

    case Millivolt = 'mV';
    case Volt = 'V';
    case Kilovolt = 'kV';
    case Megavolt = 'MV';

    /**
     * How many millivolts this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Millivolt => 1.0,
            self::Volt => 1_000.0,
            self::Kilovolt => 1_000_000.0,
            self::Megavolt => 1_000_000_000.0,
        };
    }
}
