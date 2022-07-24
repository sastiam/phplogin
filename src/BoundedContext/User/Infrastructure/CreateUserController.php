<?php

namespace Src\BoundedContext\User\Infrastructure;

use EndyJasmi\Cuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Src\BoundedContext\User\Application\CreateUserUseCase;
use Src\BoundedContext\User\Application\GetUserByIdUseCase;
use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Infrastructure\Repositories\EloquentUserRepository;

class CreateUserController
{
    private EloquentUserRepository $repository;

    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request): ?User
    {
        $userId                = Cuid::slug();
        $userName              = $request->input('name');
        $userEmail             = $request->input('email');
        $userEmailVerifiedDate = null;
        $userPassword          = Hash::make($request->input('password'));
        $userRememberToken     = null;

        $createUserUseCase = new CreateUserUseCase($this->repository);
        $createUserUseCase->__invoke(
            $userId,
            $userName,
            $userEmail,
            $userEmailVerifiedDate,
            $userPassword,
            $userRememberToken
        );

        $getUserByIdUseCase = new GetUserByIdUseCase($this->repository);

        return $getUserByIdUseCase->__invoke($userId);
    }

}
