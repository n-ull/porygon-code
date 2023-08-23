<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Draft;

class DraftVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'draft_id'
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($version) {
            if ($version->draft_id !== $version->draft->id) {
                return false; // Cancelar la operación si el borrador no coincide
            }
        });
    }


    public function draft(): BelongsTo
    {
        return $this->belongsTo(Draft::class);
    }
}
