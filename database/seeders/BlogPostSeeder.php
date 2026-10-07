<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | BLOG POST 1
        |--------------------------------------------------------------------------
        */

        BlogPost::updateOrCreate(
            [
                'slug' =>
                    'the-delicate-art-of-traditional-arabic-coffee',
            ],
            [
                'title' =>
                    'The Delicate Art of Traditional Arabic Coffee',

                'excerpt' =>
                    'Explore the rich history and meticulous preparation methods that make our signature coffee ritual a staple of Doha evenings.',

                'content' =>
                    '<p>Arabic coffee is more than a drink. It is a tradition built around hospitality, conversation and the pleasure of welcoming guests.</p>

                    <h2>The Tradition of Arabic Coffee</h2>

                    <p>Across the Gulf, Arabic coffee has long been connected with generosity and social gatherings. Its preparation, aroma and presentation make it an important part of the hospitality experience.</p>

                    <h2>A Ritual Worth Taking Time For</h2>

                    <p>From selecting the coffee to preparing and serving each cup, the process rewards patience and attention to detail.</p>

                    <h2>Coffee at Zaitoona Al Andalus</h2>

                    <p>At Zaitoona Al Andalus, coffee is part of the wider dining and lounge experience, giving guests another reason to slow down and enjoy their time together.</p>',

                'featured_image' =>
                    'https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=1200&q=85',

                'featured_image_alt' =>
                    'Traditional Arabic coffee experience in Doha',

                'category' =>
                    'Culture',

                'tags' => [
                    'Arabic Coffee',
                    'Doha',
                    'Coffee Culture',
                    'Zaitoona Al Andalus',
                ],

                'author_name' =>
                    'Zaitoona Al Andalus',

                'status' =>
                    'published',

                /*
                |--------------------------------------------------------------------------
                | This is currently a future date if today is before Oct 12.
                | It will automatically appear once that date arrives.
                |--------------------------------------------------------------------------
                */

                'published_at' =>
                    '2026-10-12 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword' =>
                    'Arabic coffee in Doha',

                'secondary_keywords' => [
                    'traditional Arabic coffee',
                    'coffee culture Doha',
                    'Arabic coffee Qatar',
                ],

                'seo_title' =>
                    'Traditional Arabic Coffee in Doha | Zaitoona Al Andalus',

                'meta_description' =>
                    'Discover the heritage, preparation and hospitality behind traditional Arabic coffee at Zaitoona Al Andalus in Doha.',

                'robots' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'The Delicate Art of Traditional Arabic Coffee',

                'og_description' =>
                    'Explore the tradition and hospitality behind Arabic coffee in Doha.',


                /*
                |--------------------------------------------------------------------------
                | Twitter
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Traditional Arabic Coffee in Doha',

                'twitter_description' =>
                    'Discover the traditions behind Arabic coffee at Zaitoona Al Andalus.',


                /*
                |--------------------------------------------------------------------------
                | Schema
                |--------------------------------------------------------------------------
                */

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'The Delicate Art of Traditional Arabic Coffee',

                'schema_description' =>
                    'Explore the heritage and preparation of traditional Arabic coffee in Doha.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | BLOG POST 2
        |--------------------------------------------------------------------------
        */

        BlogPost::updateOrCreate(
            [
                'slug' =>
                    'perfecting-the-mediterranean-mezze-platter',
            ],
            [
                'title' =>
                    'Perfecting the Mediterranean Mezze Platter',

                'excerpt' =>
                    'Our kitchen explores the essential components of a memorable sharing plate, focusing on fresh ingredients and Mediterranean flavours.',

                'content' =>
                    '<p>Mediterranean mezze is designed for sharing. A well-balanced table combines freshness, texture, flavour and variety.</p>

                    <h2>Built for Sharing</h2>

                    <p>Mezze encourages everyone at the table to explore different flavours together, from fresh salads and dips to warm dishes and grilled favourites.</p>

                    <h2>Fresh Ingredients Matter</h2>

                    <p>Good mezze begins with quality ingredients. Fresh vegetables, herbs, olive oil, spices and carefully prepared accompaniments create balance across the table.</p>

                    <h2>The Zaitoona Experience</h2>

                    <p>At Zaitoona Al Andalus, our approach to Mediterranean dining centres on generous plates and relaxed shared experiences.</p>',

                'featured_image' =>
                    'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1200&q=85',

                'featured_image_alt' =>
                    'Mediterranean mezze platter',

                'category' =>
                    'Culinary',

                'tags' => [
                    'Mediterranean Food',
                    'Mezze',
                    'Restaurant Doha',
                    'Sharing Plates',
                ],

                'author_name' =>
                    'Zaitoona Al Andalus',

                'status' =>
                    'published',

                'published_at' =>
                    '2026-09-28 10:00:00',

                'is_active' =>
                    true,

                'focus_keyword' =>
                    'Mediterranean mezze in Doha',

                'secondary_keywords' => [
                    'Mediterranean restaurant Doha',
                    'mezze platter Doha',
                    'Middle Eastern food Doha',
                ],

                'seo_title' =>
                    'Mediterranean Mezze in Doha | Zaitoona Al Andalus',

                'meta_description' =>
                    'Discover what makes a memorable Mediterranean mezze platter and explore fresh sharing dishes at Zaitoona Al Andalus in Doha.',

                'robots' =>
                    'index, follow',

                'og_title' =>
                    'Perfecting the Mediterranean Mezze Platter',

                'og_description' =>
                    'Explore the ingredients and flavours behind Mediterranean mezze.',

                'twitter_title' =>
                    'Mediterranean Mezze in Doha',

                'twitter_description' =>
                    'Discover Mediterranean sharing plates at Zaitoona Al Andalus.',

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'Perfecting the Mediterranean Mezze Platter',

                'schema_description' =>
                    'A guide to fresh Mediterranean mezze and sharing plates.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | BLOG POST 3
        |--------------------------------------------------------------------------
        */

        BlogPost::updateOrCreate(
            [
                'slug' =>
                    'beginners-guide-to-premium-shisha-profiles',
            ],
            [
                'title' =>
                    'A Beginner\'s Guide to Premium Shisha Profiles',

                'excerpt' =>
                    'From crisp citrus notes to deeper premium blends, discover how different flavour profiles can shape your next lounge experience.',

                'content' =>
                    '<p>Choosing a shisha profile becomes easier when you understand the types of flavours and intensity you enjoy.</p>

                    <h2>Fresh and Bright Profiles</h2>

                    <p>Citrus and fresh flavour combinations can offer a lighter and more refreshing experience.</p>

                    <h2>Richer Profiles</h2>

                    <p>Guests looking for additional depth may prefer warmer, fuller combinations designed for a longer lounge session.</p>

                    <h2>Finding Your Preference</h2>

                    <p>Our team can help guests explore profiles suited to their personal preferences and the type of experience they want to enjoy.</p>',

                'featured_image' =>
                    'https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=1200&q=85',

                'featured_image_alt' =>
                    'Premium lounge experience',

                'category' =>
                    'Lounge',

                'tags' => [
                    'Shisha Doha',
                    'Premium Shisha',
                    'Lounge Doha',
                ],

                'author_name' =>
                    'Zaitoona Al Andalus',

                'status' =>
                    'published',

                'published_at' =>
                    '2026-09-15 10:00:00',

                'is_active' =>
                    true,

                'focus_keyword' =>
                    'premium shisha in Doha',

                'secondary_keywords' => [
                    'shisha lounge Doha',
                    'shisha flavours Doha',
                    'premium lounge Qatar',
                ],

                'seo_title' =>
                    'Premium Shisha in Doha | Beginner\'s Guide',

                'meta_description' =>
                    'Explore premium shisha profiles, flavour styles and lounge experiences at Zaitoona Al Andalus in Doha.',

                'robots' =>
                    'index, follow',

                'og_title' =>
                    'A Beginner\'s Guide to Premium Shisha Profiles',

                'og_description' =>
                    'Learn about different shisha flavour profiles and lounge experiences.',

                'twitter_title' =>
                    'Premium Shisha Profiles in Doha',

                'twitter_description' =>
                    'A simple introduction to premium shisha flavour profiles.',

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'A Beginner\'s Guide to Premium Shisha Profiles',

                'schema_description' =>
                    'A beginner-friendly guide to premium shisha profiles in Doha.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | BLOG POST 4
        |--------------------------------------------------------------------------
        */

        BlogPost::updateOrCreate(
            [
                'slug' =>
                    'hosting-memorable-evenings-at-zaitoona',
            ],
            [
                'title' =>
                    'Hosting Memorable Evenings at Zaitoona',

                'excerpt' =>
                    'Discover how a thoughtful restaurant setting can bring together private dinners, business gatherings and family celebrations.',

                'content' =>
                    '<p>The right setting can transform an ordinary gathering into a memorable evening.</p>

                    <h2>Private Dining</h2>

                    <p>Comfortable seating, thoughtful service and well-planned food choices help create relaxed private dinners.</p>

                    <h2>Business Gatherings</h2>

                    <p>A welcoming restaurant environment can provide a comfortable setting for informal meetings and professional gatherings.</p>

                    <h2>Family Celebrations</h2>

                    <p>Shared dishes and an unhurried atmosphere make restaurant gatherings particularly suited to family occasions.</p>',

                'featured_image' =>
                    'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=85',

                'featured_image_alt' =>
                    'Elegant restaurant dining event',

                'category' =>
                    'Events',

                'tags' => [
                    'Events Doha',
                    'Private Dining Doha',
                    'Restaurant Events',
                ],

                'author_name' =>
                    'Zaitoona Al Andalus',

                'status' =>
                    'published',

                'published_at' =>
                    '2026-08-30 10:00:00',

                'is_active' =>
                    true,

                'focus_keyword' =>
                    'private dining in Doha',

                'secondary_keywords' => [
                    'restaurant events Doha',
                    'family dinner Doha',
                    'business gathering Doha',
                ],

                'seo_title' =>
                    'Private Dining & Gatherings in Doha | Zaitoona',

                'meta_description' =>
                    'Discover a welcoming setting for private dinners, family gatherings and memorable evenings at Zaitoona Al Andalus in Doha.',

                'robots' =>
                    'index, follow',

                'og_title' =>
                    'Hosting Memorable Evenings at Zaitoona',

                'og_description' =>
                    'Discover a relaxed setting for memorable gatherings in Doha.',

                'twitter_title' =>
                    'Private Dining & Gatherings in Doha',

                'twitter_description' =>
                    'Plan a memorable restaurant gathering at Zaitoona Al Andalus.',

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'Hosting Memorable Evenings at Zaitoona',

                'schema_description' =>
                    'Ideas for private dining and gatherings in Doha.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | BLOG POST 5
        |--------------------------------------------------------------------------
        */

        BlogPost::updateOrCreate(
            [
                'slug' =>
                    'the-sweet-finish-exploring-our-dessert-menu',
            ],
            [
                'title' =>
                    'The Sweet Finish: Exploring Our Dessert Menu',

                'excerpt' =>
                    'No Mediterranean meal is complete without a touch of sweetness. Explore the role dessert plays in completing a relaxed dining experience.',

                'content' =>
                    '<p>A good dessert provides the final chapter of a memorable meal.</p>

                    <h2>A Balanced Finish</h2>

                    <p>After mezze and grilled dishes, something sweet can provide a lighter and more relaxed conclusion to the table.</p>

                    <h2>Made for Coffee</h2>

                    <p>Desserts naturally pair with Arabic coffee, espresso and tea, allowing the evening to continue without feeling rushed.</p>

                    <h2>Stay a Little Longer</h2>

                    <p>At Zaitoona Al Andalus, dessert and coffee are part of the experience of taking time around the table.</p>',

                'featured_image' =>
                    'https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=1200&q=85',

                'featured_image_alt' =>
                    'Signature restaurant dessert',

                'category' =>
                    'Culinary',

                'tags' => [
                    'Desserts Doha',
                    'Mediterranean Dessert',
                    'Coffee and Dessert',
                ],

                'author_name' =>
                    'Zaitoona Al Andalus',

                'status' =>
                    'published',

                'published_at' =>
                    '2026-08-12 10:00:00',

                'is_active' =>
                    true,

                'focus_keyword' =>
                    'desserts in Doha',

                'secondary_keywords' => [
                    'restaurant desserts Doha',
                    'Mediterranean desserts',
                    'coffee and dessert Doha',
                ],

                'seo_title' =>
                    'Desserts in Doha | Zaitoona Al Andalus',

                'meta_description' =>
                    'Explore desserts, coffee pairings and the sweet finish to a Mediterranean dining experience at Zaitoona Al Andalus in Doha.',

                'robots' =>
                    'index, follow',

                'og_title' =>
                    'The Sweet Finish: Exploring Our Dessert Menu',

                'og_description' =>
                    'Discover desserts and coffee pairings at Zaitoona Al Andalus.',

                'twitter_title' =>
                    'Desserts in Doha | Zaitoona Al Andalus',

                'twitter_description' =>
                    'Discover the sweet finish to a Mediterranean dining experience.',

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'The Sweet Finish: Exploring Our Dessert Menu',

                'schema_description' =>
                    'Explore Mediterranean-inspired desserts and coffee pairings in Doha.',
            ]
        );
    }
}