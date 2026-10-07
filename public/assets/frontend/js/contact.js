/* ============================================================
   ZAITOONA AL ANDALAUS
   CONTACT PAGE JAVASCRIPT
   ============================================================ */


/* ============================================================
   FALLBACK BUSINESS CONFIG
   ============================================================ */

let CONFIG = {

    phoneDisplay:
        "+974 3385 8316",

    phoneDial:
        "+97433858316",

    whatsapp:
        "97433858316",

    email:
        "hello@zaitoona.qa",


    /*
    |--------------------------------------------------------------------------
    | MAP EMBED
    |--------------------------------------------------------------------------
    */

    mapEmbedUrl:
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.5380249953037!2d51.55437127538358!3d25.2524804776754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45cf117bfc95a5%3A0x7eda0bf8d2549ed4!2sZaitoona%20Al%20Andalus!5e0!3m2!1sen!2sbd!4v1791342887056!5m2!1sen!2sbd",


    /*
    |--------------------------------------------------------------------------
    | OPEN IN GOOGLE MAPS
    |--------------------------------------------------------------------------
    */

    mapOpenUrl:
        "https://www.google.com/maps/place/Zaitoona+Al+Andalus/@25.2524805,51.5543713,17z/data=!3m1!4b1!4m6!3m5!1s0x3e45cf117bfc95a5:0x7eda0bf8d2549ed4!8m2!3d25.2524805!4d51.5569462!16s%2Fg%2F11zz4rz96h?hl=en&authuser=0&entry=ttu&g_ep=EgoyMDI2MTAwNC4wIKXMDSoASAFQAw%3D%3D"
};


/* ============================================================
   I18N
   ============================================================ */

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

        navContact:
            "Contact",

        navAbout:
            "About",

        navBlog:
            "Blog",

        bookTable:
            "Book a table",

        brand:
            "Zaitoona Al Andalaus",

        brandSub:
            "Restaurant · Shisha · Coffee",

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

        navContact:
            "تواصل",

        navAbout:
            "من نحن",

        navBlog:
            "المدونة",

        bookTable:
            "احجز طاولة",

        brand:
            "زيتونة الأندلس",

        brandSub:
            "مطعم · شيشة · قهوة",

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


/* ============================================================
   GLOBAL STATE
   ============================================================ */

let lang =
    localStorage.getItem(
        "zaitoona-lang"
    ) || "en";


let CONTACT_DATA =
    null;


const $ = (
    selector,
    root = document
) => {

    return root.querySelector(
        selector
    );
};


const $$ = (
    selector,
    root = document
) => {

    return [
        ...root.querySelectorAll(
            selector
        )
    ];
};


/* ============================================================
   LOAD CONTACT DATA FROM FILAMENT
   ============================================================ */

function loadContactData() {

    const dataElement =
        document.getElementById(
            "dynamicContactData"
        );


    if (!dataElement) {

        return;
    }


    try {

        CONTACT_DATA =
            JSON.parse(
                dataElement.textContent
            );


        if (
            CONTACT_DATA.config
        ) {

            CONFIG = {

                ...CONFIG,

                ...CONTACT_DATA.config
            };
        }


    } catch (error) {

        console.error(
            "Unable to load Contact page data.",
            error
        );
    }
}


/* ============================================================
   APPLY BUSINESS CONFIG
   ============================================================ */

function applyConfig() {


    /*
    |--------------------------------------------------------------------------
    | PHONE
    |--------------------------------------------------------------------------
    */

    $$(".js-phone")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.phoneDisplay;
            }
        );


    /*
    |--------------------------------------------------------------------------
    | PHONE LINKS
    |--------------------------------------------------------------------------
    */

    $$(".js-phone-link")
        .forEach(
            element => {

                element.href =
                    `tel:${CONFIG.phoneDial}`;
            }
        );


    /*
    |--------------------------------------------------------------------------
    | EMAIL
    |--------------------------------------------------------------------------
    */

    $$(".js-email-link")
        .forEach(
            element => {

                element.href =
                    `mailto:${CONFIG.email}`;
            }
        );


    /*
    |--------------------------------------------------------------------------
    | WHATSAPP
    |--------------------------------------------------------------------------
    */

    const whatsappUrl =
        `https://wa.me/${CONFIG.whatsapp}`;


    $$(".js-wa-btn")
        .forEach(
            element => {

                element.href =
                    whatsappUrl;
            }
        );


    if (
        $("#floatingWhatsapp")
    ) {

        $("#floatingWhatsapp").href =
            whatsappUrl;
    }


    if (
        $("#footerWhatsapp")
    ) {

        $("#footerWhatsapp").href =
            whatsappUrl;
    }


    /*
    |--------------------------------------------------------------------------
    | MOBILE CALL
    |--------------------------------------------------------------------------
    */

    if (
        $("#mobileCall")
    ) {

        $("#mobileCall").href =
            `tel:${CONFIG.phoneDial}`;
    }


    /*
    |--------------------------------------------------------------------------
    | GOOGLE MAP EMBED
    |--------------------------------------------------------------------------
    */

    const map =
        $("#dynamicContactMap");


    if (
        map
        && CONFIG.mapEmbedUrl
    ) {

        map.src =
            CONFIG.mapEmbedUrl;
    }


    /*
    |--------------------------------------------------------------------------
    | GOOGLE MAP OPEN LINK
    |--------------------------------------------------------------------------
    */

    const mapOpenLink =
        $("#contactMapOpenLink");


    if (
        mapOpenLink
        && CONFIG.mapOpenUrl
    ) {

        mapOpenLink.href =
            CONFIG.mapOpenUrl;
    }
}


/* ============================================================
   HELPERS
   ============================================================ */

function setText(
    id,
    value
) {

    const element =
        document.getElementById(
            id
        );


    if (
        !element
        || value === undefined
        || value === null
    ) {

        return;
    }


    element.textContent =
        value;
}


function setMeta(
    id,
    value
) {

    const element =
        document.getElementById(
            id
        );


    if (
        !element
        || !value
    ) {

        return;
    }


    element.setAttribute(
        "content",
        value
    );
}


/* ============================================================
   HEADER ABOUT + BLOG LANGUAGE
   ============================================================ */

function applyHeaderNavigationLanguage() {

    const translations =
        I18N[lang];


    if (!translations) {

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | ABOUT
    |--------------------------------------------------------------------------
    */

    $$(
        'a[href="/about"], ' +
        'a[href$="/about"], ' +
        'a[href="#about"], ' +
        'a[href="/#about"], ' +
        'a[href$="#about"]'
    )
        .forEach(
            link => {

                const textTarget =
                    link.querySelector(
                        '[data-i18n="navAbout"]'
                    );


                if (
                    textTarget
                ) {

                    textTarget.textContent =
                        translations.navAbout;

                    return;
                }


                if (
                    link.children.length === 0
                ) {

                    link.textContent =
                        translations.navAbout;
                }
            }
        );


    /*
    |--------------------------------------------------------------------------
    | BLOG
    |--------------------------------------------------------------------------
    */

    $$(
        'a[href="/blog"], ' +
        'a[href$="/blog"]'
    )
        .forEach(
            link => {

                const textTarget =
                    link.querySelector(
                        '[data-i18n="navBlog"]'
                    );


                if (
                    textTarget
                ) {

                    textTarget.textContent =
                        translations.navBlog;

                    return;
                }


                if (
                    link.children.length === 0
                ) {

                    link.textContent =
                        translations.navBlog;
                }
            }
        );
}


/* ============================================================
   DYNAMIC CONTACT LANGUAGE
   ============================================================ */

function applyDynamicContactLanguage() {

    if (
        !CONTACT_DATA
    ) {

        return;
    }


    const content =
        CONTACT_DATA[lang]
        || CONTACT_DATA.en;


    if (
        !content
    ) {

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | HERO
    |--------------------------------------------------------------------------
    */

    setText(
        "dynamicContactHeroTitle",
        content.heroTitle
    );


    const heroImage =
        $("#dynamicContactHeroImage");


    if (
        heroImage
    ) {

        heroImage.alt =
            content.heroAlt
            || "";
    }


    /*
    |--------------------------------------------------------------------------
    | CONTENT
    |--------------------------------------------------------------------------
    */

    setText(
        "dynamicContactHeading",
        content.heading
    );


    setText(
        "dynamicContactSub",
        content.sub
    );


    setText(
        "dynamicContactDescription",
        content.description
    );


    /*
    |--------------------------------------------------------------------------
    | BUTTONS
    |--------------------------------------------------------------------------
    */

    setText(
        "dynamicContactEmailText",
        content.emailButton
    );


    setText(
        "dynamicContactWhatsappText",
        content.whatsappButton
    );


    /*
    |--------------------------------------------------------------------------
    | CONTACT INFORMATION
    |--------------------------------------------------------------------------
    */

    setText(
        "dynamicContactLocationLabel",
        content.locationLabel
    );


    setText(
        "dynamicContactPhoneLabel",
        content.phoneLabel
    );


    setText(
        "dynamicContactAddress",
        content.address
    );


    /*
    |--------------------------------------------------------------------------
    | MAP TITLE
    |--------------------------------------------------------------------------
    */

    const map =
        $("#dynamicContactMap");


    if (
        map
    ) {

        map.title =
            content.mapTitle
            || "";
    }


    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    */

    if (
        content.seoTitle
    ) {

        document.title =
            content.seoTitle;
    }


    setMeta(
        "contactSeoDescription",
        content.seoDescription
    );


    /*
    |--------------------------------------------------------------------------
    | OPEN GRAPH
    |--------------------------------------------------------------------------
    */

    setMeta(
        "contactOgTitle",
        content.ogTitle
    );


    setMeta(
        "contactOgDescription",
        content.ogDescription
    );


    setMeta(
        "contactOgImageAlt",
        content.ogImageAlt
    );


    /*
    |--------------------------------------------------------------------------
    | TWITTER / X
    |--------------------------------------------------------------------------
    */

    setMeta(
        "contactTwitterTitle",
        content.twitterTitle
    );


    setMeta(
        "contactTwitterDescription",
        content.twitterDescription
    );


    setMeta(
        "contactTwitterImageAlt",
        content.twitterImageAlt
    );
}


/* ============================================================
   LANGUAGE SYSTEM
   ============================================================ */

function applyLanguage(
    newLang
) {

    lang =
        newLang === "ar"
            ? "ar"
            : "en";


    /*
    |--------------------------------------------------------------------------
    | SAVE LANGUAGE
    |--------------------------------------------------------------------------
    */

    localStorage.setItem(
        "zaitoona-lang",
        lang
    );


    /*
    |--------------------------------------------------------------------------
    | HTML LANGUAGE
    |--------------------------------------------------------------------------
    */

    document.documentElement.lang =
        lang;


    /*
    |--------------------------------------------------------------------------
    | RTL / LTR
    |--------------------------------------------------------------------------
    */

    document.documentElement.dir =
        lang === "ar"
            ? "rtl"
            : "ltr";


    /*
    |--------------------------------------------------------------------------
    | ARABIC BODY CLASS
    |--------------------------------------------------------------------------
    */

    document.body.classList.toggle(
        "ar",
        lang === "ar"
    );


    /*
    |--------------------------------------------------------------------------
    | STANDARD DATA-I18N
    |--------------------------------------------------------------------------
    */

    $$("[data-i18n]")
        .forEach(
            element => {

                const key =
                    element.dataset.i18n;


                if (
                    I18N[lang]
                    && Object.prototype
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


    /*
    |--------------------------------------------------------------------------
    | ABOUT + BLOG
    |--------------------------------------------------------------------------
    */

    applyHeaderNavigationLanguage();


    /*
    |--------------------------------------------------------------------------
    | LANGUAGE BUTTONS
    |--------------------------------------------------------------------------
    */

    const languageText =
        lang === "en"
            ? "<span>EN</span> / <span>AR</span>"
            : "<span>AR</span> / <span>EN</span>";


    if (
        $("#langToggle")
    ) {

        $("#langToggle").innerHTML =
            languageText;
    }


    if (
        $("#mobileLang")
    ) {

        $("#mobileLang").innerHTML =
            languageText;
    }


    /*
    |--------------------------------------------------------------------------
    | DYNAMIC CONTACT
    |--------------------------------------------------------------------------
    */

    applyDynamicContactLanguage();
}


/* ============================================================
   MOBILE MENU
   ============================================================ */

function closeMobile() {

    const mobileMenu =
        $("#mobileMenu");


    if (
        !mobileMenu
    ) {

        return;
    }


    mobileMenu.classList.remove(
        "open"
    );


    document.body.classList.remove(
        "no-scroll"
    );


    mobileMenu.setAttribute(
        "aria-hidden",
        "true"
    );
}


/* ============================================================
   MOBILE MENU TOGGLE
   ============================================================ */

const menuToggle =
    $("#menuToggle");


if (
    menuToggle
) {

    menuToggle.addEventListener(
        "click",
        () => {

            const mobileMenu =
                $("#mobileMenu");


            if (
                !mobileMenu
            ) {

                return;
            }


            mobileMenu.classList.toggle(
                "open"
            );


            document.body.classList.toggle(
                "no-scroll"
            );


            mobileMenu.setAttribute(
                "aria-hidden",

                mobileMenu
                    .classList
                    .contains(
                        "open"
                    )
                    ? "false"
                    : "true"
            );
        }
    );
}


/*
|--------------------------------------------------------------------------
| CLOSE MOBILE MENU AFTER CLICK
|--------------------------------------------------------------------------
*/

$$("#mobileMenu a")
    .forEach(
        link => {

            link.addEventListener(
                "click",
                closeMobile
            );
        }
    );


/* ============================================================
   DESKTOP LANGUAGE
   ============================================================ */

const desktopLanguageButton =
    $("#langToggle");


if (
    desktopLanguageButton
) {

    desktopLanguageButton
        .addEventListener(
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


/* ============================================================
   MOBILE LANGUAGE
   ============================================================ */

const mobileLanguageButton =
    $("#mobileLang");


if (
    mobileLanguageButton
) {

    mobileLanguageButton
        .addEventListener(
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


/* ============================================================
   REVEAL
   ============================================================ */

const revealElements =
    $$(".reveal");


if (
    "IntersectionObserver"
    in window
) {

    const revealObserver =
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


                            revealObserver
                                .unobserve(
                                    entry.target
                                );
                        }
                    }
                );
            },

            {
                threshold: 0.1,

                rootMargin:
                    "0px 0px -40px"
            }
        );


    revealElements
        .forEach(
            element => {

                revealObserver.observe(
                    element
                );
            }
        );

} else {

    revealElements
        .forEach(
            element => {

                element.classList.add(
                    "visible"
                );
            }
        );
}


/* ============================================================
   FOOTER YEAR
   ============================================================ */

if (
    $("#year")
) {

    $("#year").textContent =
        new Date()
            .getFullYear();
}


/* ============================================================
   INITIALIZATION
   ============================================================ */

loadContactData();

applyConfig();

applyLanguage(
    lang
);