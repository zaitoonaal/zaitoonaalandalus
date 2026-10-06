const CONFIG = {
  phoneDisplay: "+974 3385 8316",
  phoneDial: "+97433858316",
  whatsapp: "97433858316",
  email: "hello@zaitoona.qa",
  address: "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};

const MENU = {
  en: {
    "Appetizers": [
      ["Jalapeno Cheese Balls (6 Pcs)", "كرات جبن الهالبينو", "15"],
      ["Plain French Fries", "البطاطس المقلية العادية", "10"],
      ["Spicy Honey With Tender Chicken", "دجاج طري بالعسل الحار", "22"],
      ["Loaded Cheese Fries", "بطاطس مقلية بالجبن", "18"],
      ["Crispy Fried Calamari", "كالاماري مقلي مقرمش", "20"],
      ["Chicken 65", "دجاج ٦٥", "22"],
      ["Buffalo Chicken Wings (6 Pcs)", "أجنحة دجاج بافلو", "20"],
      ["Chicken Manchurian (11 Pcs)", "تشيكن مانشوريان", "25"],
      ["Chicken Nuggets (6 Pcs)", "نجيتس الدجاج", "15"],
      ["Veg. Manchurian", "فيغ مانشوريان", "18"],
      ["Dynamite Shrimp (14 Pcs)", "روبيان ديناميت", "25"],
      ["Garlic Bread (6 Pcs)", "خبز الثوم", "15"],
      ["Drums of Heaven (6 Pcs)", "أجنحة دجاج مقلية", "20"],
      ["Spring Rolls (6 Pcs)", "سبرينج رول", "15"],
      ["Chicken Chilli (11 Pcs)", "دجاج بالفلفل الحار", "22"],
      ["Zaitoona Classic Chicken With Mash Potato", "دجاج زيتونة الكلاسيك مع البطاطس المهروسة", "25"]
    ],
    "Soups": [
      ["Lentil Soup", "حساء العدس", "10"],
      ["Manchow Soup", "حساء المنشو", "12"],
      ["Hot and Sour Soup", "حساء حار وحامض", "12"],
      ["Chicken Clear Soup", "حساء الدجاج الصافي", "13"],
      ["Sweet Corn Soup", "حساء الذرة الحلوة", "12"],
      ["Chicken Mushroom Soup", "حساء الدجاج والفطر", "12"],
      ["Mushroom Soup", "حساء الفطر", "14"],
      ["Chicken Thukpa Soup", "حساء الدجاج التوكبا", "20"],
      ["Seafood Soup", "حساء سي فود", "18"],
      ["Veg. Tukpa Soup", "حساء التوكبا بالخضروات", "15"],
      ["Chicken Noodles With Corn Soup", "نودلز الدجاج بحساء الذرة", "18"],
      ["Mixed Thukpa Soup", "حساء التوكبا المختلطة", "25"]
    ],
    "Salads": [
      ["Green Salad", "سلطة خضراء", "10"],
      ["Fattoush Salad", "سلطة الفتوش", "12"],
      ["Greek Salad", "سلطة يونانية", "15"],
      ["Chicken Caesar Salad", "سلطة سيزر بالدجاج", "16"]
    ],
    "Pizzas & Pastas": [
      ["Margherita Pizza (Medium)", "بيتزا مارغريتا (متوسطة)", "20"],
      ["Vegetable Pizza (Medium)", "بيتزا الخضار (متوسطة)", "20"],
      ["Four Cheese Pizza (Medium)", "بيتزا أربع أجبان (متوسط)", "25"],
      ["Chicken Tikka Pizza (Medium)", "بيتزا تيكا دجاج (متوسط)", "25"],
      ["BBQ Chicken Pizza (Medium)", "بيتزا دجاج باربكيو (متوسطة)", "25"],
      ["Seafood Pasta", "معكرونة المأكولات البحرية", "25"],
      ["Mix Sauce Chicken Pasta", "مكرونة دجاج بصلصة مشكلة", "25"],
      ["Penne Arabbiata With Chicken Pasta", "معكرونة بيني أرابياتا بالدجاج", "20"],
      ["Cheese Fatayer", "فطائر جبن", "15"],
      ["Zaatar Fatayer", "فطائر زعتر", "15"]
    ],
    "Burgers & Sandwiches": [
      ["Zaitoona Special Burger", "برجر زيتونة الخاص", "20"],
      ["Classic Beef Burger", "برجر لحم كلاسيك", "17"],
      ["Crispy Veg. Burger", "برجر نباتي مقرمش", "12"],
      ["Crispy Chicken Burger", "برجر الدجاج المقرمش", "17"],
      ["Egg Club Sandwich", "ساندويتش كلوب بالبيض", "15"],
      ["Chicken Club Sandwich", "ساندويتش كلوب دجاج", "16"],
      ["Cheese Sandwich", "ساندويتش الجبن", "10"],
      ["Butter Chicken Sandwich", "ساندويتش دجاج بالزبدة", "15"],
      ["Chicken Tikka Wrap", "لفائف دجاج تيكا", "15"],
      ["Crispy Chicken Wrap", "لفائف الدجاج المقرمشة", "15"],
      ["Chef Special Hot Dog", "هوت دوغ شيف الخاص", "10"],
      ["Omelette Sandwich", "ساندويتش أومليت", "10"]
    ],
    "Zaitoona Grill Specials": [
      ["Sheri Fish", "سمك شعري", "35"],
      ["Crab", "سلطعون", "30"],
      ["Mix Kebab Platter With Fries (6 Sticks)", "طبق كباب مشكل مع البطاطس المقلية", "40"],
      ["Shrimp", "جمبري", "45"],
      ["Arabic Shawarma With Fries", "شاورما عربية مع بطاطس مقلية", "10 / 20"],
      ["Malai Chicken Tikka With Fries (4 Sticks)", "دجاج مالاي تيكا مع البطاطس المقلية", "25"],
      ["Chicken Tikka Kebab With Fries (4 Sticks)", "دجاج تيكا كباب مع البطاطس المقلية", "25"],
      ["Chicken Skewers (4 Sticks)", "أسياخ الدجاج", "25"],
      ["Sea Bream Fish", "سمك الدنيس", "40"],
      ["Sea Bass Fish", "سمك القاروص", "45"],
      ["BBQ Chicken With Fries (Half/Full)", "دجاج مشوي مع البطاطس المقلية (نصف/كامل)", "20 / 40"],
      ["Butter Chicken", "دجاج الزبدة", "22"]
    ],
    "Biryani, Noodles & Gravies": [
      ["Chicken Dum Biryani", "دجاج دم برياني", "20"],
      ["Mutton Dum Biryani", "برياني دم الضأن", "30"],
      ["Beef Biryani", "برياني اللحم", "25"],
      ["Chicken Tikka Masala", "دجاج تيكا ماسالا", "25"],
      ["Veg. Noodles", "نودلز نباتية", "15"],
      ["Chicken Noodles", "نودلز الدجاج", "20"],
      ["Prawn Noodles", "نودلز روبيان", "20"],
      ["Mixed Noodles", "نودلز مشكلة", "25"],
      ["Veg. Fried Rice", "أرز مقلي بالخضار", "15"],
      ["Chicken Fried Rice", "أرز الدجاج المقلي", "18"],
      ["Prawn Fried Rice", "أرز مقلي بالروبيان", "25"],
      ["Mixed Fried Rice", "الأرز المقلي المختلط", "23"],
      ["Biryani Rice", "أرز برياني", "10"],
      ["Plain Rice", "الأرز العادي", "8"]
    ],
    "Desserts": [
      ["Ice Cream (Mango / Strawberry / Vanilla)", "آيس كريم (مانجو / فراولة / فانيليا)", "15"],
      ["Fruit Salad", "سلطة الفواكه", "15"],
      ["Falooda", "فالودا", "15"],
      ["Fruit Platter (Medium)", "طبق الفواكه (وسط)", "25"]
    ],
    "Mojitos": [
      ["Lemon Mint (7Up / RedBull)", "نعناع الليمون (سفن أب / ريدبول)", "18 / 25"],
      ["Strawberry (7Up / RedBull)", "فراولة (سفن أب / ريدبول)", "18 / 25"],
      ["Watermelon (7Up / RedBull)", "وترميلون (سفن أب / ريدبول)", "18 / 25"],
      ["Passion Fruit (7Up / RedBull)", "باشن فروت (سفن أب / ريدبول)", "18 / 25"],
      ["Blue Lagoon (7Up / RedBull)", "بلو لاجون (سفن أب / ريدبول)", "18 / 25"],
      ["Peach (7Up / RedBull)", "بيتش (سفن أب / ريدبول)", "18 / 25"],
      ["Blueberry (7Up / RedBull)", "توت أزرق (سفن أب / ريدبول)", "18 / 25"],
      ["Lemon-Soda", "صودا الليمون", "15"]
    ],
    "Fresh Juices": [
      ["Orange", "برتقال", "15"],
      ["Papaya", "البابايا", "15"],
      ["Pineapple", "أناناس", "15"],
      ["Avocado", "الأفوكادو", "18"],
      ["Lemon", "ليمون", "12"],
      ["Kiwi", "كيوي", "15"],
      ["Apple", "تفاح", "15"],
      ["Watermelon", "بطيخ", "12"],
      ["Karkade", "كركديه", "10"],
      ["Mango", "مانجو", "15"],
      ["Banana", "موز", "12"],
      ["Cocktail", "كوكتيل", "18"],
      ["Vimto", "فيمتو", "10"],
      ["Strawberry", "الفراولة", "18"],
      ["Lemon Mint", "ليمون بالنعناع", "15"],
      ["50-50 Juice", "عصير ٥٠/٥٠", "18"]
    ],
    "Hot & Soft Drinks": [
      ["Red Tea", "الشاي الأحمر", "5"],
      ["Green Tea", "الشاي الأخضر", "5"],
      ["Lemon Tea", "شاي الليمون", "5"],
      ["Ginger Tea", "شاي الزنجبيل", "6"],
      ["Karak / Milk Tea", "شاي كرك / شاي بالحليب", "6"],
      ["Zaatar Tea", "شاي الزعتر", "6"],
      ["Anise Tea", "شاي اليانسون", "6"],
      ["Cappuccino", "كابتشينو", "10"],
      ["Karkade Tea", "شاي الكركديه", "6"],
      ["Black Coffee", "القهوة السوداء", "8"],
      ["Nescafe", "نسكافيه", "8"],
      ["Hot Chocolate", "شوكولاتة ساخنة", "8"],
      ["Espresso (Single/Double)", "إسبريسو", "8 / 15"],
      ["Turkish Coffee (Single/Double)", "القهوة التركية", "10 / 15"],
      ["Soft Drinks", "المشروبات الغازية", "5"],
      ["Red Bull", "ريد بول", "15"],
      ["Barbican", "باربيكان", "8"],
      ["Drinking Water (Small/Big)", "مياه معدنية (صغير/كبير)", "2 / 4"]
    ],
    "Shisha": [
      ["Double Apple", "تفاحتين", "35"],
      ["Grape", "العنب", "35"],
      ["Mint", "النعناع", "35"],
      ["Blueberry", "التوت الأزرق", "35"],
      ["Watermelon", "البطيخ", "35"],
      ["Orange", "البرتقال", "35"],
      ["Gum", "علكة", "35"],
      ["Love 66", "لاف ٦٦", "40"],
      ["Grape With Mint", "عنب مع نعناع", "35"],
      ["Grape With Berry", "عنب مع توت", "35"],
      ["Lemon With Mint", "الليمون مع النعناع", "35"],
      ["Apple With Mint", "تفاح مع نعناع", "35"],
      ["Pan Rasna", "بان رسنا", "35"],
      ["Sallom", "سالوم", "25"],
      ["Lady Killer", "ليدي كيلر", "40"],
      ["Double Apple Nakhla", "تفاحتين نخلة", "40"],
      ["All Shisha Head Change", "تغيير رأس الشيشة", "25"],
      ["Sallom Head Change", "تغيير رأس سالوم", "20"]
    ]
  },
  ar: {
    "المقبلات": [
      ["كرات جبن الهالبينو", "Jalapeno Cheese Balls (6 Pcs)", "15"],
      ["البطاطس المقلية العادية", "Plain French Fries", "10"],
      ["دجاج طري بالعسل الحار", "Spicy Honey With Tender Chicken", "22"],
      ["بطاطس مقلية بالجبن", "Loaded Cheese Fries", "18"],
      ["كالاماري مقلي مقرمش", "Crispy Fried Calamari", "20"],
      ["دجاج ٦٥", "Chicken 65", "22"],
      ["أجنحة دجاج بافلو", "Buffalo Chicken Wings (6 Pcs)", "20"],
      ["تشيكن مانشوريان", "Chicken Manchurian (11 Pcs)", "25"],
      ["نجيتس الدجاج", "Chicken Nuggets (6 Pcs)", "15"],
      ["فيغ مانشوريان", "Veg. Manchurian", "18"],
      ["روبيان ديناميت", "Dynamite Shrimp (14 Pcs)", "25"],
      ["خبز الثوم", "Garlic Bread (6 Pcs)", "15"],
      ["أجنحة دجاج مقلية", "Drums of Heaven (6 Pcs)", "20"],
      ["سبرينج رول", "Spring Rolls (6 Pcs)", "15"],
      ["دجاج بالفلفل الحار", "Chicken Chilli (11 Pcs)", "22"],
      ["دجاج زيتونة الكلاسيك مع البطاطس المهروسة", "Zaitoona Classic Chicken With Mash Potato", "25"]
    ],
    "الشوربات": [
      ["حساء العدس", "Lentil Soup", "10"],
      ["حساء المنشو", "Manchow Soup", "12"],
      ["حساء حار وحامض", "Hot and Sour Soup", "12"],
      ["حساء الدجاج الصافي", "Chicken Clear Soup", "13"],
      ["حساء الذرة الحلوة", "Sweet Corn Soup", "12"],
      ["حساء الدجاج والفطر", "Chicken Mushroom Soup", "12"],
      ["حساء الفطر", "Mushroom Soup", "14"],
      ["حساء الدجاج التوكبا", "Chicken Thukpa Soup", "20"],
      ["حساء سي فود", "Seafood Soup", "18"],
      ["حساء التوكبا بالخضروات", "Veg. Tukpa Soup", "15"],
      ["نودلز الدجاج بحساء الذرة", "Chicken Noodles With Corn Soup", "18"],
      ["حساء التوكبا المختلطة", "Mixed Thukpa Soup", "25"]
    ],
    "السلطات": [
      ["سلطة خضراء", "Green Salad", "10"],
      ["سلطة الفتوش", "Fattoush Salad", "12"],
      ["سلطة يونانية", "Greek Salad", "15"],
      ["سلطة سيزر بالدجاج", "Chicken Caesar Salad", "16"]
    ],
    "البيتزا والباستا": [
      ["بيتزا مارغريتا (متوسطة)", "Margherita Pizza (Medium)", "20"],
      ["بيتزا الخضار (متوسطة)", "Vegetable Pizza (Medium)", "20"],
      ["بيتزا أربع أجبان (متوسط)", "Four Cheese Pizza (Medium)", "25"],
      ["بيتزا تيكا دجاج (متوسط)", "Chicken Tikka Pizza (Medium)", "25"],
      ["بيتزا دجاج باربكيو (متوسطة)", "BBQ Chicken Pizza (Medium)", "25"],
      ["معكرونة المأكولات البحرية", "Seafood Pasta", "25"],
      ["مكرونة دجاج بصلصة مشكلة", "Mix Sauce Chicken Pasta", "25"],
      ["معكرونة بيني أرابياتا بالدجاج", "Penne Arabbiata With Chicken Pasta", "20"],
      ["فطائر جبن", "Cheese Fatayer", "15"],
      ["فطائر زعتر", "Zaatar Fatayer", "15"]
    ],
    "البرجر والساندويتشات": [
      ["برجر زيتونة الخاص", "Zaitoona Special Burger", "20"],
      ["برجر لحم كلاسيك", "Classic Beef Burger", "17"],
      ["برجر نباتي مقرمش", "Crispy Veg. Burger", "12"],
      ["برجر الدجاج المقرمش", "Crispy Chicken Burger", "17"],
      ["ساندويتش كلوب بالبيض", "Egg Club Sandwich", "15"],
      ["ساندويتش كلوب دجاج", "Chicken Club Sandwich", "16"],
      ["ساندويتش الجبن", "Cheese Sandwich", "10"],
      ["ساندويتش دجاج بالزبدة", "Butter Chicken Sandwich", "15"],
      ["لفائف دجاج تيكا", "Chicken Tikka Wrap", "15"],
      ["لفائف الدجاج المقرمشة", "Crispy Chicken Wrap", "15"],
      ["هوت دوغ شيف الخاص", "Chef Special Hot Dog", "10"],
      ["ساندويتش أومليت", "Omelette Sandwich", "10"]
    ],
    "مشويات زيتونة الخاصة": [
      ["سمك شعري", "Sheri Fish", "35"],
      ["سلطعون", "Crab", "30"],
      ["طبق كباب مشكل مع البطاطس المقلية", "Mix Kebab Platter With Fries (6 Sticks)", "40"],
      ["جمبري", "Shrimp", "45"],
      ["شاورما عربية مع بطاطس مقلية", "Arabic Shawarma With Fries", "10 / 20"],
      ["دجاج مالاي تيكا مع البطاطس المقلية", "Malai Chicken Tikka With Fries (4 Sticks)", "25"],
      ["دجاج تيكا كباب مع البطاطس المقلية", "Chicken Tikka Kebab With Fries (4 Sticks)", "25"],
      ["أسياخ الدجاج", "Chicken Skewers (4 Sticks)", "25"],
      ["سمك الدنيس", "Sea Bream Fish", "40"],
      ["سمك القاروص", "Sea Bass Fish", "45"],
      ["دجاج مشوي مع البطاطس المقلية (نصف/كامل)", "BBQ Chicken With Fries (Half/Full)", "20 / 40"],
      ["دجاج الزبدة", "Butter Chicken", "22"]
    ],
    "البرياني، النودلز والمرق": [
      ["دجاج دم برياني", "Chicken Dum Biryani", "20"],
      ["برياني دم الضأن", "Mutton Dum Biryani", "30"],
      ["برياني اللحم", "Beef Biryani", "25"],
      ["دجاج تيكا ماسالا", "Chicken Tikka Masala", "25"],
      ["نودلز نباتية", "Veg. Noodles", "15"],
      ["نودلز الدجاج", "Chicken Noodles", "20"],
      ["نودلز روبيان", "Prawn Noodles", "20"],
      ["نودلز مشكلة", "Mixed Noodles", "25"],
      ["أرز مقلي بالخضار", "Veg. Fried Rice", "15"],
      ["أرز الدجاج المقلي", "Chicken Fried Rice", "18"],
      ["أرز مقلي بالروبيان", "Prawn Fried Rice", "25"],
      ["الأرز المقلي المختلط", "Mixed Fried Rice", "23"],
      ["أرز برياني", "Biryani Rice", "10"],
      ["الأرز العادي", "Plain Rice", "8"]
    ],
    "الحلويات": [
      ["آيس كريم (مانجو / فراولة / فانيليا)", "Ice Cream (Mango / Strawberry / Vanilla)", "15"],
      ["سلطة الفواكه", "Fruit Salad", "15"],
      ["فالودا", "Falooda", "15"],
      ["طبق الفواكه (وسط)", "Fruit Platter (Medium)", "25"]
    ],
    "الموهيتو": [
      ["نعناع الليمون (سفن أب / ريدبول)", "Lemon Mint (7Up / RedBull)", "18 / 25"],
      ["فراولة (سفن أب / ريدبول)", "Strawberry (7Up / RedBull)", "18 / 25"],
      ["وترميلون (سفن أب / ريدبول)", "Watermelon (7Up / RedBull)", "18 / 25"],
      ["باشن فروت (سفن أب / ريدبول)", "Passion Fruit (7Up / RedBull)", "18 / 25"],
      ["بلو لاجون (سفن أب / ريدبول)", "Blue Lagoon (7Up / RedBull)", "18 / 25"],
      ["بيتش (سفن أب / ريدبول)", "Peach (7Up / RedBull)", "18 / 25"],
      ["توت أزرق (سفن أب / ريدبول)", "Blueberry (7Up / RedBull)", "18 / 25"],
      ["صودا الليمون", "Lemon-Soda", "15"]
    ],
    "عصائر طازجة": [
      ["برتقال", "Orange", "15"],
      ["البابايا", "Papaya", "15"],
      ["أناناس", "Pineapple", "15"],
      ["الأفوكادو", "Avocado", "18"],
      ["ليمون", "Lemon", "12"],
      ["كيوي", "Kiwi", "15"],
      ["تفاح", "Apple", "15"],
      ["بطيخ", "Watermelon", "12"],
      ["كركديه", "Karkade", "10"],
      ["مانجو", "Mango", "15"],
      ["موز", "Banana", "12"],
      ["كوكتيل", "Cocktail", "18"],
      ["فيمتو", "Vimto", "10"],
      ["الفراولة", "Strawberry", "18"],
      ["ليمون بالنعناع", "Lemon Mint", "15"],
      ["عصير ٥٠/٥٠", "50-50 Juice", "18"]
    ],
    "مشروبات ساخنة وباردة": [
      ["الشاي الأحمر", "Red Tea", "5"],
      ["الشاي الأخضر", "Green Tea", "5"],
      ["شاي الليمون", "Lemon Tea", "5"],
      ["شاي الزنجبيل", "Ginger Tea", "6"],
      ["شاي كرك / شاي بالحليب", "Karak / Milk Tea", "6"],
      ["شاي الزعتر", "Zaatar Tea", "6"],
      ["شاي اليانسون", "Anise Tea", "6"],
      ["كابتشينو", "Cappuccino", "10"],
      ["شاي الكركديه", "Karkade Tea", "6"],
      ["القهوة السوداء", "Black Coffee", "8"],
      ["نسكافيه", "Nescafe", "8"],
      ["شوكولاتة ساخنة", "Hot Chocolate", "8"],
      ["إسبريسو", "Espresso (Single/Double)", "8 / 15"],
      ["القهوة التركية", "Turkish Coffee (Single/Double)", "10 / 15"],
      ["المشروبات الغازية", "Soft Drinks", "5"],
      ["ريد بول", "Red Bull", "15"],
      ["باربيكان", "Barbican", "8"],
      ["مياه معدنية (صغير/كبير)", "Drinking Water (Small/Big)", "2 / 4"]
    ],
    "شيشة": [
      ["تفاحتين", "Double Apple", "35"],
      ["العنب", "Grape", "35"],
      ["النعناع", "Mint", "35"],
      ["التوت الأزرق", "Blueberry", "35"],
      ["البطيخ", "Watermelon", "35"],
      ["البرتقال", "Orange", "35"],
      ["علكة", "Gum", "35"],
      ["لاف ٦٦", "Love 66", "40"],
      ["عنب مع نعناع", "Grape With Mint", "35"],
      ["عنب مع توت", "Grape With Berry", "35"],
      ["الليمون مع النعناع", "Lemon With Mint", "35"],
      ["تفاح مع نعناع", "Apple With Mint", "35"],
      ["بان رسنا", "Pan Rasna", "35"],
      ["سالوم", "Sallom", "25"],
      ["ليدي كيلر", "Lady Killer", "40"],
      ["تفاحتين نخلة", "Double Apple Nakhla", "40"],
      ["تغيير رأس الشيشة", "All Shisha Head Change", "25"],
      ["تغيير رأس سالوم", "Sallom Head Change", "20"]
    ]
  }
};

const I18N = {
  en:{
    announce1:"Doha, Qatar",announce2:"Restaurant · Shisha · Coffee Lounge",announce3:"Reservations Recommended",
    navHome:"Home",navMenu:"Menu",navExperience:"Experience",navGallery:"Gallery",navContact:"Contact",bookTable:"Book a table",brand:"Zaitoona Al Andalaus",brandSub:"Restaurant · Shisha · Coffee",
    menuEyebrow:"Signature selection",menuTitle:"A menu for every part of the evening.",menuIntro:"Explore the complete Zaitoona Al Andalaus menu featuring appetizers, signature grills, biryanis, artisan pizzas, refreshing mojitos, fresh juices, hot beverages, and premium shisha.",menuNote:"Prices in QAR",menuFooter:"Please tell our team about any allergies or dietary requirements. Menu availability can vary.",reserveForDinner:"Reserve a table",
    searchPlaceholder:"Search dish or drink...",emptyMenu:"No matching items found.",
    footerAbout:"A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",footerExplore:"Explore",footerContact:"Contact",footerFollow:"Follow",instagram:"Instagram",tiktok:"TikTok",rights:"All rights reserved.",footerLine:"Restaurant · Shisha · Coffee Lounge · Doha, Qatar",callUs:"Call us"
  },
  ar:{
    announce1:"الدوحة، قطر",announce2:"مطعم · شيشة · قهوة ولاونج",announce3:"يفضل الحجز مسبقاً",
    navHome:"الرئيسية",navMenu:"القائمة",navExperience:"التجربة",navGallery:"الصور",navContact:"تواصل",bookTable:"احجز طاولة",brand:"زيتونة الأندلس",brandSub:"مطعم · شيشة · قهوة",
    menuEyebrow:"مختاراتنا",menuTitle:"قائمة تناسب كل لحظة من الأمسية.",menuIntro:"استكشف قائمة زيتونة الأندلس الكاملة التي تضم المقبلات، المشويات الخاصة، البرياني، البيتزا، الموهيتو المنعش، العصائر الطازجة، المشروبات الساخنة، والشيشة الفاخرة.",menuNote:"الأسعار بالريال القطري",menuFooter:"يرجى إبلاغ فريقنا بأي حساسية أو متطلبات غذائية. قد يختلف توفر بعض الأصناف.",reserveForDinner:"احجز طاولة",
    searchPlaceholder:"ابحث عن صنف أو مشروب...",emptyMenu:"لا توجد أصناف مطابقة لبحثك.",
    footerAbout:"مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",footerExplore:"استكشف",footerContact:"تواصل",footerFollow:"تابعنا",instagram:"إنستغرام",tiktok:"تيك توك",rights:"جميع الحقوق محفوظة.",footerLine:"مطعم · شيشة · قهوة ولاونج · الدوحة، قطر",callUs:"اتصل بنا"
  }
};

let lang = localStorage.getItem("zaitoona-lang") || "en";
let currentMenu = 0;
let searchQuery = "";
const $ = (s,root=document)=>root.querySelector(s);
const $$ = (s,root=document)=>[...root.querySelectorAll(s)];

function applyConfig(){
  const wa=`https://wa.me/${CONFIG.whatsapp}`;
  if($("#floatingWhatsapp")) $("#floatingWhatsapp").href=wa;
  if($("#footerWhatsapp")) $("#footerWhatsapp").href=wa; }  function applyLanguage(newLang){   lang=newLang;localStorage.setItem("zaitoona-lang",lang);   document.documentElement.lang=lang;document.documentElement.dir=lang==="ar"?"rtl":"ltr";   document.body.classList.toggle("ar",lang==="ar");   $$('[data-i18n]').forEach(el=>{const k=el.dataset.i18n;if(I18N[lang][k])el.textContent=I18N[lang][k]});
  if($("#menuSearch")) $("#menuSearch").placeholder = I18N[lang].searchPlaceholder;
  if($("#langToggle")) $("#langToggle").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  if($("#mobileLang")) $("#mobileLang").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  renderMenu(false);
}

function renderMenu(reset=false){
  const data=MENU[lang];const cats=Object.keys(data);if(reset) currentMenu=0;
  if(currentMenu>=cats.length)currentMenu=0;
  
  const tabs=$("#menuTabs");
  if(tabs) {
      tabs.innerHTML="";
      cats.forEach((cat,i)=>{
        const b=document.createElement("button");
        b.type="button";
        b.className="menu-tab"+(i===currentMenu && !searchQuery.trim()?" active":"");
        b.innerHTML=`<span>${cat}</span><span class="menu-tab-count">${data[cat].length}</span>`;
        b.addEventListener("click",()=>{
          currentMenu=i;
          searchQuery="";
          if($("#menuSearch")) $("#menuSearch").value="";
          renderMenu();
        });
        tabs.appendChild(b);
      });
  }
  
  const cat=cats[currentMenu];
  const q = searchQuery.trim().toLowerCase();
  
  let itemsToRender = [];
  if (q) {
    if($("#menuPanelTitle")) $("#menuPanelTitle").textContent = lang === "en" ? `Search: "${searchQuery.trim()}"` : `نتائج البحث: "${searchQuery.trim()}"`;
    cats.forEach(c => {
      data[c].forEach(item => {
        if (item[0].toLowerCase().includes(q) || item[1].toLowerCase().includes(q)) {
          itemsToRender.push(item);
        }
      });
    });
  } else {
    if($("#menuPanelTitle")) $("#menuPanelTitle").textContent=cat;
    itemsToRender = data[cat];
  }
  
  const menuItemsContainer = $("#menuItems");
  if(menuItemsContainer) {
      menuItemsContainer.classList.remove("fade-in");
      void menuItemsContainer.offsetWidth;
      menuItemsContainer.classList.add("fade-in");
      
      if (itemsToRender.length === 0) {
        menuItemsContainer.innerHTML = `<div class="menu-empty">${I18N[lang].emptyMenu}</div>`;
      } else {
        menuItemsContainer.innerHTML=itemsToRender.map(item=>`
          <article class="menu-item">
            <div class="menu-item-info">
              <h4>${item[0]}</h4>
              <p>${item[1]}</p>
            </div>
            <div class="menu-price-badge">
              <span class="menu-price">${item[2]}</span>
              <span class="menu-currency">QR</span>
            </div>
          </article>
        `).join("");
      }
  }
}

if($("#menuSearch")) {
    $("#menuSearch").addEventListener("input", (e) => {
      searchQuery = e.target.value;
      renderMenu(false);
    });
}

function closeMobile(){if($("#mobileMenu")){$("#mobileMenu").classList.remove("open");document.body.classList.remove("no-scroll");$("#mobileMenu").setAttribute("aria-hidden","true")}}
if($("#menuToggle")){
    $("#menuToggle").addEventListener("click",()=>{$("#mobileMenu").classList.toggle("open");document.body.classList.toggle("no-scroll");$("#mobileMenu").setAttribute("aria-hidden",$("#mobileMenu").classList.contains("open")?"false":"true")}); } $$("#mobileMenu a").forEach(a=>a.addEventListener("click",closeMobile));

if($("#langToggle")) $("#langToggle").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en"));
if($("#mobileLang")) $("#mobileLang").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en"));  const revealObserver=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add("visible");revealObserver.unobserve(e.target)}})},{threshold:.1,rootMargin:"0px 0px -40px"}); $$(".reveal").forEach(el=>revealObserver.observe(el));

if($("#year")) $("#year").textContent=new Date().getFullYear();
applyConfig();applyLanguage(lang);