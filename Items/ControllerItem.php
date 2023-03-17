<?php declare(strict_types=1);

namespace app\Items;

use App\Types\MicrowaveType;

class ControllerItem extends ItemWithExtras
{
    public function __construct()
    {
        $this->setPrice(400)
            ->setType(new MicrowaveType())
            ->setWired(true);
    }
}