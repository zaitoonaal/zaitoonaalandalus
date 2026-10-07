<?php

namespace Database\Seeders;

use App\Models\ShishaShowcaseSetting;
use Illuminate\Database\Seeder;

class ShishaShowcaseSettingSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Do Not Overwrite Existing Admin Data
        |--------------------------------------------------------------------------
        */

        if (
            ShishaShowcaseSetting::query()
                ->exists()
        ) {
            return;
        }


        ShishaShowcaseSetting::query()
            ->create([

                /*
                |--------------------------------------------------------------------------
                | English
                |--------------------------------------------------------------------------
                */

                'eyebrow_en' =>
                    'The shisha ritual',

                'title_en' =>
                    'Prepared with care. Enjoyed without hurry.',

                'description_en' =>
                    'Choose your profile, settle in and leave the details to our shisha team. From familiar classics to deeper premium blends, each session is balanced for a smooth, consistent experience.',


                'card_1_title_en' =>
                    'Classic',

                'card_1_text_en' =>
                    'Bright, familiar flavours with a smooth easy draw.',


                'card_2_title_en' =>
                    'Signature',

                'card_2_text_en' =>
                    'House combinations layered for aroma, freshness and depth.',


                'card_3_title_en' =>
                    'Premium',

                'card_3_text_en' =>
                    'Richer leaf profiles for guests who prefer a more full-bodied session.',


                'card_4_title_en' =>
                    'Fresh Head',

                'card_4_text_en' =>
                    'Ask our team about seasonal fruit and specialty presentations.',


                'legal_text_en' =>
                    'Shisha service is offered in accordance with applicable local regulations.',


                /*
                |--------------------------------------------------------------------------
                | Arabic
                |--------------------------------------------------------------------------
                */

                'eyebrow_ar' =>
                    'طقس الشيشة',

                'title_ar' =>
                    'تحضير بعناية. ومتعة بلا استعجال.',

                'description_ar' =>
                    'اختر الطابع الذي تفضله واترك التفاصيل لفريق الشيشة. من النكهات الكلاسيكية إلى الخلطات البريميوم الأعمق، نضبط كل جلسة لتكون سلسة ومتوازنة.',


                'card_1_title_ar' =>
                    'كلاسيك',

                'card_1_text_ar' =>
                    'نكهات مألوفة ومنعشة بسحبة سلسة.',


                'card_2_title_ar' =>
                    'توقيعنا',

                'card_2_text_ar' =>
                    'خلطات بيتية بطبقات من العطر والانتعاش والعمق.',


                'card_3_title_ar' =>
                    'بريميوم',

                'card_3_text_ar' =>
                    'نكهات أغنى لمن يفضلون جلسة أكثر امتلاءً.',


                'card_4_title_ar' =>
                    'رأس فواكه',

                'card_4_text_ar' =>
                    'اسأل فريقنا عن الفواكه الموسمية والتقديمات الخاصة.',


                'legal_text_ar' =>
                    'تُقدّم خدمة الشيشة وفقاً للأنظمة المحلية المعمول بها.',


                /*
                |--------------------------------------------------------------------------
                | Status
                |--------------------------------------------------------------------------
                */

                'is_active' =>
                    true,

            ]);
    }
}