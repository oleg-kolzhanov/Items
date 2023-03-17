<?php declare(strict_types=1);

namespace app\Items;

use App\Types\TelevisionType;

class TelevisionItem extends ItemWithExtras
{
    protected int $maxExtras = 4;

    public function __construct()
    {
        $this->setPrice(1000)
            ->setType(new TelevisionType())
            ->setWired(true);
    }
}