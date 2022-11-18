<?php

declare(strict_types=1);

namespace App\Providers;

use App\Actions\Transactions\CreateTransaction;
use App\Actions\Transactions\CreateTransactionRepeat;
use App\Contracts\Transactions\CreatesTransaction;
use App\Contracts\Transactions\CreatesTransactionRepeat;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CreatesTransaction::class => CreateTransaction::class,
        CreatesTransactionRepeat::class => CreateTransactionRepeat::class,
    ];
}
