<?php

namespace Src\Shared\Domain\Contracts;

use Src\Shared\Domain\Model;
use Src\Shared\Domain\ValueObjects\ModelId;
use Src\Shared\Domain\ValueObjects\ObjectInterface;
use Src\Shared\Domain\ValueObjects\ValueObject;

interface FindRepositoryContractInterface
{
    public function find(ModelId $id) : ?Model;
}
