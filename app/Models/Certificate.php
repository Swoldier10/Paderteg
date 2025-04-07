<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'pdf_path',
        'issue_date',
        'expiry_date',
        'is_active',
    ];

    public $translatable = [
        'name',
        'description',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'is_active' => 'boolean',
    ];
}
