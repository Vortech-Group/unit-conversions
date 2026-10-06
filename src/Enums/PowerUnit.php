<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum PowerUnit: string implements LinearUnit
{
    use IsUnit;

    case Watt = 'W';
    case Kilowatt = 'kW';
    case Megawatt = 'MW';
    case MetricHorsepower = 'PS';
    case MechanicalHorsepower = 'hp';

    /**
     * How many watts this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Watt => 1.0,
            self::Kilowatt => 1_000.0,
            self::Megawatt => 1_000_000.0,
            self::MetricHorsepower => 735.49875,
            self::MechanicalHorsepower => 745.699871582270,
        };
    }
}
