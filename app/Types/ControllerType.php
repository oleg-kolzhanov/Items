<?php declare(strict_types=1);

namespace App\Types;
class ControllerType extends Type
{
    public function __construct() {
        $this->value = 'controller';
    }
}
