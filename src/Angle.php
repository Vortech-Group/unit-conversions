<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\AngleUnit;

/**
 * @extends LinearQuantity<AngleUnit>
 */
final readonly class Angle extends LinearQuantity
{
    public function __construct(float $value, AngleUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  AngleUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toDegree(): self
    {
        return $this->convertTo(AngleUnit::Degree);
    }

    public function toRadian(): self
    {
        return $this->convertTo(AngleUnit::Radian);
    }

    public function toGradian(): self
    {
        return $this->convertTo(AngleUnit::Gradian);
    }

    public function toArcminute(): self
    {
        return $this->convertTo(AngleUnit::Arcminute);
    }

    public function toArcsecond(): self
    {
        return $this->convertTo(AngleUnit::Arcsecond);
    }

    public function toTurn(): self
    {
        return $this->convertTo(AngleUnit::Turn);
    }

    public static function fromDegree(float $value): self
    {
        return new self($value, AngleUnit::Degree);
    }

    public static function fromRadian(float $value): self
    {
        return new self($value, AngleUnit::Radian);
    }

    public static function fromGradian(float $value): self
    {
        return new self($value, AngleUnit::Gradian);
    }

    public static function fromArcminute(float $value): self
    {
        return new self($value, AngleUnit::Arcminute);
    }

    public static function fromArcsecond(float $value): self
    {
        return new self($value, AngleUnit::Arcsecond);
    }

    public static function fromTurn(float $value): self
    {
        return new self($value, AngleUnit::Turn);
    }
}
