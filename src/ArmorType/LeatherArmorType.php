<?php

namespace App\ArmorType;

class LeatherArmorType implements ArmorType
{

    /**
     * Absorbs 25% damage
     */
    public function getArmorReduction(int $damage): int
    {
        return floor($damage * 0.25);
    }
}