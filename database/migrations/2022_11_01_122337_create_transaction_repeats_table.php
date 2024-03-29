<?php

declare(strict_types=1);

use App\Enums\TransactionConfirmType;
use App\Enums\TransactionRepeatingType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaction_repeats', function (Blueprint $table) {
            $table->id();
            $table->string('confirmation_type')
                ->default(TransactionConfirmType::Automatic->value);
            $table->unsignedSmallInteger('period')->default(1);
            $table->string('period_type')
                ->default(TransactionRepeatingType::Month->value);
            $table->dateTime('ends_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaction_repeats');
    }
};
