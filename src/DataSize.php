<?php

declare(strict_types=1);

namespace Vortech\UnitConversions;

use Vortech\UnitConversions\Concerns\LinearQuantity;
use Vortech\UnitConversions\Contracts\Unit;
use Vortech\UnitConversions\Enums\DataSizeUnit;

/**
 * @extends LinearQuantity<DataSizeUnit>
 */
final readonly class DataSize extends LinearQuantity
{
    public function __construct(float $value, DataSizeUnit $unit)
    {
        parent::__construct($value, $unit);
    }

    /**
     * @param  DataSizeUnit  $unit
     */
    protected function make(float $value, Unit $unit): static
    {
        return new self($value, $unit);
    }

    public function toBit(): self
    {
        return $this->convertTo(DataSizeUnit::Bit);
    }

    public function toByte(): self
    {
        return $this->convertTo(DataSizeUnit::Byte);
    }

    public function toKilobyte(): self
    {
        return $this->convertTo(DataSizeUnit::Kilobyte);
    }

    public function toMegabyte(): self
    {
        return $this->convertTo(DataSizeUnit::Megabyte);
    }

    public function toGigabyte(): self
    {
        return $this->convertTo(DataSizeUnit::Gigabyte);
    }

    public function toTerabyte(): self
    {
        return $this->convertTo(DataSizeUnit::Terabyte);
    }

    public function toKibibyte(): self
    {
        return $this->convertTo(DataSizeUnit::Kibibyte);
    }

    public function toMebibyte(): self
    {
        return $this->convertTo(DataSizeUnit::Mebibyte);
    }

    public function toGibibyte(): self
    {
        return $this->convertTo(DataSizeUnit::Gibibyte);
    }

    public function toTebibyte(): self
    {
        return $this->convertTo(DataSizeUnit::Tebibyte);
    }

    public static function fromBit(float $value): self
    {
        return new self($value, DataSizeUnit::Bit);
    }

    public static function fromByte(float $value): self
    {
        return new self($value, DataSizeUnit::Byte);
    }

    public static function fromKilobyte(float $value): self
    {
        return new self($value, DataSizeUnit::Kilobyte);
    }

    public static function fromMegabyte(float $value): self
    {
        return new self($value, DataSizeUnit::Megabyte);
    }

    public static function fromGigabyte(float $value): self
    {
        return new self($value, DataSizeUnit::Gigabyte);
    }

    public static function fromTerabyte(float $value): self
    {
        return new self($value, DataSizeUnit::Terabyte);
    }

    public static function fromKibibyte(float $value): self
    {
        return new self($value, DataSizeUnit::Kibibyte);
    }

    public static function fromMebibyte(float $value): self
    {
        return new self($value, DataSizeUnit::Mebibyte);
    }

    public static function fromGibibyte(float $value): self
    {
        return new self($value, DataSizeUnit::Gibibyte);
    }

    public static function fromTebibyte(float $value): self
    {
        return new self($value, DataSizeUnit::Tebibyte);
    }
}
