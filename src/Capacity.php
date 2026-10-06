<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\CapacityUnit;

/**
 * @extends LinearQuantity<CapacityUnit>
 */
final readonly class Capacity extends LinearQuantity
{
    public function __construct(float $value, CapacityUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  CapacityUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMilliliters(): self
    {
        return $this->convertTo(CapacityUnit::Milliliter);
    }

    public function toCentiliters(): self
    {
        return $this->convertTo(CapacityUnit::Centiliter);
    }

    public function toDeciliters(): self
    {
        return $this->convertTo(CapacityUnit::Deciliter);
    }

    public function toLiters(): self
    {
        return $this->convertTo(CapacityUnit::Liter);
    }

    public function toHectoliters(): self
    {
        return $this->convertTo(CapacityUnit::Hectoliter);
    }

    public function toFluidOunces(): self
    {
        return $this->convertTo(CapacityUnit::FluidOunce);
    }

    public function toPints(): self
    {
        return $this->convertTo(CapacityUnit::Pint);
    }

    public function toGallons(): self
    {
        return $this->convertTo(CapacityUnit::Gallon);
    }

    public static function fromMilliliters(float $value): self
    {
        return new self($value, CapacityUnit::Milliliter);
    }

    public static function fromCentiliters(float $value): self
    {
        return new self($value, CapacityUnit::Centiliter);
    }

    public static function fromDeciliters(float $value): self
    {
        return new self($value, CapacityUnit::Deciliter);
    }

    public static function fromLiters(float $value): self
    {
        return new self($value, CapacityUnit::Liter);
    }

    public static function fromHectoliters(float $value): self
    {
        return new self($value, CapacityUnit::Hectoliter);
    }

    public static function fromFluidOunces(float $value): self
    {
        return new self($value, CapacityUnit::FluidOunce);
    }

    public static function fromPints(float $value): self
    {
        return new self($value, CapacityUnit::Pint);
    }

    public static function fromGallons(float $value): self
    {
        return new self($value, CapacityUnit::Gallon);
    }
}
