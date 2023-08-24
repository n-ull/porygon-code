<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Draft extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'category_id',
        'user_id',
        'tags',
        'images',
        'anchor_version_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function versions(): HasMany
    {
        return $this->hasMany(DraftVersion::class);
    }

    public function anchored_version(): HasOne {
        return $this->hasOne(DraftVersion::class, 'id', 'anchor_version_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($draft) {
            $draft->versions()->delete(); // Borra automáticamente las versiones relacionadas
        });
    }
}
