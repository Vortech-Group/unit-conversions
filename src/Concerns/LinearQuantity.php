<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Concerns;

use Vortech\UnitConversions\Contracts\LinearUnit;
use Vortech\UnitConversions\Contracts\Unit;

/**
 * A quantity whose units are proportional to each other, so a conversion
 * scales the value through the factors of the two units.
 *
 * @template TUnit of LinearUnit
 *
 * @extends Quantity<TUnit>
 */
abstract readonly class LinearQuantity extends Quantity
{
    /**
     * @param  TUnit  $target
     */
    protected function convert(Unit $target): float
    {
        /** @var LinearUnit $unit */
        $unit = $this->unit;

        return $this->value * $unit->factor() / $target->factor();
    }
}
