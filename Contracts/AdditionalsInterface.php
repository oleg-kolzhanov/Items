<?php declare(strict_types=1);

namespace App\Contracts;

interface AdditionalsInterface
{
    /**
     * Возвращает максимальное количество дополниний, которые может иметь электронный элемент.
     *
     * @return int
     */
    public function maxExtras(): int;
}
