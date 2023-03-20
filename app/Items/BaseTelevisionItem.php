<?php declare(strict_types=1);

namespace App\Items;

use App\Exceptions\MaxExtrasException;
use App\Types\TelevisionType;

/**
 * Базовый элемент.
 */
class BaseTelevisionItem extends ItemWithExtras
{
    /**
     * @var int|false Максимальное количество дополнений.
     */
    protected int|false $maxExtras = false;

    /**
     * Конструктор.
     *
     * @throws MaxExtrasException Исключение превышения максимального количества дополнений.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setType(new TelevisionType())
            ->setWired(true);

        $controller1 = new ControllerItem();
        $controller2 = new ControllerItem();
        $this->addExtra($controller1);
        $this->addExtra($controller2);
    }
}