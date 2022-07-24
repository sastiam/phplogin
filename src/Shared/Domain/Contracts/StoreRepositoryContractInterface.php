<?php

namespace Src\Shared\Domain\Contracts;

use Src\Shared\Domain\Model;
use Src\Shared\Domain\ModelInterface;

interface StoreRepositoryContractInterface
{
    public function save(Model $model) : void;
}
