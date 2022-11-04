<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Concerns\InteractsWithRandom;

enum TransactionConfirmationType: string
{
    use InteractsWithRandom;

    case Automatic = 'automatic';
    case Manually = 'manually';
}
