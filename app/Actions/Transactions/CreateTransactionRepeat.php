<?php

declare(strict_types=1);

namespace App\Actions\Transactions;

use App\Contracts\Transactions\CreatesTransactionRepeat;
use App\Models\TransactionRepeat;

class CreateTransactionRepeat implements CreatesTransactionRepeat
{
    public function create(array $input)
    {
        return TransactionRepeat::create($input);
    }
}
