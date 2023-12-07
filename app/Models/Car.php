<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'make',
        'model',
        'build_date',
        'color_id'
    ];

    protected $hidden = [
        'color_id'
    ];

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
