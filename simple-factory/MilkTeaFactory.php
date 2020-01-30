<?php 

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\MilkTea;

class MilkTeaFactory
{
    /**
     * Make tea
     *
     * @return MilkTea
     */
    public function makeTea(): MilkTea
    {
        return new MilkTea();
    }
}