<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User_photo extends Photo
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
