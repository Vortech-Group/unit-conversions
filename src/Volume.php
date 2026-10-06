<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\VolumeUnit;

/**
 * @extends LinearQuantity<VolumeUnit>
 */
final readonly class Volume extends LinearQuantity
{
    public function __construct(float $value, VolumeUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  VolumeUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toCubicMillimeter(): self
    {
        return $this->convertTo(VolumeUnit::CubicMillimeter);
    }

    public function toCubicCentimeter(): self
    {
        return $this->convertTo(VolumeUnit::CubicCentimeter);
    }

    public function toCubicDecimeter(): self
    {
        return $this->convertTo(VolumeUnit::CubicDecimeter);
    }

    public function toCubicMeter(): self
    {
        return $this->convertTo(VolumeUnit::CubicMeter);
    }

    public function toCubicInch(): self
    {
        return $this->convertTo(VolumeUnit::CubicInch);
    }

    public function toCubicFoot(): self
    {
        return $this->convertTo(VolumeUnit::CubicFoot);
    }

    public function toCubicYard(): self
    {
        return $this->convertTo(VolumeUnit::CubicYard);
    }

    public static function fromCubicMillimeter(float $value): self
    {
        return new self($value, VolumeUnit::CubicMillimeter);
    }

    public static function fromCubicCentimeter(float $value): self
    {
        return new self($value, VolumeUnit::CubicCentimeter);
    }

    public static function fromCubicDecimeter(float $value): self
    {
        return new self($value, VolumeUnit::CubicDecimeter);
    }

    public static function fromCubicMeter(float $value): self
    {
        return new self($value, VolumeUnit::CubicMeter);
    }

    public static function fromCubicInch(float $value): self
    {
        return new self($value, VolumeUnit::CubicInch);
    }

    public static function fromCubicFoot(float $value): self
    {
        return new self($value, VolumeUnit::CubicFoot);
    }

    public static function fromCubicYard(float $value): self
    {
        return new self($value, VolumeUnit::CubicYard);
    }
}
