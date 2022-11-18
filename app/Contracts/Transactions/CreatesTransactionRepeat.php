<?php

declare(strict_types=1);

namespace App\Contracts\Transactions;

interface CreatesTransactionRepeat
{
    public function create(array $input);
}
