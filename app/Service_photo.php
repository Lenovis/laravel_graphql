<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service_photo extends Photo
{
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
