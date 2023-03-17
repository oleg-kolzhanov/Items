<?php declare(strict_types=1);

namespace App\Types;
class Type
{
    /**
     * @var string Значение типа.
     */
    protected string $value;

    /*
     * Возвращает значение типа.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
