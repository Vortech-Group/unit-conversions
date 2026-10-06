<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum TorqueUnit: string implements LinearUnit
{
    use IsUnit;

    case NewtonCentimeter = 'Ncm';
    case NewtonMeter = 'Nm';
    case KilonewtonMeter = 'kNm';
    case KilogramForceMeter = 'kgfm';
    case PoundForceFoot = 'lbfft';
    case PoundForceInch = 'lbfin';

    /**
     * How many newton meters this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::NewtonCentimeter => 0.01,
            self::NewtonMeter => 1.0,
            self::KilonewtonMeter => 1_000.0,
            self::KilogramForceMeter => 9.80665,
            self::PoundForceFoot => 1.3558179483314,
            self::PoundForceInch => 0.1129848290276,
        };
    }
}
