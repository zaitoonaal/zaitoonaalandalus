<?php

namespace Database\Seeders;

use App\Models\TestimonialSection;
use Illuminate\Database\Seeder;

class TestimonialSectionSeeder extends Seeder
{
    public function run(): void
    {
        TestimonialSection::query()
            ->firstOrCreate(
                [
                    'eyebrow_en' =>
                        'What the evening should feel like',
                ],
                [
                    'eyebrow_ar' =>
                        'هكذا يجب أن تشعر الأمسية',

                    'is_active' =>
                        true,

                    'testimonials' => [

                        [
                            'quote_en' =>
                                'Elegant without feeling formal — the kind of place where dinner naturally becomes coffee, shisha and another hour with friends.',

                            'author_en' =>
                                'Zaitoona Guest Experience',

                            'quote_ar' =>
                                'راقي من دون تكلّف — المكان الذي يتحول فيه العشاء بشكل طبيعي إلى قهوة وشيشة وساعة إضافية مع الأصدقاء.',

                            'author_ar' =>
                                'تجربة ضيف زيتونة',

                            'rating' =>
                                5,

                            'is_active' =>
                                true,
                        ],

                        [
                            'quote_en' =>
                                'Warm service, a calm atmosphere and a menu made for sharing. Exactly what a Doha evening should feel like.',

                            'author_en' =>
                                'Zaitoona Guest Experience',

                            'quote_ar' =>
                                'خدمة دافئة، أجواء هادئة وقائمة مصممة للمشاركة. هكذا يجب أن تكون أمسية الدوحة.',

                            'author_ar' =>
                                'تجربة ضيف زيتونة',

                            'rating' =>
                                5,

                            'is_active' =>
                                true,
                        ],

                        [
                            'quote_en' =>
                                'Come for the grill, stay for Arabic coffee and a beautifully prepared shisha. The pace of the place is the real luxury.',

                            'author_en' =>
                                'Zaitoona Guest Experience',

                            'quote_ar' =>
                                'تعال للمشاوي، وابقَ للقهوة العربية والشيشة المحضّرة بإتقان. هدوء المكان هو الفخامة الحقيقية.',

                            'author_ar' =>
                                'تجربة ضيف زيتونة',

                            'rating' =>
                                5,

                            'is_active' =>
                                true,
                        ],

                    ],
                ]
            );
    }
}