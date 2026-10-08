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

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

                'title_ar' =>
                    'فن القهوة العربية التقليدية في الدوحة',

                'slug_ar' =>
                    'فن-القهوة-العربية-التقليدية-في-الدوحة',

                'excerpt_ar' =>
                    'اكتشف تاريخ القهوة العربية وطرق تحضيرها الدقيقة، ولماذا أصبحت طقوس القهوة جزءاً أساسياً من أمسيات الضيافة في الدوحة.',

                'content_ar' =>
                    '<p>القهوة العربية أكثر من مجرد مشروب، فهي تقليد عريق يرتبط بالضيافة والحديث الدافئ ومتعة استقبال الضيوف.</p>

                    <h2>تراث القهوة العربية</h2>

                    <p>ارتبطت القهوة العربية في منطقة الخليج منذ زمن طويل بالكرم والتجمعات الاجتماعية. ويمنحها أسلوب التحضير والرائحة وطريقة التقديم مكانة مميزة ضمن تجربة الضيافة العربية.</p>

                    <h2>طقوس تستحق الوقت</h2>

                    <p>من اختيار القهوة بعناية إلى التحضير والتقديم، تحتاج العملية إلى الصبر والاهتمام بالتفاصيل للوصول إلى تجربة متوازنة ومميزة.</p>

                    <h2>القهوة في زيتونة الأندلس</h2>

                    <p>في زيتونة الأندلس، تشكل القهوة جزءاً من تجربة المطعم واللاونج المتكاملة، وتمنح ضيوفنا سبباً إضافياً للاسترخاء وقضاء المزيد من الوقت مع الأصدقاء والعائلة.</p>',

                'featured_image_alt_ar' =>
                    'تجربة القهوة العربية التقليدية في الدوحة',

                'category_ar' =>
                    'الثقافة',

                'tags_ar' => [
                    'القهوة العربية',
                    'الدوحة',
                    'ثقافة القهوة',
                    'زيتونة الأندلس',
                ],

                'author_name_ar' =>
                    'زيتونة الأندلس',


                /*
                |--------------------------------------------------------------------------
                | Publishing
                |--------------------------------------------------------------------------
                */

                'status' =>
                    'published',

                'published_at' =>
                    '2026-10-12 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | English SEO
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
                | Arabic SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword_ar' =>
                    'القهوة العربية في الدوحة',

                'secondary_keywords_ar' => [
                    'القهوة العربية التقليدية',
                    'قهوة عربية قطر',
                    'ثقافة القهوة في الدوحة',
                    'أفضل قهوة عربية في الدوحة',
                ],

                'seo_title_ar' =>
                    'القهوة العربية في الدوحة | زيتونة الأندلس',

                'meta_description_ar' =>
                    'اكتشف تراث القهوة العربية وطرق تحضيرها وتجربة الضيافة الأصيلة في زيتونة الأندلس في الدوحة، قطر.',

                'canonical_url_ar' =>
                    null,

                'robots_ar' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | English Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'The Delicate Art of Traditional Arabic Coffee',

                'og_description' =>
                    'Explore the tradition and hospitality behind Arabic coffee in Doha.',


                /*
                |--------------------------------------------------------------------------
                | Arabic Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title_ar' =>
                    'فن القهوة العربية التقليدية في الدوحة',

                'og_description_ar' =>
                    'اكتشف تقاليد القهوة العربية وأصالة الضيافة في زيتونة الأندلس في الدوحة.',


                /*
                |--------------------------------------------------------------------------
                | English Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Traditional Arabic Coffee in Doha',

                'twitter_description' =>
                    'Discover the traditions behind Arabic coffee at Zaitoona Al Andalus.',


                /*
                |--------------------------------------------------------------------------
                | Arabic Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title_ar' =>
                    'القهوة العربية التقليدية في الدوحة',

                'twitter_description_ar' =>
                    'اكتشف تقاليد القهوة العربية وتجربة الضيافة في زيتونة الأندلس.',


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

                'schema_headline_ar' =>
                    'فن القهوة العربية التقليدية في الدوحة',

                'schema_description_ar' =>
                    'اكتشف تراث القهوة العربية وطرق تحضيرها وتجربة الضيافة في الدوحة.',

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

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

                'title_ar' =>
                    'إتقان طبق المزة المتوسطية',

                'slug_ar' =>
                    'إتقان-طبق-المزة-المتوسطية',

                'excerpt_ar' =>
                    'اكتشف المكونات الأساسية التي تجعل طبق المزة تجربة مميزة للمشاركة، مع التركيز على المكونات الطازجة والنكهات المتوسطية.',

                'content_ar' =>
                    '<p>صُممت المزة المتوسطية للمشاركة، حيث تجمع المائدة المتوازنة بين النضارة والقوام والنكهة والتنوع.</p>

                    <h2>مصممة للمشاركة</h2>

                    <p>تمنح المزة جميع الجالسين حول الطاولة فرصة استكشاف نكهات متعددة معاً، بدءاً من السلطات الطازجة والصلصات وصولاً إلى الأطباق الساخنة والمشويات.</p>

                    <h2>المكونات الطازجة تصنع الفرق</h2>

                    <p>تبدأ المزة المميزة بمكونات عالية الجودة. فالخضروات الطازجة والأعشاب وزيت الزيتون والتوابل والمقبلات المحضرة بعناية تخلق توازناً رائعاً على المائدة.</p>

                    <h2>تجربة زيتونة الأندلس</h2>

                    <p>في زيتونة الأندلس، تقوم تجربتنا في المطبخ المتوسطي على الأطباق السخية والأجواء المريحة التي تجعل مشاركة الطعام أكثر متعة.</p>',

                'featured_image_alt_ar' =>
                    'طبق مزة متوسطية في زيتونة الأندلس',

                'category_ar' =>
                    'المأكولات',

                'tags_ar' => [
                    'المأكولات المتوسطية',
                    'المزة',
                    'مطاعم الدوحة',
                    'أطباق للمشاركة',
                ],

                'author_name_ar' =>
                    'زيتونة الأندلس',


                /*
                |--------------------------------------------------------------------------
                | Publishing
                |--------------------------------------------------------------------------
                */

                'status' =>
                    'published',

                'published_at' =>
                    '2026-09-28 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | English SEO
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword_ar' =>
                    'المزة المتوسطية في الدوحة',

                'secondary_keywords_ar' => [
                    'مطعم متوسطي في الدوحة',
                    'مزة في الدوحة',
                    'مطعم شرق أوسطي في الدوحة',
                    'أطباق مشاركة في الدوحة',
                ],

                'seo_title_ar' =>
                    'المزة المتوسطية في الدوحة | زيتونة الأندلس',

                'meta_description_ar' =>
                    'اكتشف أسرار طبق المزة المتوسطية والمكونات الطازجة وأطباق المشاركة في زيتونة الأندلس في الدوحة.',

                'canonical_url_ar' =>
                    null,

                'robots_ar' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'Perfecting the Mediterranean Mezze Platter',

                'og_description' =>
                    'Explore the ingredients and flavours behind Mediterranean mezze.',

                'og_title_ar' =>
                    'إتقان طبق المزة المتوسطية',

                'og_description_ar' =>
                    'اكتشف المكونات والنكهات التي تجعل المزة المتوسطية تجربة مميزة للمشاركة.',


                /*
                |--------------------------------------------------------------------------
                | Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Mediterranean Mezze in Doha',

                'twitter_description' =>
                    'Discover Mediterranean sharing plates at Zaitoona Al Andalus.',

                'twitter_title_ar' =>
                    'المزة المتوسطية في الدوحة',

                'twitter_description_ar' =>
                    'اكتشف أطباق المزة المتوسطية والمشاركة في زيتونة الأندلس.',


                /*
                |--------------------------------------------------------------------------
                | Schema
                |--------------------------------------------------------------------------
                */

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'Perfecting the Mediterranean Mezze Platter',

                'schema_description' =>
                    'A guide to fresh Mediterranean mezze and sharing plates.',

                'schema_headline_ar' =>
                    'إتقان طبق المزة المتوسطية',

                'schema_description_ar' =>
                    'دليل حول المزة المتوسطية الطازجة وأطباق المشاركة في الدوحة.',

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

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

                'title_ar' =>
                    'دليل المبتدئين إلى نكهات الشيشة الفاخرة',

                'slug_ar' =>
                    'دليل-المبتدئين-إلى-نكهات-الشيشة-الفاخرة',

                'excerpt_ar' =>
                    'من النكهات الحمضية المنعشة إلى الخلطات الفاخرة الأكثر عمقاً، اكتشف كيف يمكن لاختيار النكهة المناسبة أن يصنع تجربة شيشة أكثر تميزاً.',

                'content_ar' =>
                    '<p>يصبح اختيار نكهة الشيشة أسهل عندما تتعرف على أنواع النكهات ومستوى القوة الذي يناسب ذوقك.</p>

                    <h2>نكهات منعشة وخفيفة</h2>

                    <p>توفر نكهات الحمضيات والخلطات المنعشة تجربة أخف وأكثر انتعاشاً، وهي مناسبة للضيوف الذين يفضلون النكهات الواضحة والمتوازنة.</p>

                    <h2>نكهات أعمق وأكثر غنى</h2>

                    <p>قد يفضل الباحثون عن تجربة أكثر عمقاً خلطات دافئة وغنية مصممة لجلسات اللاونج الطويلة.</p>

                    <h2>اكتشف النكهة المناسبة لك</h2>

                    <p>يمكن لفريقنا مساعدتك في استكشاف النكهات المناسبة لتفضيلاتك ونوع التجربة التي ترغب في الاستمتاع بها.</p>',

                'featured_image_alt_ar' =>
                    'تجربة شيشة فاخرة في لاونج بالدوحة',

                'category_ar' =>
                    'اللاونج',

                'tags_ar' => [
                    'شيشة الدوحة',
                    'شيشة فاخرة',
                    'لاونج الدوحة',
                    'نكهات الشيشة',
                ],

                'author_name_ar' =>
                    'زيتونة الأندلس',


                /*
                |--------------------------------------------------------------------------
                | Publishing
                |--------------------------------------------------------------------------
                */

                'status' =>
                    'published',

                'published_at' =>
                    '2026-09-15 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | English SEO
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword_ar' =>
                    'شيشة فاخرة في الدوحة',

                'secondary_keywords_ar' => [
                    'لاونج شيشة في الدوحة',
                    'نكهات الشيشة في الدوحة',
                    'شيشة قطر',
                    'لاونج فاخر في الدوحة',
                ],

                'seo_title_ar' =>
                    'شيشة فاخرة في الدوحة | دليل النكهات',

                'meta_description_ar' =>
                    'اكتشف نكهات الشيشة الفاخرة وأنواع الخلطات وتجربة اللاونج في زيتونة الأندلس في الدوحة، قطر.',

                'canonical_url_ar' =>
                    null,

                'robots_ar' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'A Beginner\'s Guide to Premium Shisha Profiles',

                'og_description' =>
                    'Learn about different shisha flavour profiles and lounge experiences.',

                'og_title_ar' =>
                    'دليل المبتدئين إلى نكهات الشيشة الفاخرة',

                'og_description_ar' =>
                    'تعرف على أنواع نكهات الشيشة المختلفة وتجربة اللاونج في الدوحة.',


                /*
                |--------------------------------------------------------------------------
                | Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Premium Shisha Profiles in Doha',

                'twitter_description' =>
                    'A simple introduction to premium shisha flavour profiles.',

                'twitter_title_ar' =>
                    'نكهات الشيشة الفاخرة في الدوحة',

                'twitter_description_ar' =>
                    'دليل بسيط لاختيار نكهات الشيشة الفاخرة وتجربة اللاونج المناسبة.',


                /*
                |--------------------------------------------------------------------------
                | Schema
                |--------------------------------------------------------------------------
                */

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'A Beginner\'s Guide to Premium Shisha Profiles',

                'schema_description' =>
                    'A beginner-friendly guide to premium shisha profiles in Doha.',

                'schema_headline_ar' =>
                    'دليل المبتدئين إلى نكهات الشيشة الفاخرة',

                'schema_description_ar' =>
                    'دليل مبسط للتعرف على نكهات الشيشة الفاخرة في الدوحة.',

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

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

                'title_ar' =>
                    'استضافة أمسيات لا تُنسى في زيتونة الأندلس',

                'slug_ar' =>
                    'استضافة-أمسيات-لا-تنسى-في-زيتونة-الأندلس',

                'excerpt_ar' =>
                    'اكتشف كيف يمكن لأجواء المطعم المناسبة أن تجمع بين العشاء الخاص واجتماعات الأعمال والاحتفالات العائلية في تجربة لا تُنسى.',

                'content_ar' =>
                    '<p>يمكن للمكان المناسب أن يحول لقاءً عادياً إلى أمسية مميزة تبقى في الذاكرة.</p>

                    <h2>العشاء الخاص</h2>

                    <p>تساعد الجلسات المريحة والخدمة الراقية واختيار الأطباق بعناية على توفير تجربة عشاء خاص هادئة وممتعة.</p>

                    <h2>اجتماعات الأعمال</h2>

                    <p>توفر أجواء المطعم الترحيبية بيئة مريحة للاجتماعات غير الرسمية واللقاءات المهنية بعيداً عن الأجواء التقليدية.</p>

                    <h2>الاحتفالات العائلية</h2>

                    <p>تجعل الأطباق المشتركة والأجواء الهادئة المطعم خياراً مناسباً للاحتفالات واللقاءات العائلية في الدوحة.</p>',

                'featured_image_alt_ar' =>
                    'أمسية مميزة في مطعم زيتونة الأندلس بالدوحة',

                'category_ar' =>
                    'المناسبات',

                'tags_ar' => [
                    'مناسبات الدوحة',
                    'عشاء خاص في الدوحة',
                    'احتفالات عائلية',
                    'اجتماعات الأعمال',
                ],

                'author_name_ar' =>
                    'زيتونة الأندلس',


                /*
                |--------------------------------------------------------------------------
                | Publishing
                |--------------------------------------------------------------------------
                */

                'status' =>
                    'published',

                'published_at' =>
                    '2026-08-30 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | English SEO
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword_ar' =>
                    'عشاء خاص في الدوحة',

                'secondary_keywords_ar' => [
                    'مطعم للمناسبات في الدوحة',
                    'عشاء عائلي في الدوحة',
                    'اجتماعات أعمال في الدوحة',
                    'احتفالات في الدوحة',
                ],

                'seo_title_ar' =>
                    'العشاء الخاص والمناسبات في الدوحة | زيتونة الأندلس',

                'meta_description_ar' =>
                    'استمتع بأجواء مناسبة للعشاء الخاص واللقاءات العائلية واجتماعات الأعمال في زيتونة الأندلس في الدوحة.',

                'canonical_url_ar' =>
                    null,

                'robots_ar' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'Hosting Memorable Evenings at Zaitoona',

                'og_description' =>
                    'Discover a relaxed setting for memorable gatherings in Doha.',

                'og_title_ar' =>
                    'استضافة أمسيات لا تُنسى في زيتونة الأندلس',

                'og_description_ar' =>
                    'اكتشف أجواء مثالية للقاءات الخاصة والعائلية والمناسبات في الدوحة.',


                /*
                |--------------------------------------------------------------------------
                | Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Private Dining & Gatherings in Doha',

                'twitter_description' =>
                    'Plan a memorable restaurant gathering at Zaitoona Al Andalus.',

                'twitter_title_ar' =>
                    'العشاء الخاص والمناسبات في الدوحة',

                'twitter_description_ar' =>
                    'خطط لأمسية أو مناسبة مميزة في زيتونة الأندلس في الدوحة.',


                /*
                |--------------------------------------------------------------------------
                | Schema
                |--------------------------------------------------------------------------
                */

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'Hosting Memorable Evenings at Zaitoona',

                'schema_description' =>
                    'Ideas for private dining and gatherings in Doha.',

                'schema_headline_ar' =>
                    'استضافة أمسيات لا تُنسى في زيتونة الأندلس',

                'schema_description_ar' =>
                    'أفكار للعشاء الخاص واللقاءات والمناسبات في الدوحة.',

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

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

                'title_ar' =>
                    'النهاية الحلوة: اكتشف قائمة الحلويات لدينا',

                'slug_ar' =>
                    'النهاية-الحلوة-اكتشف-قائمة-الحلويات',

                'excerpt_ar' =>
                    'لا تكتمل الوجبة المتوسطية دون لمسة حلوة. اكتشف كيف تضيف الحلويات والقهوة نهاية مثالية لتجربة الطعام الهادئة.',

                'content_ar' =>
                    '<p>تمنح الحلوى الجيدة الوجبة الفصل الأخير الذي يكمل تجربة طعام مميزة.</p>

                    <h2>نهاية متوازنة للوجبة</h2>

                    <p>بعد المزة وأطباق المشاوي، يمكن للحلوى أن تضيف نهاية أخف وأكثر راحة إلى تجربة الطعام.</p>

                    <h2>مثالية مع القهوة</h2>

                    <p>تتناسب الحلويات بشكل طبيعي مع القهوة العربية والإسبريسو والشاي، مما يسمح للأمسية بالاستمرار في أجواء مريحة دون استعجال.</p>

                    <h2>ابقَ معنا لفترة أطول</h2>

                    <p>في زيتونة الأندلس، تمثل الحلويات والقهوة جزءاً من متعة قضاء الوقت حول المائدة والاستمتاع بالأجواء.</p>',

                'featured_image_alt_ar' =>
                    'حلويات مميزة في مطعم زيتونة الأندلس',

                'category_ar' =>
                    'المأكولات',

                'tags_ar' => [
                    'حلويات الدوحة',
                    'حلويات متوسطية',
                    'القهوة والحلويات',
                    'مطاعم الدوحة',
                ],

                'author_name_ar' =>
                    'زيتونة الأندلس',


                /*
                |--------------------------------------------------------------------------
                | Publishing
                |--------------------------------------------------------------------------
                */

                'status' =>
                    'published',

                'published_at' =>
                    '2026-08-12 10:00:00',

                'is_active' =>
                    true,


                /*
                |--------------------------------------------------------------------------
                | English SEO
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic SEO
                |--------------------------------------------------------------------------
                */

                'focus_keyword_ar' =>
                    'حلويات في الدوحة',

                'secondary_keywords_ar' => [
                    'حلويات المطاعم في الدوحة',
                    'حلويات متوسطية',
                    'قهوة وحلويات في الدوحة',
                    'أفضل حلويات في الدوحة',
                ],

                'seo_title_ar' =>
                    'حلويات في الدوحة | زيتونة الأندلس',

                'meta_description_ar' =>
                    'اكتشف الحلويات والقهوة وتجربة النهاية الحلوة بعد وجبة متوسطية مميزة في زيتونة الأندلس في الدوحة.',

                'canonical_url_ar' =>
                    null,

                'robots_ar' =>
                    'index, follow',


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                'og_title' =>
                    'The Sweet Finish: Exploring Our Dessert Menu',

                'og_description' =>
                    'Discover desserts and coffee pairings at Zaitoona Al Andalus.',

                'og_title_ar' =>
                    'النهاية الحلوة: اكتشف قائمة الحلويات لدينا',

                'og_description_ar' =>
                    'اكتشف الحلويات المميزة وتوليفات القهوة في زيتونة الأندلس.',


                /*
                |--------------------------------------------------------------------------
                | Twitter / X
                |--------------------------------------------------------------------------
                */

                'twitter_title' =>
                    'Desserts in Doha | Zaitoona Al Andalus',

                'twitter_description' =>
                    'Discover the sweet finish to a Mediterranean dining experience.',

                'twitter_title_ar' =>
                    'حلويات في الدوحة | زيتونة الأندلس',

                'twitter_description_ar' =>
                    'اكتشف النهاية الحلوة لتجربة الطعام المتوسطية في زيتونة الأندلس.',


                /*
                |--------------------------------------------------------------------------
                | Schema
                |--------------------------------------------------------------------------
                */

                'schema_type' =>
                    'BlogPosting',

                'schema_headline' =>
                    'The Sweet Finish: Exploring Our Dessert Menu',

                'schema_description' =>
                    'Explore Mediterranean-inspired desserts and coffee pairings in Doha.',

                'schema_headline_ar' =>
                    'النهاية الحلوة: اكتشف قائمة الحلويات لدينا',

                'schema_description_ar' =>
                    'اكتشف الحلويات المستوحاة من المطبخ المتوسطي وتوليفات القهوة في الدوحة.',

            ]
        );
    }
}