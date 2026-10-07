/* =========================================================
   BUSINESS CONFIG & GLOBAL DICTIONARY
   ========================================================= */

const CONFIG = {
  phoneDisplay: "+974 3385 8316",
  phoneDial: "+97433858316",
  whatsapp: "97433858316",
  email: "hello@zaitoona.qa",
  address: "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};


/* =========================================================
   INTERNATIONALIZATION
   ========================================================= */

const I18N = {

  en: {

    /* Announcement */
    announce1: "Doha, Qatar",
    announce2: "Restaurant · Shisha · Coffee Lounge",
    announce3: "Reservations Recommended",


    /* Navigation */
    navHome: "Home",
    navMenu: "Menu",
    navExperience: "Experience",
    navGallery: "Gallery",

    About: "About",

    navBlog: "Blog",

    navContact: "Contact",

    bookTable: "Book a table",


    /* Brand */
    brand: "Zaitoona Al Andalus",
    brandSub: "Restaurant · Shisha · Coffee",


    /* Blog */
    blogHeroTitle: "Our Journal",

    blogIntroHeading: "Stories from the Table",

    blogIntroText:
      "Discover the inspiration behind our Mediterranean menus, the heritage of our premium shisha, and the delicate art of Arabic coffee. Welcome to the Zaitoona journal.",

    readMore: "Read More",

    loadMore: "Load More Articles",


    /* Footer */
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

    /* Announcement */
    announce1: "الدوحة، قطر",

    announce2: "مطعم · شيشة · قهوة ولاونج",

    announce3: "يفضل الحجز مسبقاً",


    /* Navigation */
    navHome: "الرئيسية",

    navMenu: "القائمة",

    navExperience: "التجربة",

    navGallery: "الصور",

    About: "من نحن",

    navBlog: "المدونة",

    navContact: "تواصل",

    bookTable: "احجز طاولة",


    /* Brand */
    brand: "زيتونة الأندلس",

    brandSub: "مطعم · شيشة · قهوة",


    /* Blog */
    blogHeroTitle: "مجلتنا",

    blogIntroHeading: "قصص من المائدة",

    blogIntroText:
      "اكتشف الإلهام وراء قوائمنا المتوسطية، وتراث الشيشة الفاخرة لدينا، والفن الدقيق لتحضير القهوة العربية. مرحبًا بك في مجلة زيتونة.",

    readMore: "اقرأ المزيد",

    loadMore: "تحميل المزيد من المقالات",


    /* Footer */
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


/* =========================================================
   GLOBAL STATE & UTILITIES
   ========================================================= */

let lang =
  localStorage.getItem("zaitoona-lang")
  || "en";


/*
|--------------------------------------------------------------------------
| Protect against invalid stored language
|--------------------------------------------------------------------------
*/

if (!I18N[lang]) {
  lang = "en";
}


const $ = (
  selector,
  root = document
) => {
  return root.querySelector(selector);
};


const $$ = (
  selector,
  root = document
) => {
  return [
    ...root.querySelectorAll(selector)
  ];
};


/* =========================================================
   BUSINESS CONFIG
   ========================================================= */

function applyConfig() {

  /*
  |--------------------------------------------------------------------------
  | Phone text
  |--------------------------------------------------------------------------
  */

  $$(".js-phone").forEach(
    element => {

      element.textContent =
        CONFIG.phoneDisplay;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Phone links
  |--------------------------------------------------------------------------
  */

  $$(".js-phone-link").forEach(
    element => {

      element.href =
        `tel:${CONFIG.phoneDial}`;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Email
  |--------------------------------------------------------------------------
  */

  $$(".js-email").forEach(
    element => {

      element.textContent =
        CONFIG.email;

    }
  );


  $$(".js-email-link").forEach(
    element => {

      element.href =
        `mailto:${CONFIG.email}`;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Address
  |--------------------------------------------------------------------------
  */

  $$(".js-address").forEach(
    element => {

      element.textContent =
        CONFIG.address;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | WhatsApp
  |--------------------------------------------------------------------------
  */

  const whatsappUrl =
    `https://wa.me/${CONFIG.whatsapp}`;


  $$(".js-wa-btn").forEach(
    element => {

      element.href =
        whatsappUrl;

    }
  );


  const floatingWhatsapp =
    $("#floatingWhatsapp");


  if (floatingWhatsapp) {

    floatingWhatsapp.href =
      whatsappUrl;

  }


  const footerWhatsapp =
    $("#footerWhatsapp");


  if (footerWhatsapp) {

    footerWhatsapp.href =
      whatsappUrl;

  }


  /*
  |--------------------------------------------------------------------------
  | Mobile call button
  |--------------------------------------------------------------------------
  */

  const mobileCall =
    $("#mobileCall");


  if (mobileCall) {

    mobileCall.href =
      `tel:${CONFIG.phoneDial}`;

  }

}


/* =========================================================
   LANGUAGE SYSTEM
   ========================================================= */

function applyLanguage(newLang) {

  /*
  |--------------------------------------------------------------------------
  | Validate language
  |--------------------------------------------------------------------------
  */

  lang =
    newLang === "ar"
      ? "ar"
      : "en";


  /*
  |--------------------------------------------------------------------------
  | Save preference
  |--------------------------------------------------------------------------
  */

  localStorage.setItem(
    "zaitoona-lang",
    lang
  );


  /*
  |--------------------------------------------------------------------------
  | HTML language & direction
  |--------------------------------------------------------------------------
  */

  document.documentElement.lang =
    lang;


  document.documentElement.dir =
    lang === "ar"
      ? "rtl"
      : "ltr";


  /*
  |--------------------------------------------------------------------------
  | Arabic body class
  |--------------------------------------------------------------------------
  */

  document.body.classList.toggle(
    "ar",
    lang === "ar"
  );


  /*
  |--------------------------------------------------------------------------
  | Translate every data-i18n element
  |--------------------------------------------------------------------------
  */

  $$("[data-i18n]").forEach(
    element => {

      const key =
        element.dataset.i18n;


      if (
        I18N[lang]
        &&
        Object.prototype.hasOwnProperty.call(
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
  | Dynamic database text
  |--------------------------------------------------------------------------
  |
  | Keeps compatibility with dynamic sections using:
  |
  | data-db-i18n
  | data-en=""
  | data-ar=""
  |
  */

  $$("[data-db-i18n]").forEach(
    element => {

      const english =
        element.dataset.en
        || "";

      const arabic =
        element.dataset.ar
        || english;


      element.textContent =
        lang === "ar"
          ? arabic
          : english;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Dynamic ALT translation
  |--------------------------------------------------------------------------
  */

  $$("[data-db-alt]").forEach(
    image => {

      const english =
        image.dataset.altEn
        || "";

      const arabic =
        image.dataset.altAr
        || english;


      image.alt =
        lang === "ar"
          ? arabic
          : english;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Desktop language button
  |--------------------------------------------------------------------------
  */

  const langToggle =
    $("#langToggle");


  if (langToggle) {

    langToggle.innerHTML =
      lang === "en"
        ? "<span>EN</span> / <span>AR</span>"
        : "<span>AR</span> / <span>EN</span>";

  }


  /*
  |--------------------------------------------------------------------------
  | Mobile language button
  |--------------------------------------------------------------------------
  */

  const mobileLang =
    $("#mobileLang");


  if (mobileLang) {

    mobileLang.innerHTML =
      lang === "en"
        ? "<span>EN</span> / <span>AR</span>"
        : "<span>AR</span> / <span>EN</span>";

  }

}


/* =========================================================
   MOBILE MENU
   ========================================================= */

function closeMobile() {

  const mobileMenu =
    $("#mobileMenu");


  if (!mobileMenu) {
    return;
  }


  mobileMenu.classList.remove(
    "open"
  );


  mobileMenu.setAttribute(
    "aria-hidden",
    "true"
  );


  document.body.classList.remove(
    "no-scroll"
  );


  const menuToggle =
    $("#menuToggle");


  if (menuToggle) {

    menuToggle.setAttribute(
      "aria-expanded",
      "false"
    );

  }

}


/* =========================================================
   MOBILE MENU TOGGLE
   ========================================================= */

const menuToggle =
  $("#menuToggle");


const mobileMenu =
  $("#mobileMenu");


if (
  menuToggle
  &&
  mobileMenu
) {

  menuToggle.addEventListener(
    "click",
    () => {

      const isOpen =
        mobileMenu.classList.toggle(
          "open"
        );


      document.body.classList.toggle(
        "no-scroll",
        isOpen
      );


      mobileMenu.setAttribute(
        "aria-hidden",
        isOpen
          ? "false"
          : "true"
      );


      menuToggle.setAttribute(
        "aria-expanded",
        isOpen
          ? "true"
          : "false"
      );

    }
  );

}


/*
|--------------------------------------------------------------------------
| Close mobile menu when clicking a link
|--------------------------------------------------------------------------
*/

$$(
  "#mobileMenu a"
).forEach(
  link => {

    link.addEventListener(
      "click",
      closeMobile
    );

  }
);


/* =========================================================
   LANGUAGE BUTTON EVENTS
   ========================================================= */

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


/* =========================================================
   REVEAL ANIMATIONS
   ========================================================= */

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

              entry.target.classList.add(
                "visible"
              );


              revealObserver.unobserve(
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


  revealElements.forEach(
    element => {

      revealObserver.observe(
        element
      );

    }
  );

} else {

  /*
  |--------------------------------------------------------------------------
  | Browser fallback
  |--------------------------------------------------------------------------
  */

  revealElements.forEach(
    element => {

      element.classList.add(
        "visible"
      );

    }
  );

}


/* =========================================================
   BLOG HERO PARALLAX
   ========================================================= */

window.addEventListener(
  "scroll",
  () => {

    const scrolled =
      window.pageYOffset;


    const heroImage =
      $(".blog-hero img");


    if (heroImage) {

      heroImage.style.transform =
        `translateY(${scrolled * 0.3}px) scale(1)`;

    }

  },
  {
    passive: true
  }
);


/* =========================================================
   KEYBOARD SUPPORT
   ========================================================= */

document.addEventListener(
  "keydown",
  event => {

    if (
      event.key === "Escape"
    ) {

      closeMobile();

    }

  }
);


/* =========================================================
   INITIALIZATION
   ========================================================= */

const year =
  $("#year");


if (year) {

  year.textContent =
    new Date()
      .getFullYear();

}


/*
|--------------------------------------------------------------------------
| Apply business details
|--------------------------------------------------------------------------
*/

applyConfig();


/*
|--------------------------------------------------------------------------
| Apply saved language
|--------------------------------------------------------------------------
*/

applyLanguage(
  lang
);


/* =========================================================
   END OF BLOG JAVASCRIPT
   ========================================================= */