<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Enums\Unit;
use Vortech\UnitConversions\ValueObjects\UnitObject;

final readonly class Mass
{
    private float $convertible;
    private Unit $unit;

    public function __construct(float $convertible, Unit $unit)
    {
        $this->convertible = $convertible;
        $this->unit = $unit;
    }

    public function toGrams(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Kilogram => $this->convertible * 1000,
            Unit::Ton => $this->convertible * 1000 * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Gram, $converted);
    }

    public function toKilograms(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Gram => $this->convertible / 1000,
            Unit::Ton => $this->convertible * 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Kilogram, $converted);
    }

    public function toTons(): UnitObject
    {
        $converted = match ($this->unit) {
            Unit::Gram => $this->convertible / 1000 / 1000,
            Unit::Kilogram => $this->convertible / 1000,
            default => $this->convertible
        };

        return UnitObject::make(Unit::Ton, $converted);
    }
    
    public static function fromGrams(float $grams): self
    {
        return new Mass($grams, Unit::Gram);
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new Mass($kilograms, Unit::Kilogram);
    }

    public static function fromTons(float $tons): self
    {
        return new Mass($tons, Unit::Ton);
    }
}