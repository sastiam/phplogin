<?php

declare(strict_types = 1);

namespace Src\BoundedContext\User\Domain;

use Src\BoundedContext\User\Domain\ValueObjects\UserId;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmailVerifiedAt;
use Src\BoundedContext\User\Domain\ValueObjects\UserName;
use Src\BoundedContext\User\Domain\ValueObjects\UserPassword;
use Src\BoundedContext\User\Domain\ValueObjects\UserRememberToken;
use Src\Shared\Domain\Model;

final class User extends Model
{
    private UserId $id;
    private UserName $name;
    private UserEmail $email;
    private UserEmailVerifiedAt $emailVerifiedAt;
    private UserPassword $password;
    private UserRememberToken $rememberToken;

    /**
     * @param UserId $id
     * @param UserName $name
     * @param UserEmail $email
     * @param UserEmailVerifiedAt $emailVerifiedAt
     * @param UserPassword $password
     * @param UserRememberToken $rememberToken
     */
    public function __construct(UserId $id, UserName $name, UserEmail $email, UserEmailVerifiedAt $emailVerifiedAt, UserPassword $password, UserRememberToken $rememberToken)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->emailVerifiedAt = $emailVerifiedAt;
        $this->password = $password;
        $this->rememberToken = $rememberToken;
    }

    public function id() : UserId
    {
        return $this->id;
    }

    /**
     * @return UserName
     */
    public function name(): UserName
    {
        return $this->name;
    }

    /**
     * @return UserEmail
     */
    public function email(): UserEmail
    {
        return $this->email;
    }

    /**
     * @return UserEmailVerifiedAt
     */
    public function emailVerifiedAt(): UserEmailVerifiedAt
    {
        return $this->emailVerifiedAt;
    }

    /**
     * @return UserPassword
     */
    public function password(): UserPassword
    {
        return $this->password;
    }

    /**
     * @return UserRememberToken
     */
    public function rememberToken(): UserRememberToken
    {
        return $this->rememberToken;
    }


}
