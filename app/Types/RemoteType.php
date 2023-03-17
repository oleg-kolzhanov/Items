<?php declare(strict_types=1);

namespace App\Types;
class RemoteType extends Type
{
    public function __construct() {
        $this->value = 'remote';
    }
}
