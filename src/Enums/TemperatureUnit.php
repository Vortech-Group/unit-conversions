<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\Unit;

enum TemperatureUnit: string implements Unit
{
    use IsUnit;

    case Celsius = 'C';
    case Fahrenheit = 'F';
    case Kelvin = 'K';
}
