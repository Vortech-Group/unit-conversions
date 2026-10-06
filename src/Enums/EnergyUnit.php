<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum EnergyUnit: string implements LinearUnit
{
    use IsUnit;

    case Joule = 'J';
    case Kilojoule = 'kJ';
    case Calorie = 'cal';
    case Kilocalorie = 'kcal';
    case WattHour = 'Wh';
    case KilowattHour = 'kWh';
    case BritishThermalUnit = 'BTU';

    /**
     * How many joules this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Joule => 1.0,
            self::Kilojoule => 1_000.0,
            self::Calorie => 4.184,
            self::Kilocalorie => 4_184.0,
            self::WattHour => 3_600.0,
            self::KilowattHour => 3_600_000.0,
            self::BritishThermalUnit => 1_055.05585262,
        };
    }
}
