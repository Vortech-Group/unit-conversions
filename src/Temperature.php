<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Enums\Unit;

final class Temperature
{
    private float $convertible;
    private Unit $unit;

    public function __construct(float $convertible, Unit $unit)
    {
        $this->convertible = $convertible;
        $this->unit = $unit;
    }

    public function toCelsius(): float|int
    {
        return match ($this->unit) {
            Unit::Fahrenheit => ($this->convertible - 32) * 5/9,
            Unit::Kelvin => $this->convertible - 273.15,
            default => $this->convertible
        };
    }

    public function toFahrenheit(): float|int
    {
        return match ($this->unit) {
            Unit::Celsius => ($this->convertible * 9/5) + 32,
            Unit::Kelvin => ($this->convertible - 273.15) * 9/5 + 32,
            default => $this->convertible
        };
    }

    public function toKelvin(): float|int
    {
        return match ($this->unit) {
            Unit::Celsius => $this->convertible + 273.15,
            Unit::Fahrenheit => ($this->convertible - 32) * 5/9 + 273.15,
            default => $this->convertible
        };
    }
    
    public static function fromCelsius(float $celsius): self
    {
        return new Temperature($celsius, Unit::Celsius);
    }

    public static function fromFahrenheit(float $fahrenheit): self
    {
        return new Temperature($fahrenheit, Unit::Fahrenheit);
    }

    public static function fromKelvin(float $kelvin): self
    {
        return new Temperature($kelvin, Unit::Kelvin);
    }
}