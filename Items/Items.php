<?php declare(strict_types=1);

namespace App\Items;

use App\Types\Type;
use App\Types\Types;

class Items extends Item
{
    public function __construct(
        private array $items,
        private Types $types,
    )
    {
    }

    /**
     * Returns the items depending on the sorting type requested
     */
    public function getSortedItems(Type $type): bool
    {
        $sorted = array();
        foreach ($this->items as $item) {
            $sorted[($item->price * 100)] = $item;
        }
        return ksort($sorted, SORT_NUMERIC);
    }

    public function getItemsByType($type): Items
    {
        if (!$this->types->hasType($type)) {
            return new Items([], $this->types);
        }

        $callback = function ($item) use ($type) {
            return $item->type == $type;
        };
        $items = array_filter($this->items, $callback);

        return new Items($items, $this->types);
    }
}