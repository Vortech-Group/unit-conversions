<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum ForceUnit: string implements LinearUnit
{
    use IsUnit;

    case Newton = 'N';
    case Kilonewton = 'kN';
    case Dyne = 'dyn';
    case PoundForce = 'lbf';
    case KilogramForce = 'kgf';

    /**
     * How many newtons this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Newton => 1.0,
            self::Kilonewton => 1_000.0,
            self::Dyne => 0.00001,
            self::PoundForce => 4.4482216152605,
            self::KilogramForce => 9.80665,
        };
    }
}
