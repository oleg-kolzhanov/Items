<?php declare(strict_types=1);

namespace App\Items;

use App\Types\ControllerType;

/**
 * Контроллер.
 */
class ControllerItem extends Item
{
    /**
     * Конструктор.
     */
    public function __construct()
    {
        $this->setPrice(400)
            ->setType(new ControllerType())
            ->setWired(true);
    }
}