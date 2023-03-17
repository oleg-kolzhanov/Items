<?php declare(strict_types=1);

namespace app\Items;

use App\Exceptions\MaxExtrasException;
use App\Types\TelevisionType;

class BaseTelevisionItem extends ItemWithExtras
{
    protected int|false $maxExtras = false;

    /**
     * @throws MaxExtrasException
     */
    public function __construct()
    {
        $this->setType(new TelevisionType())
            ->setWired(true);

        $controller1 = new ControllerItem();
        $controller2 = new ControllerItem();
        $this->addExtra($controller1);
        $this->addExtra($controller2);
    }
}