<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\MassUnit;

/**
 * @extends LinearQuantity<MassUnit>
 */
final readonly class Mass extends LinearQuantity
{
    public function __construct(float $value, MassUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  MassUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMilligrams(): self
    {
        return $this->convertTo(MassUnit::Milligram);
    }

    public function toGrams(): self
    {
        return $this->convertTo(MassUnit::Gram);
    }

    public function toKilograms(): self
    {
        return $this->convertTo(MassUnit::Kilogram);
    }

    public function toTons(): self
    {
        return $this->convertTo(MassUnit::Ton);
    }

    public function toOunces(): self
    {
        return $this->convertTo(MassUnit::Ounce);
    }

    public function toPounds(): self
    {
        return $this->convertTo(MassUnit::Pound);
    }

    public static function fromMilligrams(float $value): self
    {
        return new self($value, MassUnit::Milligram);
    }

    public static function fromGrams(float $value): self
    {
        return new self($value, MassUnit::Gram);
    }

    public static function fromKilograms(float $value): self
    {
        return new self($value, MassUnit::Kilogram);
    }

    public static function fromTons(float $value): self
    {
        return new self($value, MassUnit::Ton);
    }

    public static function fromOunces(float $value): self
    {
        return new self($value, MassUnit::Ounce);
    }

    public static function fromPounds(float $value): self
    {
        return new self($value, MassUnit::Pound);
    }
}
