<?php declare(strict_types=1);

namespace App\Items;

use App\Types\RemoteType;

class RemoteItem extends Item
{
    public function __construct()
    {
        $this->setPrice(600)
            ->setType(new RemoteType())
            ->setWired(false);
    }
}