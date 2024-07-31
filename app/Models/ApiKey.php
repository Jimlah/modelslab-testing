<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\PersonalAccessToken;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'key', 'last_used_at', 'no_calls', 'notes', 'is_default', 'usage', 'type'
    ];

    protected $hidden = [
        'key'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
