<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'business_id',
        'price',
        'duration',
        'description',
        'address',
        'phone',
        'work_hours',
        'break_hours',
        'visible'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
