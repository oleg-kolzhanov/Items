<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\ExtrasInterface;

class ItemWithExtras extends Item implements ExtrasInterface
{
    protected int|false $maxExtras = 0;

    protected Items $extras;

    public function maxExtras(): int|false
    {
        return $this->maxExtras;
    }

    public function addExtras(Item $item): int
    {
        $this->extras[] = $item;
        return $this->maxExtras;
    }
}