<?php declare(strict_types=1);

namespace app\Items;

use App\Types\RemoteType;

class RemoteItem extends ItemWithExtras
{
    public function __construct()
    {
        $this->setPrice(600)
            ->setType(new RemoteType())
            ->setWired(false);
    }
}