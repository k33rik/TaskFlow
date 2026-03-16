<?php

namespace App\Models;

use App\Enums\Notification\TypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    protected $fillable = [
        'message',
        'type',
        'is_read',
    ];

    protected $casts = [
        'type' => TypeEnum::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
