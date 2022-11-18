<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\TransactionType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => TransactionType::class,
    ];

    public function scopeIncome($query): Builder
    {
        return $query->where('type', TransactionType::Income);
    }
}
