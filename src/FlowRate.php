<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\FlowRateUnit;

/**
 * @extends LinearQuantity<FlowRateUnit>
 */
final readonly class FlowRate extends LinearQuantity
{
    public function __construct(float $value, FlowRateUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  FlowRateUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toLiterPerHour(): self
    {
        return $this->convertTo(FlowRateUnit::LiterPerHour);
    }

    public function toLiterPerMinute(): self
    {
        return $this->convertTo(FlowRateUnit::LiterPerMinute);
    }

    public function toLiterPerSecond(): self
    {
        return $this->convertTo(FlowRateUnit::LiterPerSecond);
    }

    public function toCubicMeterPerHour(): self
    {
        return $this->convertTo(FlowRateUnit::CubicMeterPerHour);
    }

    public function toCubicMeterPerSecond(): self
    {
        return $this->convertTo(FlowRateUnit::CubicMeterPerSecond);
    }

    public function toGallonPerMinute(): self
    {
        return $this->convertTo(FlowRateUnit::GallonPerMinute);
    }

    public function toCubicFootPerMinute(): self
    {
        return $this->convertTo(FlowRateUnit::CubicFootPerMinute);
    }

    public static function fromLiterPerHour(float $value): self
    {
        return new self($value, FlowRateUnit::LiterPerHour);
    }

    public static function fromLiterPerMinute(float $value): self
    {
        return new self($value, FlowRateUnit::LiterPerMinute);
    }

    public static function fromLiterPerSecond(float $value): self
    {
        return new self($value, FlowRateUnit::LiterPerSecond);
    }

    public static function fromCubicMeterPerHour(float $value): self
    {
        return new self($value, FlowRateUnit::CubicMeterPerHour);
    }

    public static function fromCubicMeterPerSecond(float $value): self
    {
        return new self($value, FlowRateUnit::CubicMeterPerSecond);
    }

    public static function fromGallonPerMinute(float $value): self
    {
        return new self($value, FlowRateUnit::GallonPerMinute);
    }

    public static function fromCubicFootPerMinute(float $value): self
    {
        return new self($value, FlowRateUnit::CubicFootPerMinute);
    }
}
