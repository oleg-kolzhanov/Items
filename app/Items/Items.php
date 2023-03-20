<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\ListInterface;
use App\Contracts\PriceInterface;
use App\Traits\Listable;
use App\Types\Type;
use App\Types\Types;

/**
 * Список электронных элементов.
 */
class Items implements ListInterface, PriceInterface
{
    use Listable;

    /**
     * @param Item[] $list Электронные элементы
     */
    private array $list;

    /**
     * @param Types $types Список типов
     */
    private Types $types;

    /**
     * Конструктор.
     *
     * @param Item[] $list
     */
    public function __construct(array $items = [])
    {
        $this->list = $items;
        $this->types = new Types;

        foreach ($this->list as $item) {
            $this->types->add($item->getType());
        }
    }

    /**
     * Добавляет электронный элемент в список.
     *
     * @param Item $item Электронный элемент
     * @return void
     */
    public function add(Item $item): void
    {
        $this->list[] = $item;
        $this->types->add($item->getType());
    }

    /**
     * Возвращает отсортировнный список электронных элементов.
     */
    public function getSortedItems(): Items
    {
        $sorted = array();
        /** @var Item $item */
        foreach ($this->list as $item) {
            $sorted[($item->getIntPrice())] = $item;
        }
        ksort($sorted, SORT_NUMERIC);

        return new Items(array_values($sorted), $this->types);
    }

    /**
     * Возвращает отфильтрованный по определенному типу список электронных элементов.
     *
     * @param Type $type Тип
     * @return Items
     */
    public function getItemsByType(Type $type): Items
    {
        if (!$this->types->has($type)) {
            return new Items([], $this->types);
        }

        $callback = function ($item) use ($type) {
            return $item->type == $type;
        };
        $items = array_filter($this->list, $callback);

        return new Items($items, $this->types);
    }

    /**
     * Возвращает полную стоимость электронного элемента со всеми дополнениями.
     *
     * @return float
     */
    public function getPrice(): float
    {
        $price = 0;

        foreach ($this->list as $item) {
            $price += $item->getPrice();
        }

        return $price;
    }
}