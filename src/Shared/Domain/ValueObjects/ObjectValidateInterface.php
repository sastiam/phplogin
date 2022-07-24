<?php

namespace Src\Shared\Domain\ValueObjects;

use InvalidArgumentException;

interface ObjectValidateInterface extends ObjectInterface
{

    /**
     * @param $value
     * @throws InvalidArgumentException
     * @return void
     */
    public function validate($value): void;
}
