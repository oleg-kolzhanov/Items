<?php declare(strict_types=1);

namespace App\Types;

use Traversable;

class Types
{
    /**
     * @param Type[] $types
     */
    private array $types;

    public function __construct() {
        $this->types = [
            new TelevisionType(),
            new ConsoleType(),
            new MicrowaveType(),
        ]);
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
}
