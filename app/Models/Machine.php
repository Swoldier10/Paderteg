<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Machine extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'specifications',
        'type',
        'is_active',
    ];

    public $translatable = [
        'name',
        'description',
        'specifications',
    ];

    protected $casts = [
        'specifications' => 'array',
        'is_active' => 'boolean',
    ];
}
