<?php

namespace Src\BoundedContext\User\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\User\Application\GetUserByIdUseCase;
use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Infrastructure\Repositories\EloquentUserRepository;

class FindUserByIdController
{
    private EloquentUserRepository $repository;

    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request): ?User
    {
        $userId = $request->user_id;

        $getUserByIdUseCase = new GetUserByIdUseCase($this->repository);

        return $getUserByIdUseCase->__invoke($userId);
    }
}