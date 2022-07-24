<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;
use Src\BoundedContext\User\Infrastructure\FindUserByIdController as InfrastructureFindUserByIdController;

class FindUserByIdController extends Controller
{
    private InfrastructureFindUserByIdController $findUserByIdController;

    public function __construct(InfrastructureFindUserByIdController $findUserByIdController)
    {
        $this->findUserByIdController = $findUserByIdController;
    }

    public function __invoke(Request $request) : Response|ResponseFactory
    {
        $findUser = new UserResource($this->findUserByIdController->__invoke($request));

        return response($findUser, 201);
    }
}
