<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Contracts;

interface Unit
{
    /**
     * The short symbol of the unit, such as "kg" or "mph".
     */
    public function symbol(): string;

    public function is(self $comparable): bool;

    public function isNot(self $comparable): bool;
}
