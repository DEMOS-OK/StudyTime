<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\Actions;

use App\Domain\Auditorium\Actions\Contracts\CreateAuditoriumContract;
use App\Domain\Auditorium\DTO\CreateAuditoriumDTO;
use App\Domain\Auditorium\Models\Auditorium;

/**
 * This action creates an audience
 */
class CreateAuditoriumAction implements CreateAuditoriumContract
{
    /**
     * Handler of the action
     *
     * @param CreateAuditoriumDTO $data
     * @return int|false
     */
    public function handle(CreateAuditoriumDTO $data): int|false
    {
        $auditorium = new Auditorium();

        $auditorium->corpus = $data->getCorpus()->value();
        $auditorium->office = $data->getOffice()->value();

        return $auditorium->save() ? $auditorium->id : false;
    }
}
