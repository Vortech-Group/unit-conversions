<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\DensityUnit;

/**
 * @extends LinearQuantity<DensityUnit>
 */
final readonly class Density extends LinearQuantity
{
    public function __construct(float $value, DensityUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  DensityUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toGramPerLiter(): self
    {
        return $this->convertTo(DensityUnit::GramPerLiter);
    }

    public function toKilogramPerCubicMeter(): self
    {
        return $this->convertTo(DensityUnit::KilogramPerCubicMeter);
    }

    public function toGramPerCubicCentimeter(): self
    {
        return $this->convertTo(DensityUnit::GramPerCubicCentimeter);
    }

    public function toKilogramPerLiter(): self
    {
        return $this->convertTo(DensityUnit::KilogramPerLiter);
    }

    public function toPoundPerCubicFoot(): self
    {
        return $this->convertTo(DensityUnit::PoundPerCubicFoot);
    }

    public function toPoundPerCubicInch(): self
    {
        return $this->convertTo(DensityUnit::PoundPerCubicInch);
    }

    public static function fromGramPerLiter(float $value): self
    {
        return new self($value, DensityUnit::GramPerLiter);
    }

    public static function fromKilogramPerCubicMeter(float $value): self
    {
        return new self($value, DensityUnit::KilogramPerCubicMeter);
    }

    public static function fromGramPerCubicCentimeter(float $value): self
    {
        return new self($value, DensityUnit::GramPerCubicCentimeter);
    }

    public static function fromKilogramPerLiter(float $value): self
    {
        return new self($value, DensityUnit::KilogramPerLiter);
    }

    public static function fromPoundPerCubicFoot(float $value): self
    {
        return new self($value, DensityUnit::PoundPerCubicFoot);
    }

    public static function fromPoundPerCubicInch(float $value): self
    {
        return new self($value, DensityUnit::PoundPerCubicInch);
    }
}
