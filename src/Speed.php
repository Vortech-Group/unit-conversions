<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\SpeedUnit;

/**
 * @extends LinearQuantity<SpeedUnit>
 */
final readonly class Speed extends LinearQuantity
{
    public function __construct(float $value, SpeedUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  SpeedUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMeterPerSecond(): self
    {
        return $this->convertTo(SpeedUnit::MeterPerSecond);
    }

    public function toKilometerPerHour(): self
    {
        return $this->convertTo(SpeedUnit::KilometerPerHour);
    }

    public function toMilePerHour(): self
    {
        return $this->convertTo(SpeedUnit::MilePerHour);
    }

    public function toKnot(): self
    {
        return $this->convertTo(SpeedUnit::Knot);
    }

    public function toFootPerSecond(): self
    {
        return $this->convertTo(SpeedUnit::FootPerSecond);
    }

    public static function fromMeterPerSecond(float $value): self
    {
        return new self($value, SpeedUnit::MeterPerSecond);
    }

    public static function fromKilometerPerHour(float $value): self
    {
        return new self($value, SpeedUnit::KilometerPerHour);
    }

    public static function fromMilePerHour(float $value): self
    {
        return new self($value, SpeedUnit::MilePerHour);
    }

    public static function fromKnot(float $value): self
    {
        return new self($value, SpeedUnit::Knot);
    }

    public static function fromFootPerSecond(float $value): self
    {
        return new self($value, SpeedUnit::FootPerSecond);
    }
}
