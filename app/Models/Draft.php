<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'images'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function versions(): HasMany {
        return $this->hasMany(DraftVersion::class);
    }

}
