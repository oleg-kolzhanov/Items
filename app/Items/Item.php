<?php declare(strict_types=1);

namespace App\Items;

use App\Contracts\PriceInterface;
use App\Types\Type;

/**
 * Электронный элемент.
 */
class Item implements PriceInterface
{
    /**
     * @var float Цена
     */
    public float $price;

    /**
     * @var Type Тип
     */
    private Type $type;

    /**
     * @var bool Признак проводного элемента
     */
    public bool $wired;

    /**
     * Возвращает стоимость элемента.
     *
     * @return float
     */
    function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Возвращает тип элемента.
     *
     * @return Type
     */
    function getType(): Type
    {
        return $this->type;
    }

    /**
     * Проверяет, является ли электронный элемент проводным.
     *
     * @return bool
     */
    function isWired(): bool
    {
        return $this->wired;
    }

    /**
     * Устанавливает цену.
     *
     * @param float $price Цена
     * @return $this
     */
    function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Устанавливает тип.
     *
     * @param Type $type Тип
     * @return $this
     */
    function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Устанавливает признак проводного электронного элемента.
     *
     * @param bool $wired Признак проводного электронного элемента.
     * @return $this
     */
    function setWired(bool $wired): self
    {
        $this->wired = $wired;
        return $this;
    }

    /**
     * Возвращает целочисленную стоимость в копейках.
     *
     * @return int
     */
    public function getIntPrice(): int
    {
        return (int) ($this->getPrice() * 100);
    }
}