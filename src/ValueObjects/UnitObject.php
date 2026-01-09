<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\ValueObjects;

use Vortech\UnitConversions\Enums\Unit;

final readonly class UnitObject
{
    protected Unit $unit;
    protected float $value;

    public function __construct(Unit $unit, float $value)
    {
        $this->unit = $unit;
        $this->value = $value;
    }

    public static function make(Unit $unit, float $value): self
    {
        return new self($unit, $value);
    }

    public function getUnit(): Unit
    {
        return $this->unit;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}