<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\PressureUnit;

/**
 * @extends LinearQuantity<PressureUnit>
 */
final readonly class Pressure extends LinearQuantity
{
    public function __construct(float $value, PressureUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  PressureUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toPascal(): self
    {
        return $this->convertTo(PressureUnit::Pascal);
    }

    public function toHectopascal(): self
    {
        return $this->convertTo(PressureUnit::Hectopascal);
    }

    public function toKilopascal(): self
    {
        return $this->convertTo(PressureUnit::Kilopascal);
    }

    public function toMillibar(): self
    {
        return $this->convertTo(PressureUnit::Millibar);
    }

    public function toBar(): self
    {
        return $this->convertTo(PressureUnit::Bar);
    }

    public function toAtmosphere(): self
    {
        return $this->convertTo(PressureUnit::Atmosphere);
    }

    public function toPoundPerSquareInch(): self
    {
        return $this->convertTo(PressureUnit::PoundPerSquareInch);
    }

    public function toMillimeterOfMercury(): self
    {
        return $this->convertTo(PressureUnit::MillimeterOfMercury);
    }

    public static function fromPascal(float $value): self
    {
        return new self($value, PressureUnit::Pascal);
    }

    public static function fromHectopascal(float $value): self
    {
        return new self($value, PressureUnit::Hectopascal);
    }

    public static function fromKilopascal(float $value): self
    {
        return new self($value, PressureUnit::Kilopascal);
    }

    public static function fromMillibar(float $value): self
    {
        return new self($value, PressureUnit::Millibar);
    }

    public static function fromBar(float $value): self
    {
        return new self($value, PressureUnit::Bar);
    }

    public static function fromAtmosphere(float $value): self
    {
        return new self($value, PressureUnit::Atmosphere);
    }

    public static function fromPoundPerSquareInch(float $value): self
    {
        return new self($value, PressureUnit::PoundPerSquareInch);
    }

    public static function fromMillimeterOfMercury(float $value): self
    {
        return new self($value, PressureUnit::MillimeterOfMercury);
    }
}
