<?php declare(strict_types=1);

namespace App\Traits;

use Traversable;

/**
 * Трейт списков.
 */
trait Listable
{
    /**
     * Возвращает итератор.
     *
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        foreach ($this->list as $item) {
            yield $item;
        }
    }

    /**
     * Возвращает список в виде массива.
     *
     * @return array
     */
    public function asArray(): array
    {
        return $this->list;
    }

    /**
     * Возвравщает количество элементов списка.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->asArray());
    }

}
