<?php declare(strict_types=1);

namespace App\Contracts;

use app\Items\Item;

interface TotalPriceInterface
{
    public function getTotalPrice(): float;
}
