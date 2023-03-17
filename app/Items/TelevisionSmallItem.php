<?php declare(strict_types=1);

namespace App\Items;

class TelevisionSmallItem extends BaseTelevisionItem
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrice(1000);
    }
}