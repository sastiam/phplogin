<?php

namespace Src\Shared\Domain\Contracts;

use Illuminate\Support\Collection;
use Src\Shared\Domain\Model;
use Src\Shared\Domain\ValueObjects\ModelId;

interface FindRepositoryContractInterface
{
    public function find(ModelId $id) : ?Model;
    public function findAll() : Collection;
}
