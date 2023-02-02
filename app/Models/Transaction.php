<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\TransactionType;
use App\QueryBuilders\TransactionQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'note',
    ];

    public function newEloquentBuilder($query): TransactionQueryBuilder
    {
        return new TransactionQueryBuilder($query);
    }

    public function repeat(): BelongsTo
    {
        return $this->belongsTo(TransactionRepeat::class);
    }
}
