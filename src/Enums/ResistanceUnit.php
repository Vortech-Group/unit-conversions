<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum ResistanceUnit: string implements LinearUnit
{
    use IsUnit;

    case Milliohm = 'mohm';
    case Ohm = 'ohm';
    case Kiloohm = 'kohm';
    case Megaohm = 'Mohm';

    /**
     * How many milliohms this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Milliohm => 1.0,
            self::Ohm => 1_000.0,
            self::Kiloohm => 1_000_000.0,
            self::Megaohm => 1_000_000_000.0,
        };
    }
}
