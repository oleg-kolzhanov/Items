<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\ExtrasInterface;
use App\Contracts\TotalPriceInterface;
use App\Exceptions\MaxExtrasException;

class ItemWithExtras extends Item implements ExtrasInterface, TotalPriceInterface
{
    protected int|false $maxExtras = 0;

    protected Items $extras;

    public function maxExtras(): int|false
    {
        return $this->maxExtras;
    }

    /**
     * @param Item $extra
     * @return void
     * @throws MaxExtrasException
     */
    public function addExtra(Item $extra): void
    {
        $this->assertCanAddExtra();
        $this->extras[] = $extra;
    }

    /**
     * @return void
     * @throws MaxExtrasException
     */
    private function assertCanAddExtra(): void
    {
        if (!$this->canAddExtras()) {
            throw new MaxExtrasException('Максимальное количество дополнений достигнуто');
        }
    }

    private function canAddExtras(): bool
    {
        $max = $this->maxExtras();
        $count = $this->extras->count();

        return ($max === false) || ($max > 0 && $count < $max);
    }

    public function getTotalPrice(): float
    {
        $price = $this->getPrice();

        foreach ($this->extras as $extra) {
            $price += $extra->getPrice();
        }

        return $price;
    }
}