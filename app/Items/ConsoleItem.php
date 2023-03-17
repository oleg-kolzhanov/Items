<?php declare(strict_types=1);

namespace App\Items;

use App\Exceptions\MaxExtrasException;
use App\Types\ConsoleType;

class ConsoleItem extends ItemWithExtras
{
    protected int|false $maxExtras = 4;

    /**
     * @throws MaxExtrasException
     */
    public function __construct()
    {
        $this->setPrice(100)
            ->setType(new ConsoleType())
            ->setWired(true);

        $remote1 = new RemoteItem();
        $remote2 = new RemoteItem();
        $controller1 = new ControllerItem();
        $controller2 = new ControllerItem();

        $this->addExtra($remote1);
        $this->addExtra($remote2);
        $this->addExtra($controller1);
        $this->addExtra($controller2);

    }
}