<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum PressureUnit: string implements LinearUnit
{
    use IsUnit;

    case Pascal = 'Pa';
    case Hectopascal = 'hPa';
    case Kilopascal = 'kPa';
    case Millibar = 'mbar';
    case Bar = 'bar';
    case Atmosphere = 'atm';
    case PoundPerSquareInch = 'psi';
    case MillimeterOfMercury = 'mmHg';

    /**
     * How many pascals this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Pascal => 1.0,
            self::Hectopascal => 100.0,
            self::Kilopascal => 1_000.0,
            self::Millibar => 100.0,
            self::Bar => 100_000.0,
            self::Atmosphere => 101_325.0,
            self::PoundPerSquareInch => 6_894.757293168,
            self::MillimeterOfMercury => 133.322387415,
        };
    }
}
