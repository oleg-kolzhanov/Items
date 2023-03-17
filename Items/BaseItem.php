<?php declare(strict_types=1);

namespace app\Items;

use App\Items;

/**
 *
 */
class BaseItem
{
    /**
     * @var float
     */
    public float $price;

    /**
     * @var Type
     */
    private Type $type;

    /**
     * @var bool
     */
    public bool $wired;

    /**
     * @return float
     */
    function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return Type
     */
    function getType(): Type
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    function getWired(): bool
    {
        return $this->wired;
    }

    /**
     * @param float $price
     * @return $this
     */
    function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param Type $type
     * @return $this
     */
    function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param bool $wired
     * @return $this
     */
    function setWired(bool $wired): self
    {
        $this->wired = $wired;
        return $this;
    }
}