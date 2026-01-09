<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Enums\Unit;
use Vortech\UnitConversions\ValueObjects\UnitObject;

final readonly class Capacity
{
    private float $convertible;
    private Unit $unit;

    public function __construct(float $convertible, Unit $unit)
    {
        $this->convertible = $convertible;
        $this->unit = $unit;
    }

    public function toMilliliters(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Centiliter => $this->convertible * 10,
            Unit::Deciliter => $this->convertible * 10 * 10,
            Unit::Liter => $this->convertible * 10 * 10 * 10,
            Unit::Hectoliter => $this->convertible * 10 * 10 * 10 * 100,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Milliliter, $converted);
    }

    public function toCentiliters(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Milliliter => $this->convertible / 10,
            Unit::Deciliter => $this->convertible * 10,
            Unit::Liter => $this->convertible * 10 * 10,
            Unit::Hectoliter => $this->convertible * 10 * 10 * 100,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Centiliter, $converted);
    }

    public function toDeciliters(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Milliliter => $this->convertible / 10 / 10,
            Unit::Centiliter => $this->convertible / 10,
            Unit::Liter => $this->convertible * 10,
            Unit::Hectoliter => $this->convertible * 10 * 100,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Deciliter, $converted);
    }

    public function toLiters(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Milliliter => $this->convertible / 10 / 10 / 10,
            Unit::Centiliter => $this->convertible / 10 / 10,
            Unit::Deciliter => $this->convertible / 10,
            Unit::Hectoliter => $this->convertible * 100,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Liter, $converted);
    }

    public function toHectoliters(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Milliliter => $this->convertible / 10 / 10 / 10 / 100,
            Unit::Centiliter => $this->convertible / 10 / 10 / 100,
            Unit::Deciliter => $this->convertible / 10 / 100,
            Unit::Liter => $this->convertible / 100,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Hectoliter, $converted);
    }

    public static function fromMilliliters(float $milliliter): self
    {
        return new Capacity($milliliter, Unit::Milliliter);
    }

    public static function fromCentiliters(float $centiliter): self
    {
        return new Capacity($centiliter, Unit::Centiliter);
    }

    public static function fromDeciliters(float $deciliter): self
    {
        return new Capacity($deciliter, Unit::Deciliter);
    }

    public static function fromLiters(float $liter): self
    {
        return new Capacity($liter, Unit::Liter);
    }

    public static function fromHectoliters(float $hectoliter): self
    {
        return new Capacity($hectoliter, Unit::Hectoliter);
    }
}