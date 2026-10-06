<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\AccelerationUnit;

/**
 * @extends LinearQuantity<AccelerationUnit>
 */
final readonly class Acceleration extends LinearQuantity
{
    public function __construct(float $value, AccelerationUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  AccelerationUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMeterPerSecondSquared(): self
    {
        return $this->convertTo(AccelerationUnit::MeterPerSecondSquared);
    }

    public function toGal(): self
    {
        return $this->convertTo(AccelerationUnit::Gal);
    }

    public function toFootPerSecondSquared(): self
    {
        return $this->convertTo(AccelerationUnit::FootPerSecondSquared);
    }

    public function toStandardGravity(): self
    {
        return $this->convertTo(AccelerationUnit::StandardGravity);
    }

    public static function fromMeterPerSecondSquared(float $value): self
    {
        return new self($value, AccelerationUnit::MeterPerSecondSquared);
    }

    public static function fromGal(float $value): self
    {
        return new self($value, AccelerationUnit::Gal);
    }

    public static function fromFootPerSecondSquared(float $value): self
    {
        return new self($value, AccelerationUnit::FootPerSecondSquared);
    }

    public static function fromStandardGravity(float $value): self
    {
        return new self($value, AccelerationUnit::StandardGravity);
    }
}
