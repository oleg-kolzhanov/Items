<?php declare(strict_types=1);

namespace App;

use App\Items\ConsoleItem;
use app\Items\ControllerItem;
use App\Items\Items;
use app\Items\MicrowaveItem;
use app\Items\TelevisionBigItem;
use app\Items\TelevisionSmallItem;
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

        $consoleItem = new ConsoleItem();
        $televisionBigItem = new TelevisionBigItem();
        $televisionSmallItem = new TelevisionSmallItem();
        $microwaveItem = new MicrowaveItem();

        /*
         * Создайте сценарий, в котором человек покупает:
         * 1 консоль, 2 телевизора с разными ценами и 1 микроволновую печь
         * У консоли и телевизоров есть дополнения; эти дополнения - контроллеры. У
         * консоли есть 2 пульта дистанционного управления и 2 проводных контроллера. У
         * телевизора №1 есть 2 пульта дистанционного управления, а у телевизора №2 - 1
         * пульт.
         */
        $purchases = new Items(
            [
                $consoleItem,
                $televisionBigItem,
                $televisionSmallItem,
                $microwaveItem,
            ],
            $types
        );
        var_dump($purchases);

        /*
         * Отсортируйте товары по цене и выведите общую цену.
         */
        $sorted = $purchases->getSortedItems();

        $consolePrice = $consoleItem->getTotalPrice();
    }
}


