<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithBackedEnum;
use App\Enums\Concerns\InteractsWithRandom;

enum TransactionType: int
{
    use InteractsWithRandom;
    use InteractsWithBackedEnum;

    case Income = 0;
    case Expense = 1;
}
