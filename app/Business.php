<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'work_m_f',
        'work_sat',
        'work_sun',
        'currency',
        'show_tips'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
