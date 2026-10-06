<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\AreaUnit;

/**
 * @extends LinearQuantity<AreaUnit>
 */
final readonly class Area extends LinearQuantity
{
    public function __construct(float $value, AreaUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  AreaUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toSquareMillimeter(): self
    {
        return $this->convertTo(AreaUnit::SquareMillimeter);
    }

    public function toSquareCentimeter(): self
    {
        return $this->convertTo(AreaUnit::SquareCentimeter);
    }

    public function toSquareMeter(): self
    {
        return $this->convertTo(AreaUnit::SquareMeter);
    }

    public function toHectare(): self
    {
        return $this->convertTo(AreaUnit::Hectare);
    }

    public function toSquareKilometer(): self
    {
        return $this->convertTo(AreaUnit::SquareKilometer);
    }

    public function toSquareInch(): self
    {
        return $this->convertTo(AreaUnit::SquareInch);
    }

    public function toSquareFoot(): self
    {
        return $this->convertTo(AreaUnit::SquareFoot);
    }

    public function toAcre(): self
    {
        return $this->convertTo(AreaUnit::Acre);
    }

    public static function fromSquareMillimeter(float $value): self
    {
        return new self($value, AreaUnit::SquareMillimeter);
    }

    public static function fromSquareCentimeter(float $value): self
    {
        return new self($value, AreaUnit::SquareCentimeter);
    }

    public static function fromSquareMeter(float $value): self
    {
        return new self($value, AreaUnit::SquareMeter);
    }

    public static function fromHectare(float $value): self
    {
        return new self($value, AreaUnit::Hectare);
    }

    public static function fromSquareKilometer(float $value): self
    {
        return new self($value, AreaUnit::SquareKilometer);
    }

    public static function fromSquareInch(float $value): self
    {
        return new self($value, AreaUnit::SquareInch);
    }

    public static function fromSquareFoot(float $value): self
    {
        return new self($value, AreaUnit::SquareFoot);
    }

    public static function fromAcre(float $value): self
    {
        return new self($value, AreaUnit::Acre);
    }
}
