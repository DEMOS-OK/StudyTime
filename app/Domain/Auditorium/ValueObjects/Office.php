<?php

declare(strict_types=1);

namespace App\Domain\Auditorium\ValueObjects;

use App\Domain\Auditorium\Exceptions\InvalidOfficeException;

/**
 * This Value tobject encapsulates the logic of storing the classroom number in the case
 */
final class Office
{

    /**
     * Office number
     *
     * @var int
     */
    private int $office;

    /**
     * Class constructor
     *
     * @param int $office
     * @throws InvalidOfficeException
     */
    public function __construct(int $office)
    {
        if ($office <= 0) {
            throw new InvalidOfficeException($office);
        }

        $this->office = $office;
    }

    /**
     * This method returns a value of this Value Object
     *
     * @return int
     */
    public function value(): int
    {
        return $this->office;
    }
}
