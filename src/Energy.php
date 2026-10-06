<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\EnergyUnit;

/**
 * @extends LinearQuantity<EnergyUnit>
 */
final readonly class Energy extends LinearQuantity
{
    public function __construct(float $value, EnergyUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  EnergyUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toJoule(): self
    {
        return $this->convertTo(EnergyUnit::Joule);
    }

    public function toKilojoule(): self
    {
        return $this->convertTo(EnergyUnit::Kilojoule);
    }

    public function toCalorie(): self
    {
        return $this->convertTo(EnergyUnit::Calorie);
    }

    public function toKilocalorie(): self
    {
        return $this->convertTo(EnergyUnit::Kilocalorie);
    }

    public function toWattHour(): self
    {
        return $this->convertTo(EnergyUnit::WattHour);
    }

    public function toKilowattHour(): self
    {
        return $this->convertTo(EnergyUnit::KilowattHour);
    }

    public function toBritishThermalUnit(): self
    {
        return $this->convertTo(EnergyUnit::BritishThermalUnit);
    }

    public static function fromJoule(float $value): self
    {
        return new self($value, EnergyUnit::Joule);
    }

    public static function fromKilojoule(float $value): self
    {
        return new self($value, EnergyUnit::Kilojoule);
    }

    public static function fromCalorie(float $value): self
    {
        return new self($value, EnergyUnit::Calorie);
    }

    public static function fromKilocalorie(float $value): self
    {
        return new self($value, EnergyUnit::Kilocalorie);
    }

    public static function fromWattHour(float $value): self
    {
        return new self($value, EnergyUnit::WattHour);
    }

    public static function fromKilowattHour(float $value): self
    {
        return new self($value, EnergyUnit::KilowattHour);
    }

    public static function fromBritishThermalUnit(float $value): self
    {
        return new self($value, EnergyUnit::BritishThermalUnit);
    }
}
