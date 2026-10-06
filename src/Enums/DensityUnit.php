<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum DensityUnit: string implements LinearUnit
{
    use IsUnit;

    case GramPerLiter = 'g/l';
    case KilogramPerCubicMeter = 'kg/m3';
    case GramPerCubicCentimeter = 'g/cm3';
    case KilogramPerLiter = 'kg/l';
    case PoundPerCubicFoot = 'lb/ft3';
    case PoundPerCubicInch = 'lb/in3';

    /**
     * How many kilogram per cubic meters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::GramPerLiter => 1.0,
            self::KilogramPerCubicMeter => 1.0,
            self::GramPerCubicCentimeter => 1_000.0,
            self::KilogramPerLiter => 1_000.0,
            self::PoundPerCubicFoot => 16.01846337396,
            self::PoundPerCubicInch => 27_679.9047102,
        };
    }
}
