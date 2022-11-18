<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TransactionRepeat extends Model
{
    use HasFactory;

    protected $casts = [
        'ends_at' => 'date',
    ];

    protected $fillable = [
        'confirmation_type',
        'period',
        'period_type',
        'ends_at',
    ];

    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class, 'transaction_repeat_id');
    }

    public static function periods(): array
    {
        return collect(range(1, 31))->mapWithKeys(function ($value) {
            return [$value => $value];
        })->toArray();
    }
}
