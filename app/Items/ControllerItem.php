<?php declare(strict_types=1);

namespace app\Items;

use App\Types\ControllerType;

class ControllerItem extends ItemWithExtras
{
    public function __construct()
    {
        $this->setPrice(400)
            ->setType(new ControllerType())
            ->setWired(true);
    }
}