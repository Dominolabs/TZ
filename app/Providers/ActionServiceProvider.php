<?php

namespace App\Providers;

use App\Actions\SubmissionSubmitAction;
use App\Contracts\SubmissionActionContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        SubmissionActionContract::class => SubmissionSubmitAction::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
