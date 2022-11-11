<?php

namespace App\Providers;

use App\Actions\Transactions\CreateTransaction;
use App\Contracts\CreatesTransaction;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CreatesTransaction::class => CreateTransaction::class,
    ];

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //
    }
}
