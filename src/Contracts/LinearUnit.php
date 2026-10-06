<?php

declare(strict_types=1);

namespace Vortech\UnitConversions\Contracts;

interface LinearUnit extends Unit
{
    /**
     * How many of the base unit of the quantity this unit holds.
     */
    public function factor(): float;
}
