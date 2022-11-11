<?php

declare(strict_types=1);

namespace App\Contracts;

interface CreatesTransaction
{
    public function create(array $input);
}
