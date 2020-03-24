<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business_photo extends Photo
{
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
