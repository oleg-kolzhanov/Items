<?php declare(strict_types=1);

namespace App;
use app\Types\Type;

class ElectronicItem
{
    /**
     * @var float
     */
    public float $price;

    /**
     * @var Type
     */
    private Type $type;

    public bool $wired;

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    private static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION
    );

    function getPrice(): float
    {
        return $this->price;
    }

    function getType(): Type
    {
        return $this->type;
    }

    function getWired(): bool
    {
        return $this->wired;
    }

    function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }

    function setType($type): self
    {
        $this->type = $type;
        return $this;
    }

    function setWired($wired): self
    {
        $this->wired = $wired;
        return $this;
    }
}