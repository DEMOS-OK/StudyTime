<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\DTO;

use App\Domain\Auditorium\Exceptions\InvalidCorpusException;
use App\Domain\Auditorium\Exceptions\InvalidOfficeException;
use App\Domain\Auditorium\ValueObjects\Corpus;
use App\Domain\Auditorium\ValueObjects\Office;

final class CreateAuditoriumDTO
{
    /**
     * @var Corpus
     */
    private Corpus $corpus;

    /**
     * @var Office
     */
    private Office $office;

    /**
     * @param int $corpus
     * @param int $office
     * @throws InvalidCorpusException|InvalidOfficeException
     */
    public function __construct(int $corpus, int $office)
    {
        $this->corpus = new Corpus($corpus);
        $this->office = new Office($office);
    }

    /**
     * @return Corpus
     */
    public function getCorpus(): Corpus
    {
        return $this->corpus;
    }

    /**
     * @param int $corpus
     * @throws InvalidCorpusException
     */
    public function setCorpus(int $corpus): void
    {
        $this->corpus = new Corpus($corpus);
    }

    /**
     * @return Office
     */
    public function getOffice(): Office
    {
        return $this->office;
    }

    /**
     * @param int $office
     * @throws InvalidOfficeException
     */
    public function setOffice(int $office): void
    {
        $this->office = new Office($office);
    }

}
