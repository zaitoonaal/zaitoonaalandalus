/* ============================================================
   ZAITOONA AL ANDALAUS
   GALLERY PAGE JAVASCRIPT
   ============================================================ */


/* ============================================================
   GLOBAL CONTACT CONFIG
   ============================================================ */

const CONFIG = {
    phoneDisplay: "+974 3385 8316",
    phoneDial: "+97433858316",
    whatsapp: "97433858316",
    email: "hello@zaitoona.qa",
    address: "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};


/* ============================================================
   SHARED TRANSLATIONS
   Header / Announcement / Footer remain exactly as before.
   Gallery page-specific content comes from Filament.
   ============================================================ */

const I18N = {

    en: {

        announce1: "Doha, Qatar",
        announce2: "Restaurant · Shisha · Coffee Lounge",
        announce3: "Reservations Recommended",

        navHome: "Home",
        navMenu: "Menu",
        navExperience: "Experience",
        navGallery: "Gallery",
        navContact: "Contact",
        bookTable: "Book a table",

        brand: "Zaitoona Al Andalaus",
        brandSub: "Restaurant · Shisha · Coffee",

        footerAbout:
            "A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",

        footerExplore: "Explore",
        footerContact: "Contact",
        footerFollow: "Follow",
        instagram: "Instagram",
        tiktok: "TikTok",
        rights: "All rights reserved.",

        footerLine:
            "Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
    },


    ar: {

        announce1: "الدوحة، قطر",
        announce2: "مطعم · شيشة · قهوة ولاونج",
        announce3: "يفضل الحجز مسبقاً",

        navHome: "الرئيسية",
        navMenu: "القائمة",
        navExperience: "التجربة",
        navGallery: "الصور",
        navContact: "تواصل",
        bookTable: "احجز طاولة",

        brand: "زيتونة الأندلس",
        brandSub: "مطعم · شيشة · قهوة",

        footerAbout:
            "مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",

        footerExplore: "استكشف",
        footerContact: "تواصل",
        footerFollow: "تابعنا",
        instagram: "إنستغرام",
        tiktok: "تيك توك",
        rights: "جميع الحقوق محفوظة.",

        footerLine:
            "مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
    }
};


/* ============================================================
   HELPERS
   ============================================================ */

const $ = (selector, root = document) =>
    root.querySelector(selector);

const $$ = (selector, root = document) =>
    [...root.querySelectorAll(selector)];


/* ============================================================
   LANGUAGE
   ============================================================ */

let lang =
    localStorage.getItem("zaitoona-lang") || "en";


/* ============================================================
   LOAD FILAMENT GALLERY DATA
   ============================================================ */

let GALLERY_DATA = null;

const galleryDataElement =
    $("#galleryDynamicData");

if (galleryDataElement) {

    try {

        GALLERY_DATA =
            JSON.parse(
                galleryDataElement.textContent
            );

    } catch (error) {

        console.error(
            "Unable to load Gallery data.",
            error
        );
    }
}


/* ============================================================
   CONTACT CONFIG
   ============================================================ */

function applyConfig() {

    $$(".js-phone")
        .forEach(element => {

            element.textContent =
                CONFIG.phoneDisplay;
        });


    $$(".js-phone-link")
        .forEach(element => {

            element.href =
                `tel:${CONFIG.phoneDial}`;
        });


    $$(".js-email-link")
        .forEach(element => {

            element.href =
                `mailto:${CONFIG.email}`;
        });


    $$(".js-address")
        .forEach(element => {

            element.textContent =
                CONFIG.address;
        });


    const whatsappUrl =
        `https://wa.me/${CONFIG.whatsapp}`;


    if ($("#floatingWhatsapp")) {

        $("#floatingWhatsapp").href =
            whatsappUrl;
    }


    if ($("#footerWhatsapp")) {

        $("#footerWhatsapp").href =
            whatsappUrl;
    }
}


/* ============================================================
   BASIC SHARED LANGUAGE
   ============================================================ */

function applyLanguage(newLang) {

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
        .forEach(element => {

            const key =
                element.dataset.i18n;

            const value =
                I18N?.[lang]?.[key];

            if (value) {

                element.textContent =
                    value;
            }
        });


    const languageButtonText =
        lang === "en"
            ? "<span>EN</span> / <span>AR</span>"
            : "<span>AR</span> / <span>EN</span>";


    if ($("#langToggle")) {

        $("#langToggle").innerHTML =
            languageButtonText;
    }


    if ($("#mobileLang")) {

        $("#mobileLang").innerHTML =
            languageButtonText;
    }


    applyGalleryLanguage();
}


/* ============================================================
   DYNAMIC GALLERY LANGUAGE
   ============================================================ */

function setText(id, value) {

    const element =
        document.getElementById(id);

    if (!element) {
        return;
    }

    if (
        value === undefined
        || value === null
    ) {
        return;
    }

    element.textContent =
        value;
}


function setMeta(id, value) {

    const element =
        document.getElementById(id);

    if (!element || !value) {
        return;
    }

    element.setAttribute(
        "content",
        value
    );
}


function applyGalleryLanguage() {

    if (!GALLERY_DATA) {
        return;
    }


    const content =
        GALLERY_DATA[lang]
        || GALLERY_DATA.en;


    if (!content) {
        return;
    }


    /* --------------------------------------------------------
       HERO
       -------------------------------------------------------- */

    setText(
        "galleryHeroTitle",
        content.heroTitle
    );


    const heroImage =
        $("#galleryHeroImage");

    if (heroImage) {

        heroImage.alt =
            content.heroAlt || "";
    }


    /* --------------------------------------------------------
       INTRO
       -------------------------------------------------------- */

    setText(
        "galleryIntroHeading",
        content.introHeading
    );


    setText(
        "galleryIntroText",
        content.introText
    );


    /* --------------------------------------------------------
       IMAGE ALT TEXT
       -------------------------------------------------------- */

    $$(".masonry-item img")
        .forEach(image => {

            const alt =
                lang === "ar"
                    ? image.dataset.altAr
                    : image.dataset.altEn;

            if (alt) {

                image.alt =
                    alt;
            }
        });


    /* --------------------------------------------------------
       HOVER / ARIA LABEL
       -------------------------------------------------------- */

    $$(".masonry-item")
        .forEach(item => {

            item.dataset.viewLabel =
                content.viewLabel || "";

            item.setAttribute(
                "aria-label",
                content.viewLabel || ""
            );
        });


    /* --------------------------------------------------------
       SEO
       -------------------------------------------------------- */

    if (content.seoTitle) {

        document.title =
            content.seoTitle;
    }


    setMeta(
        "gallerySeoDescription",
        content.seoDescription
    );


    setMeta(
        "galleryOgTitle",
        content.ogTitle
    );


    setMeta(
        "galleryOgDescription",
        content.ogDescription
    );


    setMeta(
        "galleryOgImageAlt",
        content.ogImageAlt
    );


    setMeta(
        "galleryTwitterTitle",
        content.ogTitle
    );


    setMeta(
        "galleryTwitterDescription",
        content.ogDescription
    );
}


/* ============================================================
   MOBILE MENU
   ============================================================ */

function closeMobile() {

    const mobileMenu =
        $("#mobileMenu");

    if (!mobileMenu) {
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


const menuToggle =
    $("#menuToggle");


if (menuToggle) {

    menuToggle.addEventListener(
        "click",
        () => {

            const mobileMenu =
                $("#mobileMenu");

            if (!mobileMenu) {
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
                mobileMenu.classList.contains("open")
                    ? "false"
                    : "true"
            );
        }
    );
}


$$(
    "#mobileMenu a"
).forEach(link => {

    link.addEventListener(
        "click",
        closeMobile
    );
});


/* ============================================================
   LANGUAGE BUTTONS
   ============================================================ */

const desktopLanguageButton =
    $("#langToggle");


if (desktopLanguageButton) {

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


const mobileLanguageButton =
    $("#mobileLang");


if (mobileLanguageButton) {

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
   LIGHTBOX
   ============================================================ */

const lightbox =
    $("#lightbox");

const lightboxImage =
    $("#lightboxImage");

const lightboxClose =
    $("#lightboxClose");


$$(".masonry-item img")
    .forEach(image => {

        image.addEventListener(
            "click",
            () => {

                if (
                    !lightbox
                    || !lightboxImage
                ) {
                    return;
                }


                let highQualitySource =
                    image.src;


                /*
                 * Keep original Unsplash behavior.
                 * Uploaded Laravel images simply use their
                 * original source.
                 */

                if (
                    highQualitySource.includes(
                        "images.unsplash.com"
                    )
                ) {

                    highQualitySource =
                        highQualitySource.replace(
                            /w=\d+/,
                            "w=1600"
                        );
                }


                lightboxImage.src =
                    highQualitySource;


                lightboxImage.alt =
                    image.alt || "";


                lightbox.classList.add(
                    "open"
                );


                lightbox.setAttribute(
                    "aria-hidden",
                    "false"
                );


                document.body.classList.add(
                    "no-scroll"
                );
            }
        );
    });


function closeLightbox() {

    if (!lightbox) {
        return;
    }


    lightbox.classList.remove(
        "open"
    );


    lightbox.setAttribute(
        "aria-hidden",
        "true"
    );


    document.body.classList.remove(
        "no-scroll"
    );
}


if (lightboxClose) {

    lightboxClose.addEventListener(
        "click",
        closeLightbox
    );
}


if (lightbox) {

    lightbox.addEventListener(
        "click",
        event => {

            if (
                event.target === lightbox
            ) {

                closeLightbox();
            }
        }
    );
}


document.addEventListener(
    "keydown",
    event => {

        if (
            event.key === "Escape"
        ) {

            closeLightbox();
            closeMobile();
        }
    }
);


/* ============================================================
   REVEAL ANIMATION
   ============================================================ */

const revealElements =
    $$(".reveal");


if (
    "IntersectionObserver" in window
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
                threshold: 0.15,

                rootMargin:
                    "0px 0px -50px"
            }
        );


    revealElements
        .forEach(element => {

            revealObserver.observe(
                element
            );
        });

} else {

    revealElements
        .forEach(element => {

            element.classList.add(
                "visible"
            );
        });
}


/* ============================================================
   HERO PARALLAX
   ============================================================ */

window.addEventListener(
    "scroll",
    () => {

        const scrolled =
            window.pageYOffset;


        const heroImage =
            $(".gallery-hero img");


        if (heroImage) {

            heroImage.style.transform =
                `translateY(${scrolled * 0.3}px) scale(1)`;
        }
    }
);


/* ============================================================
   FOOTER YEAR
   ============================================================ */

const year =
    $("#year");


if (year) {

    year.textContent =
        new Date().getFullYear();
}


/* ============================================================
   INITIALIZE
   ============================================================ */

applyConfig();

applyLanguage(lang);