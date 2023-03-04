<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\ValueObjects;

use App\Domain\Auditorium\Exceptions\InvalidCorpusException;

/**
 * This Value object encapsulates the logic of storing the number of the academic building
 */
final class Corpus
{

    /**
     * Corpus number
     *
     * @var int
     */
    private int $corpus;

    /**
     * Class constructor
     *
     * @param int $corpus
     * @throws InvalidCorpusException
     */
    public function __construct(int $corpus)
    {
        if ($corpus <= 0) {
            throw new InvalidCorpusException($corpus);
        }

        $this->corpus = $corpus;
    }

    /**
     * This method returns a value
     *
     * @return int
     */
    public function value(): int
    {
        return $this->corpus;
    }
}
