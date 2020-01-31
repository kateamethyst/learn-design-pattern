<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\Drinks;

class MilkTea
{
    /**
     * Name of chosen milktea drink
     *
     * @var string
     */
    protected $drink = 'Milktea';

    /**
     * Serve Drink
     *
     * @return Array
     */
    public function serveDrink(): string
    {
        return 'Serve ' . $this->drink;
    }
}