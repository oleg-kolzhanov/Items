<?php declare(strict_types=1);

namespace App\Items;

use App\Types\ControllerType;

class ControllerItem extends Item
{
    public function __construct()
    {
        $this->setPrice(400)
            ->setType(new ControllerType())
            ->setWired(true);
    }
}