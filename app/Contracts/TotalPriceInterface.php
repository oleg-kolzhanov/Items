<?php declare(strict_types=1);

namespace App\Contracts;

use app\Items\Item;

/**
 * Интерфейс подсчета общей стоимости.
 */
interface TotalPriceInterface
{
    /**
     * Возвращает общую стоимость.
     *
     * @return float
     */
    public function getTotalPrice(): float;
}
