<?php

namespace CodeException\MyExceptions;

use Throwable;

class MyCustomException extends \Exception
{
    /**
     * MyCustomException constructor.
     */
    public function __construct($message = "Minha Mensagem customizada", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}