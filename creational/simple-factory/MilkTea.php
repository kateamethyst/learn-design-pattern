<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\Drinks;

class MilkTea implements Drinks
{
    /**
     * Set what kind of milktea
     *
     * @param string $drink
     * @return string
     */
    public function setDrink(string $drink): string
    {
        return $drink;
    }

    /**
     * Set sugar level of milktea
     *
     * @param integer $sugarLevel
     * @return integer
     */
    public function setSugarLevel(int $sugarLevel): int
    {
        return $sugarLevel;
    }

    /**
     * Set ice level of milktea
     *
     * @param string $iceLevel
     * @return string
     */
    public function setIceLevel(string $iceLevel): string
    {
        return $iceLevel;
    }
}