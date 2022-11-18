<?php

declare(strict_types=1);

namespace App\Contracts\Transactions;

interface CreatesTransaction
{
    public function create(array $input);
}
