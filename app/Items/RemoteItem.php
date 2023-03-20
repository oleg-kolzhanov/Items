<?php declare(strict_types=1);

namespace App\Items;

use App\Types\RemoteType;

/**
 * Пульт дистанционного управления.
 */
class RemoteItem extends Item
{
    /**
     * Конструктор.
     */
    public function __construct()
    {
        $this->setPrice(600)
            ->setType(new RemoteType())
            ->setWired(false);
    }
}