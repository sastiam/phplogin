<?php

namespace Src\BoundedContext\User\Domain\ValueObjects;

use InvalidArgumentException;
use Src\Shared\Domain\ValueObjects\ObjectValidateInterface;
use Src\Shared\Domain\ValueObjects\ValueObject;

final class UserEmail extends ValueObject implements ObjectValidateInterface
{

    public function __construct(string $email)
    {
        $this->validate($email);
        parent::__construct($email);
    }

    public function validate($value): void
    {
        if (!filter_Var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf('invalid email: <%s>.', $value)
            );
        }
    }
}
