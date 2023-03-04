<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\Actions\Contracts;

use App\Domain\Auditorium\DTO\CreateAuditoriumDTO;

interface CreateAuditoriumContract
{
    public function handle(CreateAuditoriumDTO $data): int|false;
}
