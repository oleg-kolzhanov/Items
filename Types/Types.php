<?php declare(strict_types=1);

namespace App\Types;

use Traversable;

class Types
{
    /**
     * @param Type[] $types
     */
    public function __construct(
        private array $types,
    )
    {
    }


    public function getIterator(): Traversable
    {
        foreach ($this->types as $item) {
            yield $item;
        }
    }

    public function asArray(): array
    {
        return $this->types;
    }

    public function hasType(Type $type): bool
    {
        /** @var Type $type */
        foreach ($this->types as $value) {
            if ($type == $value) {
                return true;
            };
        }
        return false;
    }
}
