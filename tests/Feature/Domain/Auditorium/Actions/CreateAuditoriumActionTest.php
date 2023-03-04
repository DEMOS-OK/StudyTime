<?php

namespace Tests\Feature\Domain\Auditorium\Actions;

use App\Domain\Auditorium\Actions\Contracts\CreateAuditoriumContract;
use App\Domain\Auditorium\DTO\CreateAuditoriumDTO;
use App\Domain\Auditorium\Exceptions\InvalidCorpusException;
use App\Domain\Auditorium\Exceptions\InvalidOfficeException;
use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateAuditoriumActionTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->action = app(CreateAuditoriumContract::class);
    }

    /**
     * Test creating auditorium
     *
     * @throws Exception
     */
    public function test_create_default_auditorium(): void
    {
        $data = new CreateAuditoriumDTO(1, 1);

        $result = $this->action->handle($data);

        $this->assertIsNumeric($result);
    }

    /**
     * Test creating auditorium has in database
     *
     * @throws Exception
     */
    public function test_created_auditorium_has_in_database(): void
    {
        $data = new CreateAuditoriumDTO(1, 1);

        $result = $this->action->handle($data);

        $this->assertDatabaseHas('auditorium', ['id' => $result]);
    }

    /**
     * Test creating auditorium with big numbers
     *
     * @throws Exception
     */
    public function test_create_auditorium_with_big_numbers(): void
    {
        $data = new CreateAuditoriumDTO(31323231, 312323231);

        $result = $this->action->handle($data);

        $this->assertIsNumeric($result);
    }

    /**
     * Test exception when negative corpus
     *
     * @return void
     * @throws InvalidCorpusException
     * @throws InvalidOfficeException
     */
    public function test_exception_when_negative_corpus(): void
    {
        $this->expectException(InvalidCorpusException::class);
        $data = new CreateAuditoriumDTO(-1, 1);

        $result = $this->action->handle($data);
    }

    /**
     * Test exception when negative corpus
     *
     * @return void
     * @throws InvalidCorpusException
     * @throws InvalidOfficeException
     */
    public function test_exception_when_negative_office(): void
    {
        $this->expectException(InvalidOfficeException::class);
        $data = new CreateAuditoriumDTO(1, -1);

        $result = $this->action->handle($data);
    }
}
