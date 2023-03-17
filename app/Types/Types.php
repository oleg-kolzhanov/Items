<?php declare(strict_types=1);

namespace App\Types;

use App\Contracts\ListInterface;
use App\Traits\Listable;

class Types implements ListInterface
{
    use Listable;

    /**
     * @param Type[] $list
     */
    public function __construct(
        private array $list,
    )
    {
    }

    public function hasType(Type $type): bool
    {
        foreach ($this->list as $value) {
            if ($type == $value) {
                return true;
            };
        }
        return false;
    }
}
