<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\FrequencyUnit;

/**
 * @extends LinearQuantity<FrequencyUnit>
 */
final readonly class Frequency extends LinearQuantity
{
    public function __construct(float $value, FrequencyUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  FrequencyUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toHertz(): self
    {
        return $this->convertTo(FrequencyUnit::Hertz);
    }

    public function toKilohertz(): self
    {
        return $this->convertTo(FrequencyUnit::Kilohertz);
    }

    public function toMegahertz(): self
    {
        return $this->convertTo(FrequencyUnit::Megahertz);
    }

    public function toGigahertz(): self
    {
        return $this->convertTo(FrequencyUnit::Gigahertz);
    }

    public function toRevolutionPerMinute(): self
    {
        return $this->convertTo(FrequencyUnit::RevolutionPerMinute);
    }

    public static function fromHertz(float $value): self
    {
        return new self($value, FrequencyUnit::Hertz);
    }

    public static function fromKilohertz(float $value): self
    {
        return new self($value, FrequencyUnit::Kilohertz);
    }

    public static function fromMegahertz(float $value): self
    {
        return new self($value, FrequencyUnit::Megahertz);
    }

    public static function fromGigahertz(float $value): self
    {
        return new self($value, FrequencyUnit::Gigahertz);
    }

    public static function fromRevolutionPerMinute(float $value): self
    {
        return new self($value, FrequencyUnit::RevolutionPerMinute);
    }
}
