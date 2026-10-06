<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\PowerUnit;

/**
 * @extends LinearQuantity<PowerUnit>
 */
final readonly class Power extends LinearQuantity
{
    public function __construct(float $value, PowerUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  PowerUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toWatt(): self
    {
        return $this->convertTo(PowerUnit::Watt);
    }

    public function toKilowatt(): self
    {
        return $this->convertTo(PowerUnit::Kilowatt);
    }

    public function toMegawatt(): self
    {
        return $this->convertTo(PowerUnit::Megawatt);
    }

    public function toMetricHorsepower(): self
    {
        return $this->convertTo(PowerUnit::MetricHorsepower);
    }

    public function toMechanicalHorsepower(): self
    {
        return $this->convertTo(PowerUnit::MechanicalHorsepower);
    }

    public static function fromWatt(float $value): self
    {
        return new self($value, PowerUnit::Watt);
    }

    public static function fromKilowatt(float $value): self
    {
        return new self($value, PowerUnit::Kilowatt);
    }

    public static function fromMegawatt(float $value): self
    {
        return new self($value, PowerUnit::Megawatt);
    }

    public static function fromMetricHorsepower(float $value): self
    {
        return new self($value, PowerUnit::MetricHorsepower);
    }

    public static function fromMechanicalHorsepower(float $value): self
    {
        return new self($value, PowerUnit::MechanicalHorsepower);
    }
}
