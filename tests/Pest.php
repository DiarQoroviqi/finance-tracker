<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\actingAs;
use Tests\CreatesApplication;
use Tests\TestCase;

uses(TestCase::class, CreatesApplication::class, RefreshDatabase::class)
    ->in('Unit', 'Feature');

function login(User $user = null): void
{
    actingAs(User::factory()->create());
}
