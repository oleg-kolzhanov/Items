<?php declare(strict_types=1);

namespace App\Items;

use App\Types\ConsoleType;

class ConsoleItem extends ItemWithExtras
{
    protected int $maxExtras = 4;

    public function __construct()
    {
        $this->setPrice(100)
            ->setType(new ConsoleType())
            ->setWired(true);
    }
}