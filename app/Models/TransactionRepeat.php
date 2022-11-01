<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionRepeat extends Model
{
    use HasFactory;

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'transaction_repeat_id');
    }
}
