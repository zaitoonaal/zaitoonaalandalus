<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstagramSection extends Model
{
    protected $fillable = [

        'handle',

        'profile_url',

        'posts',

        'sort_order',

        'is_active',
    ];


    protected function casts(): array
    {
        return [

            'posts' =>
                'array',

            'sort_order' =>
                'integer',

            'is_active' =>
                'boolean',

        ];
    }
}