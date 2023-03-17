<?php declare(strict_types=1);

namespace App\Contracts;

use Traversable;

interface ListInterface
{
    public function getIterator(): Traversable;

    public function asArray(): array;

    public function count(): int;
}
