<?php

declare(strict_types = 1);


namespace Src\BoundedContext\User\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\ValueObject;

final class UserName extends ValueObject
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

}
