/* =========================================================
   ZAITOONA AL ANDALUS
   BLOG LISTING PAGE
   ========================================================= */


/* =========================================================
   BUSINESS CONFIG
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
    navBlog: "Blog",
    navContact: "Contact",
    navAbout: "About",
    About: "About",
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

    noStoriesHeading: "Our Journal",
    noStoriesText: "New stories are coming soon.",

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
    navBlog: "المدونة",
    navContact: "تواصل",
    navAbout: "من نحن",
    About: "من نحن",
    bookTable: "احجز طاولة",

    /* Brand */
    brand: "زيتونة الأندلس",
    brandSub: "مطعم · شيشة · قهوة",

    /* Blog */
    blogHeroTitle: "مجلتنا",
    blogIntroHeading: "قصص من المائدة",

    blogIntroText:
      "اكتشف الإلهام وراء قوائمنا المتوسطية، وتراث الشيشة الفاخرة لدينا، والفن الدقيق لتحضير القهوة العربية. مرحباً بك في مجلة زيتونة.",

    readMore: "اقرأ المزيد",
    loadMore: "تحميل المزيد من المقالات",

    noStoriesHeading: "مجلتنا",
    noStoriesText: "قصص جديدة قادمة قريباً.",

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
   GLOBAL STATE & HELPERS
   ========================================================= */

let lang =
  localStorage.getItem("zaitoona-lang")
  || "en";


if (!I18N[lang]) {
  lang = "en";
}


const $ = (
  selector,
  root = document
) => root.querySelector(selector);


const $$ = (
  selector,
  root = document
) => [
  ...root.querySelectorAll(selector)
];


/* =========================================================
   BUSINESS CONFIG
   ========================================================= */

function applyConfig() {

  $$(".js-phone").forEach(
    element => {
      element.textContent =
        CONFIG.phoneDisplay;
    }
  );


  $$(".js-phone-link").forEach(
    element => {
      element.href =
        `tel:${CONFIG.phoneDial}`;
    }
  );


  $$(".js-email").forEach(
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


  $$(".js-email-link").forEach(
    element => {
      element.href =
        `mailto:${CONFIG.email}`;
    }
  );


  $$(".js-address").forEach(
    element => {
      element.textContent =
        CONFIG.address;
    }
  );


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


  const mobileCall =
    $("#mobileCall");


  if (mobileCall) {
    mobileCall.href =
      `tel:${CONFIG.phoneDial}`;
  }

}


/* =========================================================
   STATIC TRANSLATIONS
   ========================================================= */

function applyStaticTranslations() {

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

}


/* =========================================================
   DYNAMIC DATABASE TRANSLATIONS
   ========================================================= */

function applyDatabaseTranslations() {

  /*
  |--------------------------------------------------------------------------
  | Dynamic Text
  |--------------------------------------------------------------------------
  */

  $$("[data-db-i18n]").forEach(
    element => {

      const english =
        element.getAttribute(
          "data-en"
        )
        || "";


      const arabic =
        element.getAttribute(
          "data-ar"
        )
        || english;


      element.textContent =
        lang === "ar"
          ? (
              arabic
              || english
            )
          : english;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Dynamic ALT
  |--------------------------------------------------------------------------
  */

  $$("[data-db-alt]").forEach(
    image => {

      const english =
        image.getAttribute(
          "data-alt-en"
        )
        || "";


      const arabic =
        image.getAttribute(
          "data-alt-ar"
        )
        || english;


      image.alt =
        lang === "ar"
          ? (
              arabic
              || english
            )
          : english;

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Dynamic Links
  |--------------------------------------------------------------------------
  */

  $$("[data-db-href]").forEach(
    element => {

      const englishUrl =
        element.getAttribute(
          "data-href-en"
        );


      const arabicUrl =
        element.getAttribute(
          "data-href-ar"
        )
        || englishUrl;


      const finalUrl =
        lang === "ar"
          ? arabicUrl
          : englishUrl;


      if (finalUrl) {
        element.href =
          finalUrl;
      }

    }
  );


  /*
  |--------------------------------------------------------------------------
  | Dynamic ARIA Labels
  |--------------------------------------------------------------------------
  */

  $$("[data-db-aria]").forEach(
    element => {

      const english =
        element.getAttribute(
          "data-aria-en"
        )
        || "";


      const arabic =
        element.getAttribute(
          "data-aria-ar"
        )
        || english;


      const finalLabel =
        lang === "ar"
          ? arabic
          : english;


      if (finalLabel) {

        element.setAttribute(
          "aria-label",
          finalLabel
        );

      }

    }
  );

}


/* =========================================================
   BLOG LISTING SEO SWITCH
   ========================================================= */

function setMetaByName(
  name,
  content
) {

  if (!content) {
    return;
  }


  const meta =
    document.querySelector(
      `meta[name="${name}"]`
    );


  if (meta) {
    meta.setAttribute(
      "content",
      content
    );
  }

}


function setMetaByProperty(
  property,
  content
) {

  if (!content) {
    return;
  }


  const meta =
    document.querySelector(
      `meta[property="${property}"]`
    );


  if (meta) {
    meta.setAttribute(
      "content",
      content
    );
  }

}


function updateListingSeo() {

  const seoElement =
    $("#blogListingSeoData");


  if (!seoElement) {
    return;
  }


  try {

    const seoData =
      JSON.parse(
        seoElement.textContent
      );


    const seo =
      seoData[lang]
      || seoData.en;


    if (!seo) {
      return;
    }


    if (seo.title) {
      document.title =
        seo.title;
    }


    setMetaByName(
      "description",
      seo.description
    );


    setMetaByName(
      "robots",
      seo.robots
    );


    setMetaByProperty(
      "og:title",
      seo.title
    );


    setMetaByProperty(
      "og:description",
      seo.description
    );


    setMetaByProperty(
      "og:url",
      seo.url
    );


    setMetaByProperty(
      "og:locale",
      seo.locale
    );


    setMetaByName(
      "twitter:title",
      seo.title
    );


    setMetaByName(
      "twitter:description",
      seo.description
    );


    const canonical =
      document.querySelector(
        'link[rel="canonical"]'
      );


    if (
      canonical
      &&
      seo.url
    ) {

      canonical.href =
        seo.url;

    }

  } catch (error) {

    console.warn(
      "Unable to update blog listing SEO."
    );

  }

}


/* =========================================================
   LANGUAGE SYSTEM
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


  applyStaticTranslations();


  applyDatabaseTranslations();


  updateListingSeo();


  const languageMarkup =
    lang === "en"
      ? "<span>EN</span> / <span>AR</span>"
      : "<span>AR</span> / <span>EN</span>";


  const langToggle =
    $("#langToggle");


  if (langToggle) {
    langToggle.innerHTML =
      languageMarkup;
  }


  const mobileLang =
    $("#mobileLang");


  if (mobileLang) {
    mobileLang.innerHTML =
      languageMarkup;
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


if (year) {

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