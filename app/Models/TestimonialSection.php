<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialSection extends Model
{
    protected $fillable = [
        'eyebrow_en',
        'eyebrow_ar',
        'testimonials',
        'is_active',
    ];


    protected function casts(): array
    {
        return [
            'testimonials' => 'array',
            'is_active' => 'boolean',
        ];
    }
}