<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithRandom;

enum TransactionType: string
{
    use InteractsWithRandom;

    case Income = 'income';
    case Expense = 'expense';
}
