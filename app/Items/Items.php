<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\ListInterface;
use App\Contracts\TotalPriceInterface;
use App\Traits\Listable;
use App\Types\Types;

class Items implements ListInterface, TotalPriceInterface
{
    use Listable;

    /**
     * @param Item[] $list
     * @param Types $types
     */
    public function __construct(
        private array $list,
        private Types $types,
    )
    {
    }

    /**
     * Returns the items depending on the sorting type requested
     */
    public function getSortedItems(): Items
    {
        $sorted = array();
        foreach ($this->list as $item) {
            $sorted[($item->getIntPrice())] = $item;
        }
        ksort($sorted, SORT_NUMERIC);

        return new Items(array_values($sorted), $this->types);
    }

    public function getItemsByType($type): Items
    {
        if (!$this->types->hasType($type)) {
            return new Items([], $this->types);
        }

        $callback = function ($item) use ($type) {
            return $item->type == $type;
        };
        $items = array_filter($this->list, $callback);

        return new Items($items, $this->types);
    }

    public function getTotalPrice(): float
    {
        $price = 0;

        foreach ($this->list as $item) {
            $price += $item->getTotalPrice();
        }

        return $price;
    }
}