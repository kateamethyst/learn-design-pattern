<?php 

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\MilkTea;

class DrinkFactory
{
    /**
     * Make tea
     *
     * @return MilkTea
     */
    public function makeDrink(): MilkTea
    {
        return new MilkTea();
    }
}