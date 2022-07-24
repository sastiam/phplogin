<?php

namespace Src\BoundedContext\User\Domain;

use DateTime;
use Src\BoundedContext\User\Domain\ValueObjects\UserId;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmailVerifiedAt;
use Src\BoundedContext\User\Domain\ValueObjects\UserName;
use Src\BoundedContext\User\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\User\Domain\ValueObjects\UserRememberToken;

class UserFactory
{
    public static function create(
        string $id,
        string $name,
        string $email,
        ?DateTime $emailVerifiedAt,
        string $password,
        ?string $rememberToken
    ) : User
    {
        return new User(
            new UserId($id),
            new UserName($name),
            new UserEmail($email),
            new UserEmailVerifiedAt($emailVerifiedAt),
            new UserPassword($password),
            new UserRememberToken($rememberToken)
        );
    }
}
