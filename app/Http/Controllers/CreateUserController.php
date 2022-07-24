<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;
use Src\BoundedContext\User\Infrastructure\CreateUserController as CreateUserControllerInfra;

class CreateUserController extends Controller
{
    private CreateUserControllerInfra $createUserController;

    public function __construct(CreateUserControllerInfra $createUserController)
    {
        $this->createUserController = $createUserController;
    }

    public function __invoke(Request $request): Response|ResponseFactory
    {
        $newUser = new UserResource($this->createUserController->__invoke($request));

        return response($newUser, 201);
    }
}
