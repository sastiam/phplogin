<?php

namespace Src\BoundedContext\User\Infrastructure\Repositories;

use App\Models\User as EloquentUserModel;
use Illuminate\Support\Collection;
use Src\BoundedContext\User\Domain\Contracts\UserRepositoryContract;
use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Domain\UserFactory;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserName;
use Src\Shared\Domain\Model;
use Src\Shared\Domain\ValueObjects\ModelId;

class EloquentUserRepository implements UserRepositoryContract
{

    public function delete(ModelId $id): void
    {
        // TODO: Implement delete() method.
    }

    public function findAll() : Collection
    {
        /**
         * @var \Illuminate\Database\Eloquent\Collection $users
         */
        $users = EloquentUserModel::all();

        return $users->map(function ($user) {
            return UserFactory::create(
                $user->user_id,
                $user->name,
                $user->email,
                $user->email_verified_at,
                $user->password,
                $user->remember_token
            );
        }); 
    }

    public function find(ModelId $id): ?Model
    {
        /**
         * @var \Illuminate\Database\Eloquent\Model $user
         */
        $user = EloquentUserModel::findOrFail($id->value());

        return UserFactory::create(
            $user->user_id,
            $user->name,
            $user->email,
            $user->email_verified_at,
            $user->password,
            $user->remember_token
        );
    }

    public function findByCriteria(UserName $userName, UserEmail $userEmail): ?User
    {
        $user = EloquentUserModel::where('name', $userName->value())
                                ->where('email',  $userEmail->value())
                                ->firstOrFail();

        return UserFactory::create(
            $user->user_id,
            $user->name,
            $user->email,
            $user->email_verified_at,
            $user->password,
            $user->remember_token
        );
    }

    /**
     * @param User $model
     */
    public function save(Model $model): void
    {

        $data = [
            'user_id' => $model->id()->value(),
            'name' => $model->name()->value(),
            'email' => $model->email()->value(),
            'email_verified_at' => $model->emailVerifiedAt()->value(),
            'password' => $model->password()->value(),
            'remember_token' => $model->rememberToken()->value()
        ];

        EloquentUserModel::create($data);
    }

    public function update(Model $model): void
    {
        // TODO: Implement update() method.
    }




}
