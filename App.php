<?php declare(strict_types=1);

namespace App;

use App\Items\Item;
use App\Items\Items;
use App\Types\ConsoleType;
use App\Types\MicrowaveType;
use App\Types\TelevisionType;
use App\Types\Types;

class App
{
    public function __invoke(): void
    {
        $televisionType = new TelevisionType();
        $consoleType = new ConsoleType();
        $microwaveType = new MicrowaveType();

        $types = new Types([
            $televisionType,
            $consoleType,
            $microwaveType,
        ]);


        $consoleItem = new Item();
        $consoleItem
            ->setPrice(100)
            ->setType($consoleType)
            ->setWired(true);

        $tvItem = new Item();
        $tvItem
            ->setPrice(100)
            ->setType($consoleType)
            ->setWired(true);

        $microwaveItem = new Item();
        $microwaveItem
            ->setPrice(100)
            ->setType($consoleType)
            ->setWired(true);

        $controllerItem = new Item();
        $controllerItem
            ->setPrice(100)
            ->setType($consoleType)
            ->setWired(false);

        $items = new Items(
            [
                $consoleItem,
                $tvItem,
                $microwaveItem,
                $controllerItem,
            ],
            $types
        );
    }
}


