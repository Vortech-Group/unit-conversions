<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\TorqueUnit;

/**
 * @extends LinearQuantity<TorqueUnit>
 */
final readonly class Torque extends LinearQuantity
{
    public function __construct(float $value, TorqueUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  TorqueUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toNewtonCentimeter(): self
    {
        return $this->convertTo(TorqueUnit::NewtonCentimeter);
    }

    public function toNewtonMeter(): self
    {
        return $this->convertTo(TorqueUnit::NewtonMeter);
    }

    public function toKilonewtonMeter(): self
    {
        return $this->convertTo(TorqueUnit::KilonewtonMeter);
    }

    public function toKilogramForceMeter(): self
    {
        return $this->convertTo(TorqueUnit::KilogramForceMeter);
    }

    public function toPoundForceFoot(): self
    {
        return $this->convertTo(TorqueUnit::PoundForceFoot);
    }

    public function toPoundForceInch(): self
    {
        return $this->convertTo(TorqueUnit::PoundForceInch);
    }

    public static function fromNewtonCentimeter(float $value): self
    {
        return new self($value, TorqueUnit::NewtonCentimeter);
    }

    public static function fromNewtonMeter(float $value): self
    {
        return new self($value, TorqueUnit::NewtonMeter);
    }

    public static function fromKilonewtonMeter(float $value): self
    {
        return new self($value, TorqueUnit::KilonewtonMeter);
    }

    public static function fromKilogramForceMeter(float $value): self
    {
        return new self($value, TorqueUnit::KilogramForceMeter);
    }

    public static function fromPoundForceFoot(float $value): self
    {
        return new self($value, TorqueUnit::PoundForceFoot);
    }

    public static function fromPoundForceInch(float $value): self
    {
        return new self($value, TorqueUnit::PoundForceInch);
    }
}
