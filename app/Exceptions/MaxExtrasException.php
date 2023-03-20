<?php declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use Throwable;

/**
 * Исключение превышения максимального количества дополнений.
 */
class MaxExtrasException extends Exception
{
    /**
     * Конструктор.
     *
     * @param string $message Сообщение ошибки
     * @param int $code Код ошибки
     * @param Throwable|null $previous Предыдущее исключение
     */
    public function __construct(
        string $message,
        int $code = 0,
        Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Преобразовывает объект в строку.
     *
     * @return string
     */
    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}