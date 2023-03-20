<?php declare(strict_types=1);

namespace App\Items;

use App\Exceptions\MaxExtrasException;

/**
 * Маленький телевизор.
 */
class TelevisionSmallItem extends BaseTelevisionItem
{
    /**
     * Конструктор.
     *
     * @throws MaxExtrasException Исключение превышения максимального количества дополнений.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setPrice(1000);

        $remote1 = new RemoteItem();
        $remote2 = new RemoteItem();
        $this->addExtra($remote1);
        $this->addExtra($remote2);
    }
}