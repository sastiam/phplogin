<?php

namespace Src\Shared\Domain\ValueObjects;

abstract class ValueObject implements ObjectInterface
{
    private mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
