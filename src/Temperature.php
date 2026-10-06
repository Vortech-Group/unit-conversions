<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\Quantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\TemperatureUnit;

/**
 * @extends Quantity<TemperatureUnit>
 */
final readonly class Temperature extends Quantity
{
    public function __construct(float $value, TemperatureUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  TemperatureUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toCelsius(): self
    {
        return $this->convertTo(TemperatureUnit::Celsius);
    }

    public function toFahrenheit(): self
    {
        return $this->convertTo(TemperatureUnit::Fahrenheit);
    }

    public function toKelvin(): self
    {
        return $this->convertTo(TemperatureUnit::Kelvin);
    }

    public static function fromCelsius(float $value): self
    {
        return new self($value, TemperatureUnit::Celsius);
    }

    public static function fromFahrenheit(float $value): self
    {
        return new self($value, TemperatureUnit::Fahrenheit);
    }

    public static function fromKelvin(float $value): self
    {
        return new self($value, TemperatureUnit::Kelvin);
    }

    protected function convert(Unit $target): float
    {
        $celsius = match ($this->unit) {
            TemperatureUnit::Fahrenheit => ($this->value - 32) * 5 / 9,
            TemperatureUnit::Kelvin => $this->value - 273.15,
            TemperatureUnit::Celsius => $this->value,
        };

        return match ($target) {
            TemperatureUnit::Fahrenheit => $celsius * 9 / 5 + 32,
            TemperatureUnit::Kelvin => $celsius + 273.15,
            TemperatureUnit::Celsius => $celsius,
        };
    }
}
