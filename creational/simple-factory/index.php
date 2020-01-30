<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\MilkFactory;

class TestMakeMilkTea
{
    /**
     * Test Simple Factory
     *
     * @return void
     */
    public function test()
    {
        $milkTeaFactory = new MilkTeaFactory();
        $milkTeaFactory->makeTea()->setDrink('Pearl Milk Tea')
            ->setSugarLevel(1)
            ->setIceLevel('Less Ice');
    }
}