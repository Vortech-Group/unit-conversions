<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\TimeUnit;

/**
 * @extends LinearQuantity<TimeUnit>
 */
final readonly class Time extends LinearQuantity
{
    public function __construct(float $value, TimeUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  TimeUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toMilliseconds(): self
    {
        return $this->convertTo(TimeUnit::Millisecond);
    }

    public function toSeconds(): self
    {
        return $this->convertTo(TimeUnit::Second);
    }

    public function toMinutes(): self
    {
        return $this->convertTo(TimeUnit::Minute);
    }

    public function toHours(): self
    {
        return $this->convertTo(TimeUnit::Hour);
    }

    public function toDays(): self
    {
        return $this->convertTo(TimeUnit::Day);
    }

    public function toWeeks(): self
    {
        return $this->convertTo(TimeUnit::Week);
    }

    public static function fromMilliseconds(float $value): self
    {
        return new self($value, TimeUnit::Millisecond);
    }

    public static function fromSeconds(float $value): self
    {
        return new self($value, TimeUnit::Second);
    }

    public static function fromMinutes(float $value): self
    {
        return new self($value, TimeUnit::Minute);
    }

    public static function fromHours(float $value): self
    {
        return new self($value, TimeUnit::Hour);
    }

    public static function fromDays(float $value): self
    {
        return new self($value, TimeUnit::Day);
    }

    public static function fromWeeks(float $value): self
    {
        return new self($value, TimeUnit::Week);
    }
}
