<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\VoltageUnit;

/**
 * @extends LinearQuantity<VoltageUnit>
 */
final readonly class Voltage extends LinearQuantity
{
    public function __construct(float $value, VoltageUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  VoltageUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMillivolt(): self
    {
        return $this->convertTo(VoltageUnit::Millivolt);
    }

    public function toVolt(): self
    {
        return $this->convertTo(VoltageUnit::Volt);
    }

    public function toKilovolt(): self
    {
        return $this->convertTo(VoltageUnit::Kilovolt);
    }

    public function toMegavolt(): self
    {
        return $this->convertTo(VoltageUnit::Megavolt);
    }

    public static function fromMillivolt(float $value): self
    {
        return new self($value, VoltageUnit::Millivolt);
    }

    public static function fromVolt(float $value): self
    {
        return new self($value, VoltageUnit::Volt);
    }

    public static function fromKilovolt(float $value): self
    {
        return new self($value, VoltageUnit::Kilovolt);
    }

    public static function fromMegavolt(float $value): self
    {
        return new self($value, VoltageUnit::Megavolt);
    }
}
