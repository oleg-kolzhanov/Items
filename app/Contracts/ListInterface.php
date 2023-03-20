<?php declare(strict_types=1);

namespace App\Contracts;

use Traversable;

/**
 * Интерфейс списков.
 */
interface ListInterface
{
    /**
     * Возвращает итератор.
     *
     * @return Traversable
     */
    public function getIterator(): Traversable;

    /**
     * Возвращает список в виде массива.
     *
     * @return array
     */
    public function asArray(): array;

    /**
     * Возвращает количество элементов списка.
     *
     * @return int
     */
    public function count(): int;
}
