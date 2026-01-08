<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

enum Unit: string
{
    case Gram = 'g';
    case Kilogram = 'kg';
    case Ton = 't';


    case Celsius = 'C';
    case Fahrenheit = 'F';
    case Kelvin = 'K';


    case Millimeter = 'mm';
    case Centimeter = 'cm';
    case Decimeter = 'dm';
    case Meter = 'm';
    case Kilometer = 'km';
}
