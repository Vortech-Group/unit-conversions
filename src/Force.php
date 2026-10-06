<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\ForceUnit;

/**
 * @extends LinearQuantity<ForceUnit>
 */
final readonly class Force extends LinearQuantity
{
    public function __construct(float $value, ForceUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  ForceUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toNewton(): self
    {
        return $this->convertTo(ForceUnit::Newton);
    }

    public function toKilonewton(): self
    {
        return $this->convertTo(ForceUnit::Kilonewton);
    }

    public function toDyne(): self
    {
        return $this->convertTo(ForceUnit::Dyne);
    }

    public function toPoundForce(): self
    {
        return $this->convertTo(ForceUnit::PoundForce);
    }

    public function toKilogramForce(): self
    {
        return $this->convertTo(ForceUnit::KilogramForce);
    }

    public static function fromNewton(float $value): self
    {
        return new self($value, ForceUnit::Newton);
    }

    public static function fromKilonewton(float $value): self
    {
        return new self($value, ForceUnit::Kilonewton);
    }

    public static function fromDyne(float $value): self
    {
        return new self($value, ForceUnit::Dyne);
    }

    public static function fromPoundForce(float $value): self
    {
        return new self($value, ForceUnit::PoundForce);
    }

    public static function fromKilogramForce(float $value): self
    {
        return new self($value, ForceUnit::KilogramForce);
    }
}
