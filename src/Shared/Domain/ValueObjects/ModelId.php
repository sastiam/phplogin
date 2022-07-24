<?php

namespace Src\Shared\Domain\ValueObjects;

use InvalidArgumentException;

class ModelId extends ValueObject implements ObjectValidateInterface
{

    private string $value;

    public function __construct(string $value)
    {
        $this->validate($value);
        parent::__construct($value);
    }

    public function validate($value): void
    {
        if (empty($value)) {
            throw new InvalidArgumentException(
                sprintf('invalid value <%s>.', $value)
            );
        }
    }
}
