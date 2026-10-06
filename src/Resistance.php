<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\ResistanceUnit;

/**
 * @extends LinearQuantity<ResistanceUnit>
 */
final readonly class Resistance extends LinearQuantity
{
    public function __construct(float $value, ResistanceUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  ResistanceUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMilliohm(): self
    {
        return $this->convertTo(ResistanceUnit::Milliohm);
    }

    public function toOhm(): self
    {
        return $this->convertTo(ResistanceUnit::Ohm);
    }

    public function toKiloohm(): self
    {
        return $this->convertTo(ResistanceUnit::Kiloohm);
    }

    public function toMegaohm(): self
    {
        return $this->convertTo(ResistanceUnit::Megaohm);
    }

    public static function fromMilliohm(float $value): self
    {
        return new self($value, ResistanceUnit::Milliohm);
    }

    public static function fromOhm(float $value): self
    {
        return new self($value, ResistanceUnit::Ohm);
    }

    public static function fromKiloohm(float $value): self
    {
        return new self($value, ResistanceUnit::Kiloohm);
    }

    public static function fromMegaohm(float $value): self
    {
        return new self($value, ResistanceUnit::Megaohm);
    }
}
