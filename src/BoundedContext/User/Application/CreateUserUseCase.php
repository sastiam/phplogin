<?php

namespace Src\BoundedContext\User\Application;

use Src\BoundedContext\User\Domain\Contracts\UserRepositoryContract;
use Src\BoundedContext\User\Domain\UserFactory;

class CreateUserUseCase
{

    private UserRepositoryContract $repository;


    /**
     * @param UserRepositoryContract $repository
     */
    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
        string $userId,
        string $userName,
        string $userEmail,
        ?\DateTime $userEmailVerifiedDate,
        string $userPassword,
        ?string $userRememberToken
    ): void
    {

        $user = UserFactory::create($userId, $userName, $userEmail, $userEmailVerifiedDate, $userPassword, $userRememberToken);

        $this->repository->save($user);
    }
}
