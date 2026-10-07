/* =========================================================
   ZAITOONA AL ANDALUS
   BLOG POST PAGE
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
   TRANSLATIONS
   ========================================================= */

const I18N = {

  en: {

    /* Announcement */

    announce1:
      "Doha, Qatar",

    announce2:
      "Restaurant · Shisha · Coffee Lounge",

    announce3:
      "Reservations Recommended",


    /* Navigation */

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

    About:
      "About",

    bookTable:
      "Book a table",


    /* Brand */

    brand:
      "Zaitoona Al Andalus",

    brandSub:
      "Restaurant · Shisha · Coffee",


    /* Blog Article */

    backJournal:
      "Back to Journal",

    writtenBy:
      "Written by",

    lastUpdated:
      "Last updated",

    articleDetails:
      "Article Details",

    category:
      "Category",

    published:
      "Published",

    author:
      "Author",

    topic:
      "Topic",


    /* Footer */

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

    /* Announcement */

    announce1:
      "الدوحة، قطر",

    announce2:
      "مطعم · شيشة · قهوة ولاونج",

    announce3:
      "يفضل الحجز مسبقاً",


    /* Navigation */

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

    About:
      "من نحن",

    bookTable:
      "احجز طاولة",


    /* Brand */

    brand:
      "زيتونة الأندلس",

    brandSub:
      "مطعم · شيشة · قهوة",


    /* Blog Article */

    backJournal:
      "العودة إلى المدونة",

    writtenBy:
      "كتب بواسطة",

    lastUpdated:
      "آخر تحديث",

    articleDetails:
      "تفاصيل المقال",

    category:
      "التصنيف",

    published:
      "تاريخ النشر",

    author:
      "الكاتب",

    topic:
      "الموضوع",


    /* Footer */

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
   GLOBAL STATE
   ========================================================= */

let lang =
  localStorage.getItem(
    "zaitoona-lang"
  )
  || "en";


if (
  !I18N[lang]
) {

  lang =
    "en";

}


/* =========================================================
   HELPERS
   ========================================================= */

const $ = (
  selector,
  root = document
) =>
  root.querySelector(
    selector
  );


const $$ = (
  selector,
  root = document
) =>
  [
    ...root.querySelectorAll(
      selector
    )
  ];


/* =========================================================
   BUSINESS CONFIG
   ========================================================= */

function applyConfig() {

  /*
  |--------------------------------------------------------------------------
  | Phone text
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
  | Phone links
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
  | Email text
  |--------------------------------------------------------------------------
  */

  $$(".js-email")
    .forEach(
      element => {

        element.textContent =
          CONFIG.email;

      }
    );


  /*
  |--------------------------------------------------------------------------
  | Email links
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
  | Address
  |--------------------------------------------------------------------------
  */

  $$(".js-address")
    .forEach(
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


  $$(".js-wa-btn")
    .forEach(
      element => {

        element.href =
          whatsappUrl;

      }
    );


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
  | Mobile Call
  |--------------------------------------------------------------------------
  */

  const mobileCall =
    $("#mobileCall");


  if (
    mobileCall
  ) {

    mobileCall.href =
      `tel:${CONFIG.phoneDial}`;

  }

}


/* =========================================================
   LANGUAGE
   ========================================================= */

function applyLanguage(
  selectedLanguage
) {

  /*
  |--------------------------------------------------------------------------
  | Validate Language
  |--------------------------------------------------------------------------
  */

  lang =
    selectedLanguage === "ar"
      ? "ar"
      : "en";


  /*
  |--------------------------------------------------------------------------
  | Save Language
  |--------------------------------------------------------------------------
  */

  localStorage.setItem(
    "zaitoona-lang",
    lang
  );


  /*
  |--------------------------------------------------------------------------
  | Document Language
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
  | Body Arabic Class
  |--------------------------------------------------------------------------
  */

  document.body.classList.toggle(
    "ar",
    lang === "ar"
  );


  /*
  |--------------------------------------------------------------------------
  | Static Translations
  |--------------------------------------------------------------------------
  */

  $$(
    "[data-i18n]"
  )
    .forEach(
      element => {

        const key =
          element.dataset.i18n;


        if (
          I18N[lang]
          &&
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


  /*
  |--------------------------------------------------------------------------
  | Dynamic Database Translations
  |--------------------------------------------------------------------------
  */

  $$(
    "[data-db-i18n]"
  )
    .forEach(
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
  | Dynamic Image ALT
  |--------------------------------------------------------------------------
  */

  $$(
    "[data-db-alt]"
  )
    .forEach(
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
  | Desktop Language Button
  |--------------------------------------------------------------------------
  */

  const langToggle =
    $("#langToggle");


  if (
    langToggle
  ) {

    langToggle.innerHTML =
      lang === "en"
        ? "<span>EN</span> / <span>AR</span>"
        : "<span>AR</span> / <span>EN</span>";

  }


  /*
  |--------------------------------------------------------------------------
  | Mobile Language Button
  |--------------------------------------------------------------------------
  */

  const mobileLang =
    $("#mobileLang");


  if (
    mobileLang
  ) {

    mobileLang.innerHTML =
      lang === "en"
        ? "<span>EN</span> / <span>AR</span>"
        : "<span>AR</span> / <span>EN</span>";

  }

}


/* =========================================================
   LANGUAGE EVENTS
   ========================================================= */

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


/* =========================================================
   MOBILE MENU
   ========================================================= */

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


  const menuToggle =
    $("#menuToggle");


  if (
    menuToggle
  ) {

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
        mobileMenu
          .classList
          .toggle(
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
| Close Menu Links
|--------------------------------------------------------------------------
*/

$$(
  "#mobileMenu a"
)
  .forEach(
    link => {

      link.addEventListener(
        "click",
        closeMobile
      );

    }
  );


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
          .1,

        rootMargin:
          "0px 0px -40px"
      }

    );


  revealElements.forEach(
    element => {

      revealObserver
        .observe(
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


/* =========================================================
   ARTICLE HERO PARALLAX
   ========================================================= */

window.addEventListener(
  "scroll",
  () => {

    const articleHeroImage =
      $(".article-hero-image");


    if (
      !articleHeroImage
    ) {

      return;

    }


    const scrolled =
      window.pageYOffset;


    articleHeroImage.style.transform =
      `translateY(${scrolled * 0.16}px) scale(1)`;

  },
  {
    passive:true
  }
);


/* =========================================================
   KEYBOARD
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
   YEAR
   ========================================================= */

const year =
  $("#year");


if (
  year
) {

  year.textContent =
    new Date()
      .getFullYear();

}


/* =========================================================
   INITIALIZATION
   ========================================================= */

applyConfig();


applyLanguage(
  lang
);


/* =========================================================
   END
   ========================================================= */