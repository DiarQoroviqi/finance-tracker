<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $casts = [
        'period_starts_at' => 'datetime:Y-m-d',
        'period_ends_at' => 'datetime:Y-m-d',
        'include_incomes' => 'boolean',
    ];
}
