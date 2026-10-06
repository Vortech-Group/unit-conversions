<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\ElectricCurrentUnit;

/**
 * @extends LinearQuantity<ElectricCurrentUnit>
 */
final readonly class ElectricCurrent extends LinearQuantity
{
    public function __construct(float $value, ElectricCurrentUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  ElectricCurrentUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMilliampere(): self
    {
        return $this->convertTo(ElectricCurrentUnit::Milliampere);
    }

    public function toAmpere(): self
    {
        return $this->convertTo(ElectricCurrentUnit::Ampere);
    }

    public function toKiloampere(): self
    {
        return $this->convertTo(ElectricCurrentUnit::Kiloampere);
    }

    public static function fromMilliampere(float $value): self
    {
        return new self($value, ElectricCurrentUnit::Milliampere);
    }

    public static function fromAmpere(float $value): self
    {
        return new self($value, ElectricCurrentUnit::Ampere);
    }

    public static function fromKiloampere(float $value): self
    {
        return new self($value, ElectricCurrentUnit::Kiloampere);
    }
}
