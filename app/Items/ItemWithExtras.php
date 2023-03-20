<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\ExtrasInterface;
use App\Contracts\TotalPriceInterface;
use App\Exceptions\MaxExtrasException;
use App\Types\Types;

/**
 * Электронный элемент с дополнениями.
 */
class ItemWithExtras extends Item implements ExtrasInterface, TotalPriceInterface
{
    /**
     * @var int|false Максимальное количество дополнений.
     */
    protected int|false $maxExtras = 0;

    protected Items $extras;

    /**
     * Конструктор.
     */
    public function __construct(
    )
    {
        $this->extras = new Items;
    }

    /**
     * Возвращает максимальное количество дополниний, которые может иметь электронный элемент.
     *
     * 0 или число < 0 - дополнений не может быть.
     * Число > 0 - максимальное количество дополнений.
     * false - количество дополнений не ограничено.
     *
     * @return int|false
     */
    public function maxExtras(): int|false
    {
        return $this->maxExtras;
    }

    /**
     * Добавляет электронному элементу дополнение.
     *
     * @param Item $extra Дополнение
     * @throws MaxExtrasException Исключение превышения максимального количества дополнений.
     * @return void
     */
    public function addExtra(Item $extra): void
    {
        $this->assertCanAddExtra();
        $this->extras->add($extra);
    }

    /**
     * Утверждает, что в электронный элемент можно добавить дополнение.
     *
     * @throws MaxExtrasException Исключение превышения максимального количества дополнений.
     * @return void
     */
    private function assertCanAddExtra(): void
    {
        if (!$this->canAddExtras()) {
            throw new MaxExtrasException('Максимальное количество дополнений достигнуто');
        }
    }

    /**
     * Проверяет, что в электронный элемент можно добавить дополнение.
     *
     * @return bool
     */
    private function canAddExtras(): bool
    {
        $max = $this->maxExtras();
        $count = $this->extras->count();

        return ($max === false) || ($max > 0 && $count < $max);
    }

    /**
     * Возвращает общую стоимость электронного элемента со всеми дополнениями.
     *
     * @return float
     */
    public function getTotalPrice(): float
    {
        $price = $this->getPrice();

        foreach ($this->extras as $extra) {
            $price += $extra->getPrice();
        }

        return $price;
    }
}