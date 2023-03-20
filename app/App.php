<?php declare(strict_types=1);

namespace App;

use App\Items\ConsoleItem;
use App\Items\Items;
use App\Items\MicrowaveItem;
use App\Items\TelevisionBigItem;
use App\Items\TelevisionSmallItem;

/**
 * Приложение.
 */
class App
{
    /**
     * Метод по умолчанию.
     *
     * @return void
     */
    public function __invoke(): void
    {
        $consoleItem = new ConsoleItem;
        $televisionBigItem = new TelevisionBigItem;
        $televisionSmallItem = new TelevisionSmallItem;
        $microwaveItem = new MicrowaveItem;

        /*
         * Создайте сценарий, в котором человек покупает:
         * 1 консоль, 2 телевизора с разными ценами и 1 микроволновую печь
         * У консоли и телевизоров есть дополнения; эти дополнения - контроллеры. У
         * консоли есть 2 пульта дистанционного управления и 2 проводных контроллера. У
         * телевизора №1 есть 2 пульта дистанционного управления, а у телевизора №2 - 1
         * пульт.
         */
        $purchases = new Items([
            $consoleItem,
            $televisionBigItem,
            $televisionSmallItem,
            $microwaveItem,
        ]);
        $this->print('PURCHASED', $purchases);

        /*
         * Отсортируйте товары по цене.
         */
        $sorted = $purchases->getSortedItems();
        $this->print('SORTED', $sorted);

        /*
         * Выведите общую цену.
         */
        $totalPrice = $purchases->getTotalPrice();
        $this->print('TOTAL PRICE', $totalPrice);

        /*
         * Друг этого человека увидел ее с новой покупкой и спросил, во сколько
         * ей обошлась консоль и контроллеры. Дайте ответ.
         */
        $consolePrice = $consoleItem->getTotalPrice();
        $this->print('CONSOLE PRICE', $consolePrice);
    }

    /**
     * Выводит данные.
     *
     * @param string $title Заголовок
     * @param mixed $data Данные
     * @return void
     */
    private function print(
        string $title,
        mixed $data
    ): void
    {
        print "\n\n";
        $this->printTitle($title);
        print_r($data);
        print "\n\n";
    }

    /**
     * Выводит заголовок.
     *
     * @param string $title Заголовок
     * @return void
     */
    public function printTitle(string $title): void
    {
        $row = str_repeat(string: "=", times: strlen($title));
        print $row;
        print "\n";
        print $title;
        print "\n";
        print $row;
        print "\n\n";
    }
}


