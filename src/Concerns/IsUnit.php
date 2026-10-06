<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Concerns;

use Vortech\UnitConversions\Contracts\Unit;

/**
 * Shared behavior of the backed unit enums.
 */
trait IsUnit
{
    public function symbol(): string
    {
        return $this->value;
    }

    public function is(Unit $comparable): bool
    {
        return $this === $comparable;
    }

    public function isNot(Unit $comparable): bool
    {
        return ! $this->is($comparable);
    }
}
