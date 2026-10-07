<?php

namespace Database\Seeders;

use App\Models\InstagramSection;
use Illuminate\Database\Seeder;

class InstagramSectionSeeder extends Seeder
{
    public function run(): void
    {
        InstagramSection::query()
            ->firstOrCreate(

                [
                    'handle' =>
                        '@ZAITOONAALANDALUS',
                ],

                [
                    'profile_url' =>
                        null,


                    'posts' => [

                        [
                            'image' =>
                                null,

                            'image_url' =>
                                'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=600&q=85',

                            'post_url' =>
                                null,

                            'alt_en' =>
                                'Instagram Post 1',

                            'alt_ar' =>
                                'منشور إنستغرام 1',

                            'is_active' =>
                                true,
                        ],


                        [
                            'image' =>
                                null,

                            'image_url' =>
                                'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=600&q=85',

                            'post_url' =>
                                null,

                            'alt_en' =>
                                'Instagram Post 2',

                            'alt_ar' =>
                                'منشور إنستغرام 2',

                            'is_active' =>
                                true,
                        ],


                        [
                            'image' =>
                                null,

                            'image_url' =>
                                'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=600&q=85',

                            'post_url' =>
                                null,

                            'alt_en' =>
                                'Instagram Post 3',

                            'alt_ar' =>
                                'منشور إنستغرام 3',

                            'is_active' =>
                                true,
                        ],


                        [
                            'image' =>
                                null,

                            'image_url' =>
                                'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=85',

                            'post_url' =>
                                null,

                            'alt_en' =>
                                'Instagram Post 4',

                            'alt_ar' =>
                                'منشور إنستغرام 4',

                            'is_active' =>
                                true,
                        ],

                    ],


                    'sort_order' =>
                        1,

                    'is_active' =>
                        true,
                ]
            );
    }
}