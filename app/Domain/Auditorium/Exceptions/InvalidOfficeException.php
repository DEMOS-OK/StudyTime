<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\Exceptions;

use Exception;

final class InvalidOfficeException extends Exception
{

    /**
     * @var mixed
     */
    private mixed $office;

    public function __construct(mixed $office)
    {
        parent::__construct();
        $this->office = $office;
    }

    /**
     * @return mixed
     */
    public function getOffice(): mixed
    {
        return $this->office;
    }

}
