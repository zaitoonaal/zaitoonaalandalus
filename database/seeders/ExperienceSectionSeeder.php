<?php

namespace Database\Seeders;

use App\Models\ExperienceSection;
use Illuminate\Database\Seeder;

class ExperienceSectionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | FIRST EXPERIENCE BLOCK
        |--------------------------------------------------------------------------
        */

        ExperienceSection::query()
            ->firstOrCreate(
                [
                    'title_en' =>
                        'Made for sharing, remembered for flavour.',
                ],
                [
                    'eyebrow_en' =>
                        'Culinary mastery',

                    'description_en' =>
                        'Begin with mezze, move into flame-grilled favourites, then leave space for something sweet. Our menu is designed around generous plates, fresh ingredients and the pleasure of sharing.',

                    'list_1_en' =>
                        'Levantine & Mediterranean inspiration',

                    'list_2_en' =>
                        'Charcoal grill signatures',

                    'list_3_en' =>
                        'Fresh desserts, coffee & tea',

                    'button_label_en' =>
                        'See signature menu',


                    'eyebrow_ar' =>
                        'إتقان الطهي',

                    'title_ar' =>
                        'أطباق للمشاركة ونكهات تبقى في الذاكرة.',

                    'description_ar' =>
                        'ابدأ بالمقبلات، ثم انتقل إلى أطباق الفحم المميزة واترك مساحة للحلو. صممنا قائمتنا حول الكرم، المكونات الطازجة ومتعة المشاركة.',

                    'list_1_ar' =>
                        'إلهام شامي ومتوسطي',

                    'list_2_ar' =>
                        'توقيعات الشواء على الفحم',

                    'list_3_ar' =>
                        'حلويات طازجة وقهوة وشاي',

                    'button_label_ar' =>
                        'شاهد القائمة المختارة',


                    'image_url' =>
                        'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1600&q=88',

                    'image_alt_en' =>
                        'Fresh Mediterranean food',

                    'image_alt_ar' =>
                        'أطباق متوسطية طازجة',


                    'button_url' =>
                        '/menu',

                    'button_style' =>
                        'outline',

                    'sort_order' =>
                        1,

                    'is_active' =>
                        true,
                ]
            );


        /*
        |--------------------------------------------------------------------------
        | SECOND EXPERIENCE BLOCK
        |--------------------------------------------------------------------------
        */

        ExperienceSection::query()
            ->firstOrCreate(
                [
                    'title_en' =>
                        'An evening with no reason to rush.',
                ],
                [
                    'eyebrow_en' =>
                        'Relax with us',

                    'description_en' =>
                        'Zaitoona is shaped for easy gatherings — business catch-ups, family dinners, coffee with friends or a long shisha session after sunset.',

                    'list_1_en' =>
                        'Comfortable lounge seating',

                    'list_2_en' =>
                        'Calm day-to-night atmosphere',

                    'list_3_en' =>
                        'Attentive table service',

                    'button_label_en' =>
                        'Book your experience',


                    'eyebrow_ar' =>
                        'استرخِ معنا',

                    'title_ar' =>
                        'أمسية لا تحتاج إلى استعجال.',

                    'description_ar' =>
                        'صُممت زيتونة للقاءات السهلة — اجتماع عمل، عشاء عائلي، قهوة مع الأصدقاء أو جلسة شيشة طويلة بعد الغروب.',

                    'list_1_ar' =>
                        'جلسات لاونج مريحة',

                    'list_2_ar' =>
                        'أجواء هادئة من النهار إلى الليل',

                    'list_3_ar' =>
                        'خدمة طاولات باهتمام',

                    'button_label_ar' =>
                        'احجز تجربتك',


                    'image_url' =>
                        'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=1600&q=88',

                    'image_alt_en' =>
                        'Relaxed cafe and lounge ambience',

                    'image_alt_ar' =>
                        'أجواء مقهى ولاونج هادئة',


                    'button_url' =>
                        '/reserveatable',

                    'button_style' =>
                        'primary',

                    'sort_order' =>
                        2,

                    'is_active' =>
                        true,
                ]
            );
    }
}