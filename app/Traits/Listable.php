<?php declare(strict_types=1);

namespace App\Traits;

use Traversable;

trait Listable
{
    public function getIterator(): Traversable
    {
        foreach ($this->list as $item) {
            yield $item;
        }
    }

    public function asArray(): array
    {
        return $this->list;
    }

    public function count(): int
    {
        return count($this->asArray());
    }

}
