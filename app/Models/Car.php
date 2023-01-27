<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'number',
        'color_id',
        'comment'
    ];

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
