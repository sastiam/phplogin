<?php

namespace Src\Shared\Domain\Contracts;

use Src\Shared\Domain\ValueObjects\ModelId;

interface DeleteRepositoryContractInterface
{
    public function delete(ModelId $id) : void;
}
