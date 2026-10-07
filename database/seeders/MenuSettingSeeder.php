<?php

namespace Database\Seeders;

use App\Models\MenuSetting;
use Illuminate\Database\Seeder;

class MenuSettingSeeder extends Seeder
{
    public function run(): void
    {
        if (MenuSetting::query()->exists()) {
            return;
        }

        MenuSetting::create([

            'is_active' => true,

            'eyebrow_en' => 'Signature selection',
            'title_en' => 'A menu for every part of the evening.',
            'intro_en' => 'Explore the complete Zaitoona Al Andalaus menu featuring appetizers, signature grills, biryanis, artisan pizzas, refreshing mojitos, fresh juices, hot beverages, and premium shisha.',
            'menu_note_en' => 'Prices in QAR',
            'menu_footer_en' => 'Please tell our team about any allergies or dietary requirements. Menu availability can vary.',
            'reserve_text_en' => 'Reserve a table',
            'search_placeholder_en' => 'Search dish or drink...',
            'empty_message_en' => 'No matching items found.',

            'eyebrow_ar' => 'مختاراتنا',
            'title_ar' => 'قائمة تناسب كل لحظة من الأمسية.',
            'intro_ar' => 'استكشف قائمة زيتونة الأندلس الكاملة التي تضم المقبلات، المشويات الخاصة، البرياني، البيتزا، الموهيتو المنعش، العصائر الطازجة، المشروبات الساخنة، والشيشة الفاخرة.',
            'menu_note_ar' => 'الأسعار بالريال القطري',
            'menu_footer_ar' => 'يرجى إبلاغ فريقنا بأي حساسية أو متطلبات غذائية. قد يختلف توفر بعض الأصناف.',
            'reserve_text_ar' => 'احجز طاولة',
            'search_placeholder_ar' => 'ابحث عن صنف أو مشروب...',
            'empty_message_ar' => 'لا توجد أصناف مطابقة لبحثك.',

            'reserve_url' => '/reserveatable',
            'currency_label' => 'QR',

            'seo_title_en' => 'Menu | Zaitoona Al Andalaus',
            'seo_description_en' => 'Explore the complete menu at Zaitoona Al Andalaus in Doha, Qatar.',
            'seo_title_ar' => 'القائمة | زيتونة الأندلس',
            'seo_description_ar' => 'استكشف قائمة زيتونة الأندلس الكاملة في الدوحة، قطر.',

            'robots_index' => true,
            'robots_follow' => true,
            'schema_enabled' => true,

            'menu_categories' => [

                [
                    'category_en' => 'Appetizers',
                    'category_ar' => 'المقبلات',

                    'items' => [
                        ['name_en'=>'Jalapeno Cheese Balls (6 Pcs)','name_ar'=>'كرات جبن الهالبينو','price'=>'15'],
                        ['name_en'=>'Plain French Fries','name_ar'=>'البطاطس المقلية العادية','price'=>'10'],
                        ['name_en'=>'Spicy Honey With Tender Chicken','name_ar'=>'دجاج طري بالعسل الحار','price'=>'22'],
                        ['name_en'=>'Loaded Cheese Fries','name_ar'=>'بطاطس مقلية بالجبن','price'=>'18'],
                        ['name_en'=>'Crispy Fried Calamari','name_ar'=>'كالاماري مقلي مقرمش','price'=>'20'],
                        ['name_en'=>'Chicken 65','name_ar'=>'دجاج ٦٥','price'=>'22'],
                        ['name_en'=>'Buffalo Chicken Wings (6 Pcs)','name_ar'=>'أجنحة دجاج بافلو','price'=>'20'],
                        ['name_en'=>'Chicken Manchurian (11 Pcs)','name_ar'=>'تشيكن مانشوريان','price'=>'25'],
                        ['name_en'=>'Chicken Nuggets (6 Pcs)','name_ar'=>'نجيتس الدجاج','price'=>'15'],
                        ['name_en'=>'Veg. Manchurian','name_ar'=>'فيغ مانشوريان','price'=>'18'],
                        ['name_en'=>'Dynamite Shrimp (14 Pcs)','name_ar'=>'روبيان ديناميت','price'=>'25'],
                        ['name_en'=>'Garlic Bread (6 Pcs)','name_ar'=>'خبز الثوم','price'=>'15'],
                        ['name_en'=>'Drums of Heaven (6 Pcs)','name_ar'=>'أجنحة دجاج مقلية','price'=>'20'],
                        ['name_en'=>'Spring Rolls (6 Pcs)','name_ar'=>'سبرينج رول','price'=>'15'],
                        ['name_en'=>'Chicken Chilli (11 Pcs)','name_ar'=>'دجاج بالفلفل الحار','price'=>'22'],
                        ['name_en'=>'Zaitoona Classic Chicken With Mash Potato','name_ar'=>'دجاج زيتونة الكلاسيك مع البطاطس المهروسة','price'=>'25'],
                    ],
                ],

                [
                    'category_en' => 'Soups',
                    'category_ar' => 'الشوربات',

                    'items' => [
                        ['name_en'=>'Lentil Soup','name_ar'=>'حساء العدس','price'=>'10'],
                        ['name_en'=>'Manchow Soup','name_ar'=>'حساء المنشو','price'=>'12'],
                        ['name_en'=>'Hot and Sour Soup','name_ar'=>'حساء حار وحامض','price'=>'12'],
                        ['name_en'=>'Chicken Clear Soup','name_ar'=>'حساء الدجاج الصافي','price'=>'13'],
                        ['name_en'=>'Sweet Corn Soup','name_ar'=>'حساء الذرة الحلوة','price'=>'12'],
                        ['name_en'=>'Chicken Mushroom Soup','name_ar'=>'حساء الدجاج والفطر','price'=>'12'],
                        ['name_en'=>'Mushroom Soup','name_ar'=>'حساء الفطر','price'=>'14'],
                        ['name_en'=>'Chicken Thukpa Soup','name_ar'=>'حساء الدجاج التوكبا','price'=>'20'],
                        ['name_en'=>'Seafood Soup','name_ar'=>'حساء سي فود','price'=>'18'],
                        ['name_en'=>'Veg. Tukpa Soup','name_ar'=>'حساء التوكبا بالخضروات','price'=>'15'],
                        ['name_en'=>'Chicken Noodles With Corn Soup','name_ar'=>'نودلز الدجاج بحساء الذرة','price'=>'18'],
                        ['name_en'=>'Mixed Thukpa Soup','name_ar'=>'حساء التوكبا المختلطة','price'=>'25'],
                    ],
                ],

                [
                    'category_en' => 'Salads',
                    'category_ar' => 'السلطات',

                    'items' => [
                        ['name_en'=>'Green Salad','name_ar'=>'سلطة خضراء','price'=>'10'],
                        ['name_en'=>'Fattoush Salad','name_ar'=>'سلطة الفتوش','price'=>'12'],
                        ['name_en'=>'Greek Salad','name_ar'=>'سلطة يونانية','price'=>'15'],
                        ['name_en'=>'Chicken Caesar Salad','name_ar'=>'سلطة سيزر بالدجاج','price'=>'16'],
                    ],
                ],

                [
                    'category_en' => 'Pizzas & Pastas',
                    'category_ar' => 'البيتزا والباستا',

                    'items' => [
                        ['name_en'=>'Margherita Pizza (Medium)','name_ar'=>'بيتزا مارغريتا (متوسطة)','price'=>'20'],
                        ['name_en'=>'Vegetable Pizza (Medium)','name_ar'=>'بيتزا الخضار (متوسطة)','price'=>'20'],
                        ['name_en'=>'Four Cheese Pizza (Medium)','name_ar'=>'بيتزا أربع أجبان (متوسط)','price'=>'25'],
                        ['name_en'=>'Chicken Tikka Pizza (Medium)','name_ar'=>'بيتزا تيكا دجاج (متوسط)','price'=>'25'],
                        ['name_en'=>'BBQ Chicken Pizza (Medium)','name_ar'=>'بيتزا دجاج باربكيو (متوسطة)','price'=>'25'],
                        ['name_en'=>'Seafood Pasta','name_ar'=>'معكرونة المأكولات البحرية','price'=>'25'],
                        ['name_en'=>'Mix Sauce Chicken Pasta','name_ar'=>'مكرونة دجاج بصلصة مشكلة','price'=>'25'],
                        ['name_en'=>'Penne Arabbiata With Chicken Pasta','name_ar'=>'معكرونة بيني أرابياتا بالدجاج','price'=>'20'],
                        ['name_en'=>'Cheese Fatayer','name_ar'=>'فطائر جبن','price'=>'15'],
                        ['name_en'=>'Zaatar Fatayer','name_ar'=>'فطائر زعتر','price'=>'15'],
                    ],
                ],

                [
                    'category_en' => 'Burgers & Sandwiches',
                    'category_ar' => 'البرجر والساندويتشات',

                    'items' => [
                        ['name_en'=>'Zaitoona Special Burger','name_ar'=>'برجر زيتونة الخاص','price'=>'20'],
                        ['name_en'=>'Classic Beef Burger','name_ar'=>'برجر لحم كلاسيك','price'=>'17'],
                        ['name_en'=>'Crispy Veg. Burger','name_ar'=>'برجر نباتي مقرمش','price'=>'12'],
                        ['name_en'=>'Crispy Chicken Burger','name_ar'=>'برجر الدجاج المقرمش','price'=>'17'],
                        ['name_en'=>'Egg Club Sandwich','name_ar'=>'ساندويتش كلوب بالبيض','price'=>'15'],
                        ['name_en'=>'Chicken Club Sandwich','name_ar'=>'ساندويتش كلوب دجاج','price'=>'16'],
                        ['name_en'=>'Cheese Sandwich','name_ar'=>'ساندويتش الجبن','price'=>'10'],
                        ['name_en'=>'Butter Chicken Sandwich','name_ar'=>'ساندويتش دجاج بالزبدة','price'=>'15'],
                        ['name_en'=>'Chicken Tikka Wrap','name_ar'=>'لفائف دجاج تيكا','price'=>'15'],
                        ['name_en'=>'Crispy Chicken Wrap','name_ar'=>'لفائف الدجاج المقرمشة','price'=>'15'],
                        ['name_en'=>'Chef Special Hot Dog','name_ar'=>'هوت دوغ شيف الخاص','price'=>'10'],
                        ['name_en'=>'Omelette Sandwich','name_ar'=>'ساندويتش أومليت','price'=>'10'],
                    ],
                ],

                [
                    'category_en' => 'Zaitoona Grill Specials',
                    'category_ar' => 'مشويات زيتونة الخاصة',

                    'items' => [
                        ['name_en'=>'Sheri Fish','name_ar'=>'سمك شعري','price'=>'35'],
                        ['name_en'=>'Crab','name_ar'=>'سلطعون','price'=>'30'],
                        ['name_en'=>'Mix Kebab Platter With Fries (6 Sticks)','name_ar'=>'طبق كباب مشكل مع البطاطس المقلية','price'=>'40'],
                        ['name_en'=>'Shrimp','name_ar'=>'جمبري','price'=>'45'],
                        ['name_en'=>'Arabic Shawarma With Fries','name_ar'=>'شاورما عربية مع بطاطس مقلية','price'=>'10 / 20'],
                        ['name_en'=>'Malai Chicken Tikka With Fries (4 Sticks)','name_ar'=>'دجاج مالاي تيكا مع البطاطس المقلية','price'=>'25'],
                        ['name_en'=>'Chicken Tikka Kebab With Fries (4 Sticks)','name_ar'=>'دجاج تيكا كباب مع البطاطس المقلية','price'=>'25'],
                        ['name_en'=>'Chicken Skewers (4 Sticks)','name_ar'=>'أسياخ الدجاج','price'=>'25'],
                        ['name_en'=>'Sea Bream Fish','name_ar'=>'سمك الدنيس','price'=>'40'],
                        ['name_en'=>'Sea Bass Fish','name_ar'=>'سمك القاروص','price'=>'45'],
                        ['name_en'=>'BBQ Chicken With Fries (Half/Full)','name_ar'=>'دجاج مشوي مع البطاطس المقلية (نصف/كامل)','price'=>'20 / 40'],
                        ['name_en'=>'Butter Chicken','name_ar'=>'دجاج الزبدة','price'=>'22'],
                    ],
                ],

                [
                    'category_en' => 'Biryani, Noodles & Gravies',
                    'category_ar' => 'البرياني، النودلز والمرق',

                    'items' => [
                        ['name_en'=>'Chicken Dum Biryani','name_ar'=>'دجاج دم برياني','price'=>'20'],
                        ['name_en'=>'Mutton Dum Biryani','name_ar'=>'برياني دم الضأن','price'=>'30'],
                        ['name_en'=>'Beef Biryani','name_ar'=>'برياني اللحم','price'=>'25'],
                        ['name_en'=>'Chicken Tikka Masala','name_ar'=>'دجاج تيكا ماسالا','price'=>'25'],
                        ['name_en'=>'Veg. Noodles','name_ar'=>'نودلز نباتية','price'=>'15'],
                        ['name_en'=>'Chicken Noodles','name_ar'=>'نودلز الدجاج','price'=>'20'],
                        ['name_en'=>'Prawn Noodles','name_ar'=>'نودلز روبيان','price'=>'20'],
                        ['name_en'=>'Mixed Noodles','name_ar'=>'نودلز مشكلة','price'=>'25'],
                        ['name_en'=>'Veg. Fried Rice','name_ar'=>'أرز مقلي بالخضار','price'=>'15'],
                        ['name_en'=>'Chicken Fried Rice','name_ar'=>'أرز الدجاج المقلي','price'=>'18'],
                        ['name_en'=>'Prawn Fried Rice','name_ar'=>'أرز مقلي بالروبيان','price'=>'25'],
                        ['name_en'=>'Mixed Fried Rice','name_ar'=>'الأرز المقلي المختلط','price'=>'23'],
                        ['name_en'=>'Biryani Rice','name_ar'=>'أرز برياني','price'=>'10'],
                        ['name_en'=>'Plain Rice','name_ar'=>'الأرز العادي','price'=>'8'],
                    ],
                ],

                [
                    'category_en' => 'Desserts',
                    'category_ar' => 'الحلويات',

                    'items' => [
                        ['name_en'=>'Ice Cream (Mango / Strawberry / Vanilla)','name_ar'=>'آيس كريم (مانجو / فراولة / فانيليا)','price'=>'15'],
                        ['name_en'=>'Fruit Salad','name_ar'=>'سلطة الفواكه','price'=>'15'],
                        ['name_en'=>'Falooda','name_ar'=>'فالودا','price'=>'15'],
                        ['name_en'=>'Fruit Platter (Medium)','name_ar'=>'طبق الفواكه (وسط)','price'=>'25'],
                    ],
                ],

                [
                    'category_en' => 'Mojitos',
                    'category_ar' => 'الموهيتو',

                    'items' => [
                        ['name_en'=>'Lemon Mint (7Up / RedBull)','name_ar'=>'نعناع الليمون (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Strawberry (7Up / RedBull)','name_ar'=>'فراولة (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Watermelon (7Up / RedBull)','name_ar'=>'وترميلون (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Passion Fruit (7Up / RedBull)','name_ar'=>'باشن فروت (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Blue Lagoon (7Up / RedBull)','name_ar'=>'بلو لاجون (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Peach (7Up / RedBull)','name_ar'=>'بيتش (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Blueberry (7Up / RedBull)','name_ar'=>'توت أزرق (سفن أب / ريدبول)','price'=>'18 / 25'],
                        ['name_en'=>'Lemon-Soda','name_ar'=>'صودا الليمون','price'=>'15'],
                    ],
                ],

                [
                    'category_en' => 'Fresh Juices',
                    'category_ar' => 'عصائر طازجة',

                    'items' => [
                        ['name_en'=>'Orange','name_ar'=>'برتقال','price'=>'15'],
                        ['name_en'=>'Papaya','name_ar'=>'البابايا','price'=>'15'],
                        ['name_en'=>'Pineapple','name_ar'=>'أناناس','price'=>'15'],
                        ['name_en'=>'Avocado','name_ar'=>'الأفوكادو','price'=>'18'],
                        ['name_en'=>'Lemon','name_ar'=>'ليمون','price'=>'12'],
                        ['name_en'=>'Kiwi','name_ar'=>'كيوي','price'=>'15'],
                        ['name_en'=>'Apple','name_ar'=>'تفاح','price'=>'15'],
                        ['name_en'=>'Watermelon','name_ar'=>'بطيخ','price'=>'12'],
                        ['name_en'=>'Karkade','name_ar'=>'كركديه','price'=>'10'],
                        ['name_en'=>'Mango','name_ar'=>'مانجو','price'=>'15'],
                        ['name_en'=>'Banana','name_ar'=>'موز','price'=>'12'],
                        ['name_en'=>'Cocktail','name_ar'=>'كوكتيل','price'=>'18'],
                        ['name_en'=>'Vimto','name_ar'=>'فيمتو','price'=>'10'],
                        ['name_en'=>'Strawberry','name_ar'=>'الفراولة','price'=>'18'],
                        ['name_en'=>'Lemon Mint','name_ar'=>'ليمون بالنعناع','price'=>'15'],
                        ['name_en'=>'50-50 Juice','name_ar'=>'عصير ٥٠/٥٠','price'=>'18'],
                    ],
                ],

                [
                    'category_en' => 'Hot & Soft Drinks',
                    'category_ar' => 'مشروبات ساخنة وباردة',

                    'items' => [
                        ['name_en'=>'Red Tea','name_ar'=>'الشاي الأحمر','price'=>'5'],
                        ['name_en'=>'Green Tea','name_ar'=>'الشاي الأخضر','price'=>'5'],
                        ['name_en'=>'Lemon Tea','name_ar'=>'شاي الليمون','price'=>'5'],
                        ['name_en'=>'Ginger Tea','name_ar'=>'شاي الزنجبيل','price'=>'6'],
                        ['name_en'=>'Karak / Milk Tea','name_ar'=>'شاي كرك / شاي بالحليب','price'=>'6'],
                        ['name_en'=>'Zaatar Tea','name_ar'=>'شاي الزعتر','price'=>'6'],
                        ['name_en'=>'Anise Tea','name_ar'=>'شاي اليانسون','price'=>'6'],
                        ['name_en'=>'Cappuccino','name_ar'=>'كابتشينو','price'=>'10'],
                        ['name_en'=>'Karkade Tea','name_ar'=>'شاي الكركديه','price'=>'6'],
                        ['name_en'=>'Black Coffee','name_ar'=>'القهوة السوداء','price'=>'8'],
                        ['name_en'=>'Nescafe','name_ar'=>'نسكافيه','price'=>'8'],
                        ['name_en'=>'Hot Chocolate','name_ar'=>'شوكولاتة ساخنة','price'=>'8'],
                        ['name_en'=>'Espresso (Single/Double)','name_ar'=>'إسبريسو','price'=>'8 / 15'],
                        ['name_en'=>'Turkish Coffee (Single/Double)','name_ar'=>'القهوة التركية','price'=>'10 / 15'],
                        ['name_en'=>'Soft Drinks','name_ar'=>'المشروبات الغازية','price'=>'5'],
                        ['name_en'=>'Red Bull','name_ar'=>'ريد بول','price'=>'15'],
                        ['name_en'=>'Barbican','name_ar'=>'باربيكان','price'=>'8'],
                        ['name_en'=>'Drinking Water (Small/Big)','name_ar'=>'مياه معدنية (صغير/كبير)','price'=>'2 / 4'],
                    ],
                ],

                [
                    'category_en' => 'Shisha',
                    'category_ar' => 'شيشة',

                    'items' => [
                        ['name_en'=>'Double Apple','name_ar'=>'تفاحتين','price'=>'35'],
                        ['name_en'=>'Grape','name_ar'=>'العنب','price'=>'35'],
                        ['name_en'=>'Mint','name_ar'=>'النعناع','price'=>'35'],
                        ['name_en'=>'Blueberry','name_ar'=>'التوت الأزرق','price'=>'35'],
                        ['name_en'=>'Watermelon','name_ar'=>'البطيخ','price'=>'35'],
                        ['name_en'=>'Orange','name_ar'=>'البرتقال','price'=>'35'],
                        ['name_en'=>'Gum','name_ar'=>'علكة','price'=>'35'],
                        ['name_en'=>'Love 66','name_ar'=>'لاف ٦٦','price'=>'40'],
                        ['name_en'=>'Grape With Mint','name_ar'=>'عنب مع نعناع','price'=>'35'],
                        ['name_en'=>'Grape With Berry','name_ar'=>'عنب مع توت','price'=>'35'],
                        ['name_en'=>'Lemon With Mint','name_ar'=>'الليمون مع النعناع','price'=>'35'],
                        ['name_en'=>'Apple With Mint','name_ar'=>'تفاح مع نعناع','price'=>'35'],
                        ['name_en'=>'Pan Rasna','name_ar'=>'بان رسنا','price'=>'35'],
                        ['name_en'=>'Sallom','name_ar'=>'سالوم','price'=>'25'],
                        ['name_en'=>'Lady Killer','name_ar'=>'ليدي كيلر','price'=>'40'],
                        ['name_en'=>'Double Apple Nakhla','name_ar'=>'تفاحتين نخلة','price'=>'40'],
                        ['name_en'=>'All Shisha Head Change','name_ar'=>'تغيير رأس الشيشة','price'=>'25'],
                        ['name_en'=>'Sallom Head Change','name_ar'=>'تغيير رأس سالوم','price'=>'20'],
                    ],
                ],

            ],
        ]);
    }
}