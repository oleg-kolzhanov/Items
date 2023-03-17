<?php declare(strict_types=1);

namespace app\Items;

use App\Types\TelevisionType;

class TelevisionSmallItem extends BaseTelevisionItem
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrice(1000);
    }
}