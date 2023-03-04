<?php

declare(strict_types=1);

namespace App\Providers;

use App\Domain\Auditorium\Actions\Contracts\CreateAuditoriumContract;
use App\Domain\Auditorium\Actions\CreateAuditoriumAction;
use Illuminate\Support\ServiceProvider;

class AuditoriumActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(CreateAuditoriumContract::class, CreateAuditoriumAction::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

    }
}
