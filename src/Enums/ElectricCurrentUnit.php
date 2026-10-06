<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum ElectricCurrentUnit: string implements LinearUnit
{
    use IsUnit;

    case Milliampere = 'mA';
    case Ampere = 'A';
    case Kiloampere = 'kA';

    /**
     * How many milliamperes this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Milliampere => 1.0,
            self::Ampere => 1_000.0,
            self::Kiloampere => 1_000_000.0,
        };
    }
}
