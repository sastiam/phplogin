<?php

namespace Src\BoundedContext\User\Application;

use Src\BoundedContext\User\Domain\Contracts\UserRepositoryContract;
use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserName;

class GetUserByCriteriaUseCase
{
    private UserRepositoryContract $repository;
    /**
     * @param UserRepositoryContract $repository
     */
    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $userName, string $userEmail) : ?User
    {
        $name  = new UserName($userName);
        $email = new UserEmail($userEmail);

        return $this->repository->findByCriteria($name, $email);
    }
}
