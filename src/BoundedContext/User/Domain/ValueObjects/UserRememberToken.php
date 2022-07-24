<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\ValueObject;

final class UserRememberToken extends ValueObject
{
    public function __construct(mixed $value)
    {
        parent::__construct($value);
    }
}
