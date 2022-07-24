<?php

declare(strict_types = 1);

namespace Src\BoundedContext\User\Domain\ValueObjects;

use DateTime;
use Src\Shared\Domain\ValueObjects\ValueObject;

final class UserEmailVerifiedAt extends ValueObject
{

    public function __construct(?DateTime $value)
    {
        parent::__construct($value);
    }
}
