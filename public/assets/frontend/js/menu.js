/* ============================================================
   BUSINESS CONFIG
   ============================================================ */

const CONFIG = {
    phoneDisplay: "+974 3385 8316",
    phoneDial: "+97433858316",
    whatsapp: "97433858316",
    email: "hello@zaitoona.qa",
    address: "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};


/* ============================================================
   SHARED WEBSITE I18N
   Menu-specific page content comes from Filament.
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

        /* ABOUT aliases */
        navAbout: "About",
        navAboutUs: "About",
        about: "About",

        navBlog: "Blog",
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
            "Restaurant · Shisha · Coffee Lounge · Doha, Qatar",

        callUs: "Call us"
    },


    ar: {

        announce1: "الدوحة، قطر",
        announce2: "مطعم · شيشة · قهوة ولاونج",
        announce3: "يفضل الحجز مسبقاً",

        navHome: "الرئيسية",
        navMenu: "القائمة",
        navExperience: "التجربة",
        navGallery: "الصور",

        /* ABOUT aliases */
        navAbout: "من نحن",
        navAboutUs: "من نحن",
        about: "من نحن",

        navBlog: "المدونة",
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
            "مطعم · شيشة · قهوة ولاونج · الدوحة، قطر",

        callUs: "اتصل بنا"
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
   LOAD MENU DATA FROM BLADE / FILAMENT
   ============================================================ */

let MENU_DATA = {

    en: {},

    ar: {},

    reserveUrl: "/reserveatable",

    currency: "QR",

    categories: []
};


const menuDataElement =
    $("#dynamicMenuData");


if (menuDataElement) {

    try {

        MENU_DATA =
            JSON.parse(
                menuDataElement.textContent
            );

    } catch (error) {

        console.error(
            "Unable to load Menu data.",
            error
        );
    }
}


/* ============================================================
   GLOBAL STATE
   ============================================================ */

let lang =
    localStorage.getItem(
        "zaitoona-lang"
    ) || "en";


let currentMenu = 0;

let searchQuery = "";


/* ============================================================
   BUSINESS CONFIG
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


    $$(".js-email")
        .forEach(element => {

            element.textContent =
                CONFIG.email;

            element.href =
                `mailto:${CONFIG.email}`;
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


    if ($("#mobileCall")) {

        $("#mobileCall").href =
            `tel:${CONFIG.phoneDial}`;
    }


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
   BASIC SETTERS
   ============================================================ */

function setText(id, value) {

    const element =
        document.getElementById(id);


    if (
        !element ||
        value === undefined ||
        value === null
    ) {

        return;
    }


    element.textContent =
        value;
}


function setMeta(id, value) {

    const element =
        document.getElementById(id);


    if (
        !element ||
        value === undefined ||
        value === null ||
        value === ""
    ) {

        return;
    }


    element.setAttribute(
        "content",
        value
    );
}


/* ============================================================
   NAVIGATION FALLBACK TRANSLATION

   This fixes links such as:

   <a href="/#about">ABOUT</a>

   even when data-i18n is missing or uses a different key.

   NO DESIGN CHANGE.
   ============================================================ */

function applyNavigationFallbackTranslations() {

    const aboutTranslation =
        I18N[lang]?.navAbout
        || (
            lang === "ar"
                ? "من نحن"
                : "About"
        );


    $$("a").forEach(link => {

        const href =
            String(
                link.getAttribute("href")
                || ""
            )
                .trim()
                .toLowerCase();


        const i18nKey =
            String(
                link.dataset.i18n
                || ""
            )
                .trim()
                .toLowerCase();


        const currentText =
            String(
                link.textContent
                || ""
            )
                .trim()
                .toLowerCase();


        /*
        |--------------------------------------------------------------------------
        | Detect About link by URL
        |--------------------------------------------------------------------------
        */

        const isAboutHref =
            href === "#about" ||
            href === "/#about" ||
            href === "about" ||
            href === "/about" ||
            href.endsWith("/#about") ||
            href.endsWith("/about");


        /*
        |--------------------------------------------------------------------------
        | Detect common About data-i18n keys
        |--------------------------------------------------------------------------
        */

        const isAboutKey =
            i18nKey === "navabout" ||
            i18nKey === "navaboutus" ||
            i18nKey === "about";


        /*
        |--------------------------------------------------------------------------
        | Detect existing displayed text
        |--------------------------------------------------------------------------
        */

        const isAboutText =
            currentText === "about" ||
            currentText === "about us" ||
            currentText === "من نحن";


        if (
            isAboutHref ||
            isAboutKey ||
            isAboutText
        ) {

            link.textContent =
                aboutTranslation;
        }
    });
}


/* ============================================================
   GET CURRENT LANGUAGE MENU DATA
   ============================================================ */

function getPageContent() {

    return MENU_DATA[lang]
        || MENU_DATA.en
        || {};
}


/* ============================================================
   APPLY DYNAMIC MENU PAGE CONTENT
   ============================================================ */

function applyDynamicMenuContent() {

    const content =
        getPageContent();


    setText(
        "dynamicMenuEyebrow",
        content.eyebrow
    );


    setText(
        "dynamicMenuTitle",
        content.title
    );


    setText(
        "dynamicMenuIntro",
        content.intro
    );


    setText(
        "dynamicMenuNote",
        content.note
    );


    setText(
        "dynamicMenuFooter",
        content.footer
    );


    setText(
        "dynamicMenuReserveButton",
        content.reserveText
    );


    /* ========================================================
       RESERVATION BUTTON URL
       ======================================================== */

    const reserveButton =
        $("#dynamicMenuReserveButton");


    if (
        reserveButton &&
        MENU_DATA.reserveUrl
    ) {

        reserveButton.href =
            MENU_DATA.reserveUrl;
    }


    /* ========================================================
       SEARCH PLACEHOLDER
       ======================================================== */

    const search =
        $("#menuSearch");


    if (search) {

        search.placeholder =
            content.searchPlaceholder
            || "";
    }


    /* ========================================================
       DYNAMIC CLIENT-SIDE SEO
       ======================================================== */

    if (content.seoTitle) {

        document.title =
            content.seoTitle;
    }


    setMeta(
        "menuSeoDescription",
        content.seoDescription
    );


    setMeta(
        "menuOgTitle",
        content.ogTitle
    );


    setMeta(
        "menuOgDescription",
        content.ogDescription
    );


    setMeta(
        "menuOgImageAlt",
        content.ogImageAlt
    );


    setMeta(
        "menuTwitterTitle",
        content.twitterTitle
    );


    setMeta(
        "menuTwitterDescription",
        content.twitterDescription
    );


    setMeta(
        "menuTwitterImageAlt",
        content.twitterImageAlt
    );
}


/* ============================================================
   LANGUAGE SYSTEM
   ============================================================ */

function applyLanguage(newLang) {

    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    */

    lang =
        newLang === "ar"
            ? "ar"
            : "en";


    localStorage.setItem(
        "zaitoona-lang",
        lang
    );


    /*
    |--------------------------------------------------------------------------
    | HTML language / direction
    |--------------------------------------------------------------------------
    */

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


    /*
    |--------------------------------------------------------------------------
    | Normal data-i18n translations
    |--------------------------------------------------------------------------
    */

    $$("[data-i18n]")
        .forEach(element => {

            const key =
                element.dataset.i18n;


            if (
                I18N[lang] &&
                Object.prototype.hasOwnProperty.call(
                    I18N[lang],
                    key
                )
            ) {

                element.textContent =
                    I18N[lang][key];
            }
        });


    /*
    |--------------------------------------------------------------------------
    | IMPORTANT FIX:
    | Translate ABOUT even when data-i18n is missing/wrong
    |--------------------------------------------------------------------------
    */

    applyNavigationFallbackTranslations();


    /*
    |--------------------------------------------------------------------------
    | Language buttons
    |--------------------------------------------------------------------------
    */

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


    /*
    |--------------------------------------------------------------------------
    | Dynamic Filament Menu page text
    |--------------------------------------------------------------------------
    */

    applyDynamicMenuContent();


    /*
    |--------------------------------------------------------------------------
    | Dynamic Categories + Products
    |--------------------------------------------------------------------------
    */

    renderMenu(false);
}


/* ============================================================
   GET CATEGORY TITLE
   ============================================================ */

function getCategoryTitle(category) {

    if (!category) {

        return "";
    }


    if (lang === "ar") {

        return (
            category.category_ar
            ||
            category.category_en
            ||
            ""
        );
    }


    return (
        category.category_en
        ||
        category.category_ar
        ||
        ""
    );
}


/* ============================================================
   GET MENU ITEM DISPLAY DATA
   ============================================================ */

function getItemDisplay(item) {

    if (!item) {

        return {

            primary: "",

            secondary: "",

            price: ""
        };
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic mode
    |--------------------------------------------------------------------------
    */

    if (lang === "ar") {

        return {

            primary:
                item.name_ar
                ||
                item.name_en
                ||
                "",


            secondary:
                item.name_en
                ||
                item.name_ar
                ||
                "",


            price:
                item.price
                ||
                ""
        };
    }


    /*
    |--------------------------------------------------------------------------
    | English mode
    |--------------------------------------------------------------------------
    */

    return {

        primary:
            item.name_en
            ||
            item.name_ar
            ||
            "",


        secondary:
            item.name_ar
            ||
            item.name_en
            ||
            "",


        price:
            item.price
            ||
            ""
    };
}


/* ============================================================
   ESCAPE HTML
   ============================================================ */

function escapeHtml(value) {

    return String(
        value ?? ""
    )
        .replaceAll(
            "&",
            "&amp;"
        )
        .replaceAll(
            "<",
            "&lt;"
        )
        .replaceAll(
            ">",
            "&gt;"
        )
        .replaceAll(
            '"',
            "&quot;"
        )
        .replaceAll(
            "'",
            "&#039;"
        );
}


/* ============================================================
   RENDER MENU
   ============================================================ */

function renderMenu(reset = false) {

    const categories =
        Array.isArray(
            MENU_DATA.categories
        )

            ? MENU_DATA.categories

            : [];


    /*
    |--------------------------------------------------------------------------
    | Optional Reset
    |--------------------------------------------------------------------------
    */

    if (reset) {

        currentMenu = 0;
    }


    if (
        currentMenu >=
        categories.length
    ) {

        currentMenu = 0;
    }


    /* ========================================================
       CATEGORY TABS
       ======================================================== */

    const tabs =
        $("#menuTabs");


    if (tabs) {

        tabs.innerHTML =
            "";


        categories.forEach(
            (category, index) => {

                const button =
                    document.createElement(
                        "button"
                    );


                button.type =
                    "button";


                button.className =
                    "menu-tab"
                    +
                    (
                        index === currentMenu &&
                        !searchQuery.trim()

                            ? " active"

                            : ""
                    );


                button.setAttribute(
                    "role",
                    "tab"
                );


                button.setAttribute(
                    "aria-selected",

                    index === currentMenu &&
                    !searchQuery.trim()

                        ? "true"

                        : "false"
                );


                /*
                |--------------------------------------------------------------------------
                | Category title
                |--------------------------------------------------------------------------
                */

                const categoryTitle =
                    getCategoryTitle(
                        category
                    );


                /*
                |--------------------------------------------------------------------------
                | Category products
                |--------------------------------------------------------------------------
                */

                const items =
                    Array.isArray(
                        category.items
                    )

                        ? category.items

                        : [];


                /*
                |--------------------------------------------------------------------------
                | Title
                |--------------------------------------------------------------------------
                */

                const titleSpan =
                    document.createElement(
                        "span"
                    );


                titleSpan.textContent =
                    categoryTitle;


                /*
                |--------------------------------------------------------------------------
                | Count
                |--------------------------------------------------------------------------
                */

                const countSpan =
                    document.createElement(
                        "span"
                    );


                countSpan.className =
                    "menu-tab-count";


                countSpan.textContent =
                    items.length;


                button.appendChild(
                    titleSpan
                );


                button.appendChild(
                    countSpan
                );


                /*
                |--------------------------------------------------------------------------
                | Category click
                |--------------------------------------------------------------------------
                */

                button.addEventListener(
                    "click",
                    () => {

                        currentMenu =
                            index;


                        searchQuery =
                            "";


                        const search =
                            $("#menuSearch");


                        if (search) {

                            search.value =
                                "";
                        }


                        renderMenu();
                    }
                );


                tabs.appendChild(
                    button
                );
            }
        );
    }


    /* ========================================================
       SEARCH / CURRENT CATEGORY
       ======================================================== */

    const query =
        searchQuery
            .trim()
            .toLowerCase();


    let itemsToRender =
        [];


    /*
    |--------------------------------------------------------------------------
    | Searching
    |--------------------------------------------------------------------------
    */

    if (query) {

        const searchTitle =
            lang === "ar"

                ? `نتائج البحث: "${searchQuery.trim()}"`

                : `Search: "${searchQuery.trim()}"`;


        setText(
            "menuPanelTitle",
            searchTitle
        );


        categories.forEach(
            category => {

                const items =
                    Array.isArray(
                        category.items
                    )

                        ? category.items

                        : [];


                items.forEach(
                    item => {

                        const englishName =
                            String(
                                item.name_en
                                ||
                                ""
                            )
                                .toLowerCase();


                        const arabicName =
                            String(
                                item.name_ar
                                ||
                                ""
                            )
                                .toLowerCase();


                        if (

                            englishName.includes(
                                query
                            )

                            ||

                            arabicName.includes(
                                query
                            )

                        ) {

                            itemsToRender.push(
                                item
                            );
                        }
                    }
                );
            }
        );

    } else {

        /*
        |--------------------------------------------------------------------------
        | Normal category view
        |--------------------------------------------------------------------------
        */

        const category =
            categories[currentMenu];


        if (category) {

            setText(
                "menuPanelTitle",

                getCategoryTitle(
                    category
                )
            );


            itemsToRender =
                Array.isArray(
                    category.items
                )

                    ? category.items

                    : [];

        } else {

            setText(
                "menuPanelTitle",
                ""
            );
        }
    }


    /* ========================================================
       RENDER PRODUCTS
       ======================================================== */

    const container =
        $("#menuItems");


    if (!container) {

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Animation restart
    |--------------------------------------------------------------------------
    */

    container.classList.remove(
        "fade-in"
    );


    void container.offsetWidth;


    container.classList.add(
        "fade-in"
    );


    /*
    |--------------------------------------------------------------------------
    | Empty results
    |--------------------------------------------------------------------------
    */

    if (
        itemsToRender.length === 0
    ) {

        const content =
            getPageContent();


        container.innerHTML =
            `
            <div class="menu-empty">
                ${escapeHtml(
                    content.emptyMessage
                    || ""
                )}
            </div>
            `;


        return;
    }


    /*
    |--------------------------------------------------------------------------
    | Product cards
    |--------------------------------------------------------------------------
    */

    container.innerHTML =
        itemsToRender
            .map(item => {

                const display =
                    getItemDisplay(
                        item
                    );


                return `
                    <article class="menu-item">

                        <div class="menu-item-info">

                            <h4>
                                ${escapeHtml(
                                    display.primary
                                )}
                            </h4>

                            <p>
                                ${escapeHtml(
                                    display.secondary
                                )}
                            </p>

                        </div>


                        <div class="menu-price-badge">

                            <span class="menu-price">
                                ${escapeHtml(
                                    display.price
                                )}
                            </span>

                            <span class="menu-currency">
                                ${escapeHtml(
                                    MENU_DATA.currency
                                    || "QR"
                                )}
                            </span>

                        </div>

                    </article>
                `;
            })
            .join("");
}


/* ============================================================
   SEARCH INPUT
   ============================================================ */

const menuSearch =
    $("#menuSearch");


if (menuSearch) {

    menuSearch.addEventListener(
        "input",
        event => {

            searchQuery =
                event.target.value;


            renderMenu(
                false
            );
        }
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


/* ============================================================
   MOBILE MENU TOGGLE
   ============================================================ */

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


/* ============================================================
   CLOSE MOBILE MENU AFTER LINK CLICK
   ============================================================ */

$$(
    "#mobileMenu a"
).forEach(link => {

    link.addEventListener(
        "click",
        closeMobile
    );
});


/* ============================================================
   DESKTOP LANGUAGE BUTTON
   ============================================================ */

const desktopLanguageButton =
    $("#langToggle");


if (desktopLanguageButton) {

    desktopLanguageButton.addEventListener(
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
   MOBILE LANGUAGE BUTTON
   ============================================================ */

const mobileLanguageButton =
    $("#mobileLang");


if (mobileLanguageButton) {

    mobileLanguageButton.addEventListener(
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
   REVEAL ANIMATIONS
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

                threshold:
                    0.1,

                rootMargin:
                    "0px 0px -40px"
            }
        );


    revealElements.forEach(
        element => {

            revealObserver.observe(
                element
            );
        }
    );

} else {

    revealElements.forEach(
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

const yearElement =
    $("#year");


if (yearElement) {

    yearElement.textContent =
        new Date()
            .getFullYear();
}


/* ============================================================
   INITIALIZATION
   ============================================================ */

applyConfig();

applyLanguage(lang);