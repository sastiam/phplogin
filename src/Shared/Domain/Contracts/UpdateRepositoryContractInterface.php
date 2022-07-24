<?php

namespace Src\Shared\Domain\Contracts;

use Src\Shared\Domain\Model;

interface UpdateRepositoryContractInterface
{
    public function update(Model $model) : void;
}
