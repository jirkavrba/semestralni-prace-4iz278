<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flashcard extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description"
    ];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(FlashcardCollection::class);
    }
}
