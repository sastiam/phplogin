<?php

namespace Src\BoundedContext\User\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\User\Application\GetAllUsersUseCase;
use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Infrastructure\Repositories\EloquentUserRepository;

class FindAllUsersController
{
    private EloquentUserRepository $repository;

    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $getAllUsersUseCase = new GetAllUsersUseCase($this->repository);

        return $getAllUsersUseCase->__invoke();
    }
}