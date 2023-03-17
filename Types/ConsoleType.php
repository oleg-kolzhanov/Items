<?php declare(strict_types=1);

namespace App\Types;
class ConsoleType extends Type
{
    public function __construct() {
        $this->value = 'console';
    }
}
