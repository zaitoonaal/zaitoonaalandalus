<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        // General
        'is_active',
        'video_path',
        'video_poster_path',
        'reserve_url',
        'menu_url',
        'scroll_target',

        // English
        'kicker_en',
        'title_line_1_en',
        'title_line_2_en',
        'title_line_3_en',
        'description_en',
        'reserve_text_en',
        'menu_text_en',

        'meta_1_title_en',
        'meta_1_text_en',
        'meta_2_title_en',
        'meta_2_text_en',
        'meta_3_title_en',
        'meta_3_text_en',

        'scroll_aria_en',

        // Arabic
        'kicker_ar',
        'title_line_1_ar',
        'title_line_2_ar',
        'title_line_3_ar',
        'description_ar',
        'reserve_text_ar',
        'menu_text_ar',

        'meta_1_title_ar',
        'meta_1_text_ar',
        'meta_2_title_ar',
        'meta_2_text_ar',
        'meta_3_title_ar',
        'meta_3_text_ar',

        'scroll_aria_ar',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}