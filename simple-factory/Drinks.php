<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

interface Drinks
{
    public function setDrink(string $drink);

    public function setSugarLevel(int $sugarLevel);

    public function setIceLevel(string $iceLevel);
}
