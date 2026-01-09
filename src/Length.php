<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Enums\Unit;
use Vortech\UnitConversions\ValueObjects\UnitObject;

final readonly class Length
{
    private float $convertible;
    private Unit $unit;

    public function __construct(float $convertible, Unit $unit)
    {
        $this->convertible = $convertible;
        $this->unit = $unit;
    }

    public function toMillimeter(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Centimeter => $this->convertible * 10,
            Unit::Decimeter => $this->convertible * 10 * 10,
            Unit::Meter => $this->convertible * 10 * 10 * 10,
            Unit::Kilometer => $this->convertible * 10 * 10 * 10 * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Millimeter, $converted);
    }

    public function toCentimeter(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Millimeter => $this->convertible / 10,
            Unit::Decimeter => $this->convertible * 10,
            Unit::Meter => $this->convertible * 10 * 10,
            Unit::Kilometer => $this->convertible * 10 * 10 * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Centimeter, $converted);
    }

    public function toDecimeter(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Millimeter => $this->convertible / 10 / 10,
            Unit::Centimeter => $this->convertible / 10,
            Unit::Meter => $this->convertible * 10,
            Unit::Kilometer => $this->convertible * 10 * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Decimeter, $converted);
    }

    public function toMeter(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Millimeter => $this->convertible / 10 / 10 / 10,
            Unit::Centimeter => $this->convertible / 10 / 10,
            Unit::Decimeter => $this->convertible / 10,
            Unit::Kilometer => $this->convertible * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Meter, $converted);
    }

    public function toKilometer(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Millimeter => $this->convertible / 10 / 10 / 10 / 1000,
            Unit::Centimeter => $this->convertible / 10 / 10 / 1000,
            Unit::Decimeter => $this->convertible / 10 / 1000,
            Unit::Meter => $this->convertible / 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Kilometer, $converted);
    }
    
    public static function fromMillimeter(float $millimeter): self
    {
        return new Length($millimeter, Unit::Millimeter);
    }

    public static function fromCentimeter(float $centimeter): self
    {
        return new Length($centimeter, Unit::Centimeter);
    }

    public static function fromDecimeter(float $decimeter): self
    {
        return new Length($decimeter, Unit::Decimeter);
    }

    public static function fromMeter(float $meter): self
    {
        return new Length($meter, Unit::Meter);
    }

    public static function fromKilometer(float $kilometer): self
    {
        return new Length($kilometer, Unit::Kilometer);
    }
}