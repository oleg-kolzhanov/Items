<?php declare(strict_types=1);

namespace App\Items;

class TelevisionBigItem extends BaseTelevisionItem
{
    public function __construct()
    {
        parent::__construct();

        $this->setPrice(2000);
    }
}