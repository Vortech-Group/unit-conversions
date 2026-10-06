<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Enums;

use Vortech\UnitConversions\Concerns\IsUnit;
use Vortech\UnitConversions\Contracts\LinearUnit;

enum DataSizeUnit: string implements LinearUnit
{
    use IsUnit;

    case Bit = 'b';
    case Byte = 'B';
    case Kilobyte = 'kB';
    case Megabyte = 'MB';
    case Gigabyte = 'GB';
    case Terabyte = 'TB';
    case Kibibyte = 'KiB';
    case Mebibyte = 'MiB';
    case Gibibyte = 'GiB';
    case Tebibyte = 'TiB';

    /**
     * How many bits this unit holds.
     */
    public function factor(): float
    {
        return match ($this) {
            self::Bit => 1.0,
            self::Byte => 8.0,
            self::Kilobyte => 8_000.0,
            self::Megabyte => 8_000_000.0,
            self::Gigabyte => 8_000_000_000.0,
            self::Terabyte => 8_000_000_000_000.0,
            self::Kibibyte => 8_192.0,
            self::Mebibyte => 8_388_608.0,
            self::Gibibyte => 8_589_934_592.0,
            self::Tebibyte => 8_796_093_022_208.0,
        };
    }
}
