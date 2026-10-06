<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\LengthUnit;

/**
 * @extends LinearQuantity<LengthUnit>
 */
final readonly class Length extends LinearQuantity
{
    public function __construct(float $value, LengthUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  LengthUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMillimeter(): self
    {
        return $this->convertTo(LengthUnit::Millimeter);
    }

    public function toCentimeter(): self
    {
        return $this->convertTo(LengthUnit::Centimeter);
    }

    public function toDecimeter(): self
    {
        return $this->convertTo(LengthUnit::Decimeter);
    }

    public function toMeter(): self
    {
        return $this->convertTo(LengthUnit::Meter);
    }

    public function toKilometer(): self
    {
        return $this->convertTo(LengthUnit::Kilometer);
    }

    public function toInch(): self
    {
        return $this->convertTo(LengthUnit::Inch);
    }

    public function toFoot(): self
    {
        return $this->convertTo(LengthUnit::Foot);
    }

    public function toYard(): self
    {
        return $this->convertTo(LengthUnit::Yard);
    }

    public function toMile(): self
    {
        return $this->convertTo(LengthUnit::Mile);
    }

    public static function fromMillimeter(float $value): self
    {
        return new self($value, LengthUnit::Millimeter);
    }

    public static function fromCentimeter(float $value): self
    {
        return new self($value, LengthUnit::Centimeter);
    }

    public static function fromDecimeter(float $value): self
    {
        return new self($value, LengthUnit::Decimeter);
    }

    public static function fromMeter(float $value): self
    {
        return new self($value, LengthUnit::Meter);
    }

    public static function fromKilometer(float $value): self
    {
        return new self($value, LengthUnit::Kilometer);
    }

    public static function fromInch(float $value): self
    {
        return new self($value, LengthUnit::Inch);
    }

    public static function fromFoot(float $value): self
    {
        return new self($value, LengthUnit::Foot);
    }

    public static function fromYard(float $value): self
    {
        return new self($value, LengthUnit::Yard);
    }

    public static function fromMile(float $value): self
    {
        return new self($value, LengthUnit::Mile);
    }
}
