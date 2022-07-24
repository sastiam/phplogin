<?php

namespace Src\BoundedContext\User\Domain\Contracts;

use Src\BoundedContext\User\Domain\User;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserName;
use Src\Shared\Domain\Contracts\DeleteRepositoryContractInterface;
use Src\Shared\Domain\Contracts\FindRepositoryContractInterface;
use Src\Shared\Domain\Contracts\StoreRepositoryContractInterface;
use Src\Shared\Domain\Contracts\UpdateRepositoryContractInterface;

interface UserRepositoryContract extends FindRepositoryContractInterface, StoreRepositoryContractInterface, UpdateRepositoryContractInterface, DeleteRepositoryContractInterface
{
    public function findByCriteria(UserName $userName, UserEmail $userEmail): ?User;
}
