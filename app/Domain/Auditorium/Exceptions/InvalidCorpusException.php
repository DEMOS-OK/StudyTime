<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\Exceptions;

use Exception;

final class InvalidCorpusException extends Exception
{

    /**
     * @var mixed
     */
    private mixed $corpus;

    public function __construct(mixed $corpus)
    {
        parent::__construct();
        $this->corpus = $corpus;
    }

    /**
     * @return mixed
     */
    public function getCorpus(): mixed
    {
        return $this->corpus;
    }

}
