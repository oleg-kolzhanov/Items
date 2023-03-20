<?php declare(strict_types=1);

namespace App\Contracts;

use app\Items\Item;

/**
 * Интерфейс стоимости.
 */
interface PriceInterface
{
    /**
     * Возвращает общую стоимость.
     *
     * @return float
     */
    public function getPrice(): float;
}
