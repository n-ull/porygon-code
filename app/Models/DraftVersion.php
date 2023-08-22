<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Draft;

class DraftVersion extends Model
{
    use HasFactory;

    public function draft(): BelongsTo
    {
        return $this->belongsTo(Draft::class);
    }
}
