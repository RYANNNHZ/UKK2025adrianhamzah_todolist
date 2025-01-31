<?php

namespace App\Models;

use App\Models\task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lists extends Model
{
    use HasFactory,HasUuids;
    protected $guarded = ['id','created_at','updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(task::class);
    }
}
