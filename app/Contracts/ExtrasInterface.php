<?php declare(strict_types=1);

namespace App\Contracts;

use app\Items\Item;

interface ExtrasInterface
{
    /**
     * Возвращает максимальное количество дополниний, которые может иметь электронный элемент.
     * 0 или число < 0 - дополнений не может быть.
     * Число > 0 - максимальное количество дополнений.
     * false - количество дополнений не ограничено.
     *
     * @return int|false
     */
    public function maxExtras(): int|false;

    public function addExtra(Item $extra): void;
}
