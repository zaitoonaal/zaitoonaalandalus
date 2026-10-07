/* =========================================================
   ZAITOONA AL ANDALUS
   MAIN FRONTEND JAVASCRIPT
   ========================================================= */


/* =========================================================
   BUSINESS CONFIG
   ========================================================= */

const CONFIG = {

    phoneDisplay:
        "+974 3385 8316",

    phoneDial:
        "+97433858316",

    whatsapp:
        "97433858316",

    email:
        "hello@zaitoona.qa",

    address:
        "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};


/* =========================================================
   INTERNATIONALIZATION
   ========================================================= */

const I18N = {

    en: {

        announce1:
            "Doha, Qatar",

        announce2:
            "Restaurant · Shisha · Coffee Lounge",

        announce3:
            "Reservations Recommended",

        navHome:
            "Home",

        navMenu:
            "Menu",

        navExperience:
            "Experience",

        navGallery:
            "Gallery",

        navBlog:
            "Blog",

        navContact:
            "Contact",

        navAbout:
            "About",

        /*
         * Backward compatibility in case an existing Blade file
         * still uses data-i18n="About".
         */

        About:
            "About",

        bookTable:
            "Book a table",

        brand:
            "Zaitoona Al Andalus",

        brandSub:
            "Restaurant · Shisha · Coffee",

        heroKicker:
            "A refined Doha gathering place",

        hero1:
            "Taste.",

        hero2:
            "Breathe.",

        hero3:
            "Stay awhile.",

        heroDesc:
            "Mediterranean flavours, beautifully prepared shisha and coffee rituals — served with warm Andalusian-inspired hospitality in the heart of Doha.",

        reserveNow:
            "Reserve your table",

        exploreMenu:
            "Explore the menu",

        meta1Title:
            "All Day",

        meta1Text:
            "Dining",

        meta2Title:
            "Premium",

        meta2Text:
            "Shisha",

        meta3Title:
            "Late Night",

        meta3Text:
            "Coffee & Lounge",

        introEyebrow:
            "The Zaitoona experience",

        introTitle:
            "Rooted in hospitality. Made for Doha.",

        introCopy:
            "Zaitoona Al Andalus brings together the generosity of Arab hospitality and the relaxed elegance of Mediterranean café culture — a place to meet, dine, share shisha and let the evening unfold naturally.",

        detail1Title:
            "From the kitchen",

        detail1Text:
            "Shareable mezze, grilled signatures, fresh salads, desserts and all-day plates made for long tables and easy conversation.",

        detail2Title:
            "From the lounge",

        detail2Text:
            "Thoughtfully prepared shisha, specialty coffee, tea and refreshing drinks served in an unhurried, polished setting.",

        feat1Label:
            "Cuisine",

        feat1Title:
            "Culinary craft",

        feat1Text:
            "Modern Mediterranean and Middle Eastern flavours, plated with restraint and character.",

        feat2Label:
            "Lounge",

        feat2Title:
            "Relax with us",

        feat2Text:
            "Soft seating, warm service and a calm atmosphere that carries comfortably into the night.",

        feat3Label:
            "Coffee",

        feat3Title:
            "Coffee rituals",

        feat3Text:
            "Arabic coffee, espresso classics and slow-brew favourites — from first cup to late-night finish.",

        culinaryEyebrow:
            "Culinary mastery",

        culinaryTitle:
            "Made for sharing, remembered for flavour.",

        culinaryText:
            "Begin with mezze, move into flame-grilled favourites, then leave space for something sweet. Our menu is designed around generous plates, fresh ingredients and the pleasure of sharing.",

        culinaryList1:
            "Levantine & Mediterranean inspiration",

        culinaryList2:
            "Charcoal grill signatures",

        culinaryList3:
            "Fresh desserts, coffee & tea",

        seeMenu:
            "See signature menu",

        relaxEyebrow:
            "Relax with us",

        relaxTitle:
            "An evening with no reason to rush.",

        relaxText:
            "Zaitoona is shaped for easy gatherings — business catch-ups, family dinners, coffee with friends or a long shisha session after sunset.",

        relaxList1:
            "Comfortable lounge seating",

        relaxList2:
            "Calm day-to-night atmosphere",

        relaxList3:
            "Attentive table service",

        bookExperience:
            "Book your experience",

        shishaEyebrow:
            "The shisha ritual",

        shishaTitle:
            "Prepared with care. Enjoyed without hurry.",

        shishaText:
            "Choose your profile, settle in and leave the details to our shisha team. From familiar classics to deeper premium blends, each session is balanced for a smooth, consistent experience.",

        shisha1Title:
            "Classic",

        shisha1Text:
            "Bright, familiar flavours with a smooth easy draw.",

        shisha2Title:
            "Signature",

        shisha2Text:
            "House combinations layered for aroma, freshness and depth.",

        shisha3Title:
            "Premium",

        shisha3Text:
            "Richer leaf profiles for guests who prefer a more full-bodied session.",

        shisha4Title:
            "Fresh Head",

        shisha4Text:
            "Ask our team about seasonal fruit and specialty presentations.",

        shishaLegal:
            "Shisha service is offered in accordance with applicable local regulations.",

        galleryEyebrow:
            "Our atmosphere",

        galleryTitle:
            "A space that changes with the evening.",

        experienceIt:
            "Experience it",

        testimonialEyebrow:
            "What the evening should feel like",

        callUs:
            "Call us",

        footerAbout:
            "A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",

        footerExplore:
            "Explore",

        footerContact:
            "Contact",

        footerFollow:
            "Follow",

        instagram:
            "Instagram",

        tiktok:
            "TikTok",

        rights:
            "All rights reserved.",

        footerLine:
            "Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
    },


    ar: {

        announce1:
            "الدوحة، قطر",

        announce2:
            "مطعم · شيشة · قهوة ولاونج",

        announce3:
            "يفضل الحجز مسبقاً",

        navHome:
            "الرئيسية",

        navMenu:
            "القائمة",

        navExperience:
            "التجربة",

        navGallery:
            "الصور",

        navBlog:
            "المدونة",

        navContact:
            "تواصل",

        navAbout:
            "من نحن",

        About:
            "من نحن",

        bookTable:
            "احجز طاولة",

        brand:
            "زيتونة الأندلس",

        brandSub:
            "مطعم · شيشة · قهوة",

        heroKicker:
            "وجهة راقية للقاءات في الدوحة",

        hero1:
            "تذوّق.",

        hero2:
            "استرخِ.",

        hero3:
            "وخُذ وقتك.",

        heroDesc:
            "نكهات متوسطية، شيشة محضّرة بعناية وطقوس قهوة أصيلة — بروح ضيافة دافئة مستوحاة من الأندلس في قلب الدوحة.",

        reserveNow:
            "احجز طاولتك",

        exploreMenu:
            "اكتشف القائمة",

        meta1Title:
            "طوال اليوم",

        meta1Text:
            "مطعم",

        meta2Title:
            "مميزة",

        meta2Text:
            "شيشة",

        meta3Title:
            "حتى وقت متأخر",

        meta3Text:
            "قهوة ولاونج",

        introEyebrow:
            "تجربة زيتونة",

        introTitle:
            "ضيافة أصيلة بروح الدوحة.",

        introCopy:
            "تجمع زيتونة الأندلس بين كرم الضيافة العربية وأناقة المقاهي المتوسطية الهادئة — مكان للقاء وتناول الطعام ومشاركة الشيشة وترك الأمسية تسير على مهل.",

        detail1Title:
            "من المطبخ",

        detail1Text:
            "مقبلات للمشاركة، مشاوي مميزة، سلطات طازجة، حلويات وأطباق طوال اليوم لطاولات طويلة وأحاديث أجمل.",

        detail2Title:
            "من اللاونج",

        detail2Text:
            "شيشة محضّرة بعناية، قهوة مختصة، شاي ومشروبات منعشة تقدم في أجواء راقية ومريحة.",

        feat1Label:
            "المطبخ",

        feat1Title:
            "إبداع الطهي",

        feat1Text:
            "نكهات متوسطية وشرق أوسطية عصرية بتقديم أنيق ومتوازن.",

        feat2Label:
            "اللاونج",

        feat2Title:
            "استرخِ معنا",

        feat2Text:
            "جلسات مريحة، خدمة دافئة وأجواء هادئة تمتد بسلاسة إلى الليل.",

        feat3Label:
            "القهوة",

        feat3Title:
            "طقوس القهوة",

        feat3Text:
            "قهوة عربية، كلاسيكيات الإسبريسو وطرق تقطير هادئة من أول فنجان حتى نهاية السهرة.",

        culinaryEyebrow:
            "إتقان الطهي",

        culinaryTitle:
            "أطباق للمشاركة ونكهات تبقى في الذاكرة.",

        culinaryText:
            "ابدأ بالمقبلات، ثم انتقل إلى أطباق الفحم المميزة واترك مساحة للحلو. صممنا قائمتنا حول الكرم، المكونات الطازجة ومتعة المشاركة.",

        culinaryList1:
            "إلهام شامي ومتوسطي",

        culinaryList2:
            "توقيعات الشواء على الفحم",

        culinaryList3:
            "حلويات طازجة وقهوة وشاي",

        seeMenu:
            "شاهد القائمة المختارة",

        relaxEyebrow:
            "استرخِ معنا",

        relaxTitle:
            "أمسية لا تحتاج إلى استعجال.",

        relaxText:
            "صُممت زيتونة للقاءات السهلة — اجتماع عمل، عشاء عائلي، قهوة مع الأصدقاء أو جلسة شيشة طويلة بعد الغروب.",

        relaxList1:
            "جلسات لاونج مريحة",

        relaxList2:
            "أجواء هادئة من النهار إلى الليل",

        relaxList3:
            "خدمة طاولات باهتمام",

        bookExperience:
            "احجز تجربتك",

        shishaEyebrow:
            "طقس الشيشة",

        shishaTitle:
            "تحضير بعناية. ومتعة بلا استعجال.",

        shishaText:
            "اختر الطابع الذي تفضله واترك التفاصيل لفريق الشيشة. من النكهات الكلاسيكية إلى الخلطات البريميوم الأعمق، نضبط كل جلسة لتكون سلسة ومتوازنة.",

        shisha1Title:
            "كلاسيك",

        shisha1Text:
            "نكهات مألوفة ومنعشة بسحبة سلسة.",

        shisha2Title:
            "توقيعنا",

        shisha2Text:
            "خلطات بيتية بطبقات من العطر والانتعاش والعمق.",

        shisha3Title:
            "بريميوم",

        shisha3Text:
            "نكهات أغنى لمن يفضلون جلسة أكثر امتلاءً.",

        shisha4Title:
            "رأس فواكه",

        shisha4Text:
            "اسأل فريقنا عن الفواكه الموسمية والتقديمات الخاصة.",

        shishaLegal:
            "تُقدّم خدمة الشيشة وفقاً للأنظمة المحلية المعمول بها.",

        galleryEyebrow:
            "أجواؤنا",

        galleryTitle:
            "مكان يتغير جماله مع كل ساعة من المساء.",

        experienceIt:
            "عِش التجربة",

        testimonialEyebrow:
            "هكذا يجب أن تشعر الأمسية",

        callUs:
            "اتصل بنا",

        footerAbout:
            "مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",

        footerExplore:
            "استكشف",

        footerContact:
            "تواصل",

        footerFollow:
            "تابعنا",

        instagram:
            "إنستغرام",

        tiktok:
            "تيك توك",

        rights:
            "جميع الحقوق محفوظة.",

        footerLine:
            "مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
    }
};


/* =========================================================
   TESTIMONIALS
   ========================================================= */

const QUOTES = {

    en: [

        [
            "“Elegant without feeling formal — the kind of place where dinner naturally becomes coffee, shisha and another hour with friends.”",
            "Zaitoona Guest Experience · Demo Review"
        ],

        [
            "“Warm service, a calm atmosphere and a menu made for sharing. Exactly what a Doha evening should feel like.”",
            "Zaitoona Guest Experience · Demo Review"
        ],

        [
            "“Come for the grill, stay for Arabic coffee and a beautifully prepared shisha. The pace of the place is the real luxury.”",
            "Zaitoona Guest Experience · Demo Review"
        ]

    ],


    ar: [

        [
            "«راقي من دون تكلّف — المكان الذي يتحول فيه العشاء بشكل طبيعي إلى قهوة وشيشة وساعة إضافية مع الأصدقاء.»",
            "تجربة ضيف زيتونة · تقييم تجريبي"
        ],

        [
            "«خدمة دافئة، أجواء هادئة وقائمة مصممة للمشاركة. هكذا يجب أن تكون أمسية الدوحة.»",
            "تجربة ضيف زيتونة · تقييم تجريبي"
        ],

        [
            "«تعال للمشاوي، وابقَ للقهوة العربية والشيشة المحضّرة بإتقان. هدوء المكان هو الفخامة الحقيقية.»",
            "تجربة ضيف زيتونة · تقييم تجريبي"
        ]

    ]
};


/* =========================================================
   HELPERS
   ========================================================= */

const $ = (
    selector,
    root = document
) => root.querySelector(
    selector
);


const $$ = (
    selector,
    root = document
) => [
    ...root.querySelectorAll(
        selector
    )
];


/* =========================================================
   STATE
   ========================================================= */

let lang =
    localStorage.getItem(
        "zaitoona-lang"
    ) || "en";


if (
    !Object.prototype.hasOwnProperty.call(
        I18N,
        lang
    )
) {
    lang =
        "en";
}


let currentQuote =
    0;


/* =========================================================
   BUSINESS CONFIG
   ========================================================= */

function applyConfig() {

    $$(".js-phone")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.phoneDisplay;
            }
        );


    $$(".js-phone-link")
        .forEach(
            element => {

                element.href =
                    `tel:${CONFIG.phoneDial}`;
            }
        );


    $$(".js-email")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.email;

                if (
                    element.tagName === "A"
                ) {
                    element.href =
                        `mailto:${CONFIG.email}`;
                }
            }
        );


    $$(".js-email-link")
        .forEach(
            element => {

                element.href =
                    `mailto:${CONFIG.email}`;
            }
        );


    $$(".js-address")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.address;
            }
        );


    const mobileCall =
        $("#mobileCall");


    if (
        mobileCall
    ) {
        mobileCall.href =
            `tel:${CONFIG.phoneDial}`;
    }


    const whatsappUrl =
        `https://wa.me/${CONFIG.whatsapp}`;


    const floatingWhatsapp =
        $("#floatingWhatsapp");


    if (
        floatingWhatsapp
    ) {
        floatingWhatsapp.href =
            whatsappUrl;
    }


    const footerWhatsapp =
        $("#footerWhatsapp");


    if (
        footerWhatsapp
    ) {
        footerWhatsapp.href =
            whatsappUrl;
    }


    /*
    |--------------------------------------------------------------------------
    | IMPORTANT
    |--------------------------------------------------------------------------
    |
    | We do NOT modify schemaJson here.
    |
    | SEO JSON-LD is now fully rendered server-side by Laravel so
    | crawlers receive the final structured data immediately.
    |
    */
}


/* =========================================================
   LANGUAGE
   ========================================================= */

function applyLanguage(
    newLang
) {

    lang =
        newLang === "ar"
            ? "ar"
            : "en";


    localStorage.setItem(
        "zaitoona-lang",
        lang
    );


    document.documentElement.lang =
        lang;


    document.documentElement.dir =
        lang === "ar"
            ? "rtl"
            : "ltr";


    document.body.classList.toggle(
        "ar",
        lang === "ar"
    );


    $$("[data-i18n]")
        .forEach(
            element => {

                const key =
                    element.dataset.i18n;


                if (
                    Object.prototype
                        .hasOwnProperty
                        .call(
                            I18N[lang],
                            key
                        )
                ) {

                    element.textContent =
                        I18N[lang][key];
                }
            }
        );


    const languageMarkup =
        lang === "en"
            ? "<span>EN</span> / <span>AR</span>"
            : "<span>AR</span> / <span>EN</span>";


    const desktopLanguage =
        $("#langToggle");


    if (
        desktopLanguage
    ) {
        desktopLanguage.innerHTML =
            languageMarkup;
    }


    const mobileLanguage =
        $("#mobileLang");


    if (
        mobileLanguage
    ) {
        mobileLanguage.innerHTML =
            languageMarkup;
    }


    renderQuotes();
}


/* =========================================================
   TESTIMONIALS
   ========================================================= */

function renderQuotes() {

    const quoteText =
        $("#quoteText");

    const quoteAuthor =
        $("#quoteAuthor");

    const quoteDots =
        $("#quoteDots");


    if (
        !quoteText
        || !quoteAuthor
        || !quoteDots
    ) {
        return;
    }


    const quotes =
        QUOTES[lang]
        ?? QUOTES.en;


    if (
        currentQuote
        >= quotes.length
    ) {
        currentQuote =
            0;
    }


    quoteText.textContent =
        quotes[currentQuote][0];


    quoteAuthor.textContent =
        quotes[currentQuote][1];


    quoteDots.innerHTML =
        quotes
            .map(
                (
                    quote,
                    index
                ) => {

                    const active =
                        index === currentQuote
                            ? "active"
                            : "";

                    return `
                        <button
                            class="quote-dot ${active}"
                            type="button"
                            aria-label="Quote ${index + 1}"
                            data-q="${index}"
                        ></button>
                    `;
                }
            )
            .join("");


    $$(".quote-dot")
        .forEach(
            button => {

                button.addEventListener(
                    "click",
                    () => {

                        currentQuote =
                            Number(
                                button.dataset.q
                            );

                        renderQuotes();
                    }
                );
            }
        );
}


/* =========================================================
   LOADER
   ========================================================= */

function hideLoader() {

    const loader =
        $("#loader");


    if (
        loader
    ) {
        loader.classList.add(
            "hidden"
        );
    }
}


function initializeLoader() {

    if (
        document.readyState
        === "complete"
    ) {

        setTimeout(
            hideLoader,
            450
        );

    } else {

        window.addEventListener(
            "load",
            () => {

                setTimeout(
                    hideLoader,
                    450
                );
            },
            {
                once: true
            }
        );
    }


    setTimeout(
        hideLoader,
        2200
    );
}


/* =========================================================
   HEADER SCROLL
   ========================================================= */

function initializeHeader() {

    const header =
        $("#header");


    if (
        !header
    ) {
        return;
    }


    let ticking =
        false;


    const updateHeader =
        () => {

            header.classList.toggle(
                "scrolled",
                window.scrollY > 28
            );

            ticking =
                false;
        };


    const onScroll =
        () => {

            if (
                ticking
            ) {
                return;
            }


            ticking =
                true;


            window.requestAnimationFrame(
                updateHeader
            );
        };


    updateHeader();


    window.addEventListener(
        "scroll",
        onScroll,
        {
            passive: true
        }
    );
}


/* =========================================================
   ACTIVE NAVIGATION
   ========================================================= */

function initializeNavigationObserver() {

    const sections =
        $$(
            "main section[id]"
        );


    if (
        !sections.length
    ) {
        return;
    }


    if (
        !(
            "IntersectionObserver"
            in window
        )
    ) {
        return;
    }


    const observer =
        new IntersectionObserver(

            entries => {

                entries.forEach(
                    entry => {

                        if (
                            !entry.isIntersecting
                        ) {
                            return;
                        }


                        const activeHash =
                            `#${entry.target.id}`;


                        $$(".nav-left .nav-link")
                            .forEach(
                                link => {

                                    const href =
                                        link.getAttribute(
                                            "href"
                                        ) || "";


                                    const hashIndex =
                                        href.indexOf(
                                            "#"
                                        );


                                    if (
                                        hashIndex === -1
                                    ) {
                                        return;
                                    }


                                    const linkHash =
                                        href.slice(
                                            hashIndex
                                        );


                                    link.classList.toggle(
                                        "active",
                                        linkHash
                                        === activeHash
                                    );
                                }
                            );
                    }
                );
            },

            {
                rootMargin:
                    "-30% 0px -60% 0px"
            }
        );


    sections.forEach(
        section => {

            observer.observe(
                section
            );
        }
    );
}


/* =========================================================
   MOBILE MENU
   ========================================================= */

function closeMobile() {

    const menu =
        $("#mobileMenu");

    const toggle =
        $("#menuToggle");


    if (
        !menu
    ) {
        return;
    }


    menu.classList.remove(
        "open"
    );


    document.body.classList.remove(
        "no-scroll"
    );


    menu.setAttribute(
        "aria-hidden",
        "true"
    );


    if (
        toggle
    ) {

        toggle.setAttribute(
            "aria-expanded",
            "false"
        );
    }
}


function initializeMobileMenu() {

    const toggle =
        $("#menuToggle");

    const menu =
        $("#mobileMenu");


    if (
        toggle
        && menu
    ) {

        toggle.setAttribute(
            "aria-expanded",
            menu.classList.contains(
                "open"
            )
                ? "true"
                : "false"
        );


        toggle.addEventListener(
            "click",
            () => {

                const isOpen =
                    menu.classList.toggle(
                        "open"
                    );


                document.body
                    .classList
                    .toggle(
                        "no-scroll",
                        isOpen
                    );


                menu.setAttribute(
                    "aria-hidden",
                    isOpen
                        ? "false"
                        : "true"
                );


                toggle.setAttribute(
                    "aria-expanded",
                    isOpen
                        ? "true"
                        : "false"
                );
            }
        );
    }


    $$("#mobileMenu a")
        .forEach(
            link => {

                link.addEventListener(
                    "click",
                    closeMobile
                );
            }
        );
}


/* =========================================================
   LANGUAGE BUTTONS
   ========================================================= */

function initializeLanguageButtons() {

    const desktopButton =
        $("#langToggle");


    if (
        desktopButton
    ) {

        desktopButton.addEventListener(
            "click",
            () => {

                applyLanguage(
                    lang === "en"
                        ? "ar"
                        : "en"
                );
            }
        );
    }


    const mobileButton =
        $("#mobileLang");


    if (
        mobileButton
    ) {

        mobileButton.addEventListener(
            "click",
            () => {

                applyLanguage(
                    lang === "en"
                        ? "ar"
                        : "en"
                );
            }
        );
    }
}


/* =========================================================
   REVEAL OBSERVER
   ========================================================= */

function initializeRevealObserver() {

    const elements =
        $$(".reveal");


    if (
        !elements.length
    ) {
        return;
    }


    if (
        !(
            "IntersectionObserver"
            in window
        )
    ) {

        elements.forEach(
            element => {

                element.classList.add(
                    "visible"
                );
            }
        );

        return;
    }


    const observer =
        new IntersectionObserver(

            entries => {

                entries.forEach(
                    entry => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target
                                .classList
                                .add(
                                    "visible"
                                );


                            observer.unobserve(
                                entry.target
                            );
                        }
                    }
                );
            },

            {
                threshold:
                    0.1,

                rootMargin:
                    "0px 0px -40px"
            }
        );


    elements.forEach(
        element => {

            observer.observe(
                element
            );
        }
    );
}


/* =========================================================
   GALLERY LIGHTBOX
   ========================================================= */

function closeLightbox() {

    const lightbox =
        $("#lightbox");


    if (
        !lightbox
    ) {
        return;
    }


    lightbox.classList.remove(
        "open"
    );


    document.body.classList.remove(
        "no-scroll"
    );
}


function initializeLightbox() {

    const lightbox =
        $("#lightbox");

    const lightboxImage =
        $("#lightboxImage");

    const closeButton =
        $("#lightboxClose");


    $$(".gallery-item img")
        .forEach(
            image => {

                image.addEventListener(
                    "click",
                    () => {

                        if (
                            !lightbox
                            || !lightboxImage
                        ) {
                            return;
                        }


                        const largeImage =
                            image.src.replace(
                                /w=\d+/,
                                "w=1800"
                            );


                        lightboxImage.src =
                            largeImage;


                        lightboxImage.alt =
                            image.alt
                            || "Gallery preview";


                        lightbox.classList.add(
                            "open"
                        );


                        document.body
                            .classList
                            .add(
                                "no-scroll"
                            );
                    }
                );
            }
        );


    if (
        closeButton
    ) {

        closeButton.addEventListener(
            "click",
            closeLightbox
        );
    }


    if (
        lightbox
    ) {

        lightbox.addEventListener(
            "click",
            event => {

                if (
                    event.target
                    === lightbox
                ) {

                    closeLightbox();
                }
            }
        );
    }
}


/* =========================================================
   KEYBOARD
   ========================================================= */

function initializeKeyboard() {

    document.addEventListener(
        "keydown",
        event => {

            if (
                event.key
                === "Escape"
            ) {

                closeLightbox();

                closeMobile();
            }
        }
    );
}


/* =========================================================
   TESTIMONIAL ROTATION
   ========================================================= */

function initializeTestimonialRotation() {

    if (
        !$("#quoteText")
    ) {
        return;
    }


    window.setInterval(
        () => {

            if (
                document.hidden
            ) {
                return;
            }


            const quotes =
                QUOTES[lang]
                ?? QUOTES.en;


            currentQuote =
                (
                    currentQuote
                    + 1
                )
                % quotes.length;


            renderQuotes();

        },
        7000
    );
}


/* =========================================================
   FOOTER YEAR
   ========================================================= */

function updateFooterYear() {

    const year =
        $("#year");


    if (
        year
    ) {

        year.textContent =
            new Date()
                .getFullYear();
    }
}


/* =========================================================
   INITIALIZATION
   ========================================================= */

function initializeApp() {

    applyConfig();

    applyLanguage(
        lang
    );

    initializeLoader();

    initializeHeader();

    initializeNavigationObserver();

    initializeMobileMenu();

    initializeLanguageButtons();

    initializeRevealObserver();

    initializeLightbox();

    initializeKeyboard();

    initializeTestimonialRotation();

    updateFooterYear();
}


if (
    document.readyState
    === "loading"
) {

    document.addEventListener(
        "DOMContentLoaded",
        initializeApp,
        {
            once: true
        }
    );

} else {

    initializeApp();
}