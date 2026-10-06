<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Concerns;

use Vortech\UnitConversions\Contracts\Unit;

/**
 * @template TUnit of Unit
 */
abstract readonly class Quantity
{
    /**
     * @param  TUnit  $unit
     */
    public function __construct(
        protected float $value,
        protected Unit $unit,
    ) {}

    /**
     * @return TUnit
     */
    public function getUnit(): Unit
    {
        return $this->unit;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param  TUnit  $target
     */
    protected function convertTo(Unit $target): static
    {
        return $this->make($this->unit->is($target) ? $this->value : $this->convert($target), $target);
    }

    /**
     * @param  TUnit  $unit
     */
    abstract protected function make(float $value, Unit $unit): static;

    /**
     * @param  TUnit  $target
     */
    abstract protected function convert(Unit $target): float;
}
