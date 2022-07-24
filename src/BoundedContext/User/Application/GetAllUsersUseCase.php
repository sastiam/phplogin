<?php

namespace Src\BoundedContext\User\Application;

use Illuminate\Support\Collection;
use Src\BoundedContext\User\Domain\Contracts\UserRepositoryContract;

class GetAllUsersUseCase
{
    private UserRepositoryContract $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke() : Collection
    {
        return $this->repository->findAll();
    }
}
