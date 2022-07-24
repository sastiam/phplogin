<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResponseResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;
use Src\BoundedContext\User\Infrastructure\FindAllUsersController as InfrastructureFindAllUsersController;

class FindAllUsersController extends Controller
{
    private InfrastructureFindAllUsersController $findAllUsersController;

    public function __construct(InfrastructureFindAllUsersController $findAllUsersController)
    {
        $this->findAllUsersController = $findAllUsersController;
    }

    public function __invoke(Request $request) : Response|ResponseFactory
    {
        $findAllUsers = UserResource::collection($this->findAllUsersController->__invoke($request));

        return response([
            'data' => $findAllUsers
        ], 201);
    }
}