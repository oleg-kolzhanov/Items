<?php declare(strict_types=1);

namespace App\Items;

use App\Exceptions\MaxExtrasException;
use App\Types\TelevisionType;

/**
 * Базовый телевизор.
 */
class BaseTelevisionItem extends ItemWithExtras
{
    /**
     * @var int|false Максимальное количество дополнений.
     */
    protected int|false $maxExtras = false;

    /**
     * Конструктор.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setType(new TelevisionType())
            ->setWired(true);
    }
}