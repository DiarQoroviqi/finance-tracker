<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithBackedEnum;
use App\Enums\Concerns\InteractsWithRandom;

enum TransactionConfirmType: int
{
    use InteractsWithRandom;
    use InteractsWithBackedEnum;

    case Automatic = 0;
    case Manually = 1;
}
