<?php declare(strict_types=1);

namespace App\Items;

use App\Types\MicrowaveType;

class MicrowaveItem extends ItemWithExtras
{
    public function __construct()
    {
        parent::__construct();

        $this->setPrice(400)
            ->setType(new MicrowaveType())
            ->setWired(true);
    }
}