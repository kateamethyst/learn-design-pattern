<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\DrinkFactory;

class TestMakeMilkTea
{
    /**
     * Test Simple Factory
     *
     * @return void
     */
    public function test()
    {
        $drinkFactory = new DrinkFactory();
        $milktea = $drinkFactory->makeDrink()->serveDrink();
    }
}