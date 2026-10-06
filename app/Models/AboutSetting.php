<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    protected $guarded = [];

    protected $casts = [
        'intro_eyebrow' => 'array',
        'intro_title' => 'array',
        'intro_copy' => 'array',
        'detail1_title' => 'array',
        'detail1_text' => 'array',
        'detail2_title' => 'array',
        'detail2_text' => 'array',
        'feat1_label' => 'array',
        'feat1_title' => 'array',
        'feat1_text' => 'array',
        'feat2_label' => 'array',
        'feat2_title' => 'array',
        'feat2_text' => 'array',
        'feat3_label' => 'array',
        'feat3_title' => 'array',
        'feat3_text' => 'array',
    ];
}