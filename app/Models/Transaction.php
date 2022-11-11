<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\TransactionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => TransactionType::class,
        'date' => 'date',
    ];

    protected $fillable = [
        'category_id',
        'transaction_repeat_id',
        'type',
        'date',
        'amount',
        'note'
    ];

    public function repeat(): HasOne
    {
        return $this->hasOne(TransactionRepeat::class);
    }
}
