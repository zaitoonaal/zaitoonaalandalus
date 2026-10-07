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
/* End of Business Config Section */

/* =========================================================
   INTERNATIONALIZATION (I18N) DICTIONARY
   ========================================================= */
const I18N = {
  en: {
    announce1:"Doha, Qatar",announce2:"Restaurant · Shisha · Coffee Lounge",announce3:"Reservations Recommended",
    navHome:"Home",navMenu:"Menu",navExperience:"Experience",navGallery:"Gallery",navBlog:"Blog",navContact:"Contact",About:"About",bookTable:"Book a table",brand:"Zaitoona Al Andalus",brandSub:"Restaurant · Shisha · Coffee",
    heroKicker:"A refined Doha gathering place",hero1:"Taste.",hero2:"Breathe.",hero3:"Stay awhile.",heroDesc:"Mediterranean flavours, beautifully prepared shisha and coffee rituals — served with warm Andalusian-inspired hospitality in the heart of Doha.",reserveNow:"Reserve your table",exploreMenu:"Explore the menu",meta1Title:"All Day",meta1Text:"Dining",meta2Title:"Premium",meta2Text:"Shisha",meta3Title:"Late Night",meta3Text:"Coffee & Lounge",
    introEyebrow:"The Zaitoona experience",introTitle:"Rooted in hospitality. Made for Doha.",introCopy:"Zaitoona Al Andalus brings together the generosity of Arab hospitality and the relaxed elegance of Mediterranean café culture — a place to meet, dine, share shisha and let the evening unfold naturally.",detail1Title:"From the kitchen",detail1Text:"Shareable mezze, grilled signatures, fresh salads, desserts and all-day plates made for long tables and easy conversation.",detail2Title:"From the lounge",detail2Text:"Thoughtfully prepared shisha, specialty coffee, tea and refreshing drinks served in an unhurried, polished setting.",
    feat1Label:"Cuisine",feat1Title:"Culinary craft",feat1Text:"Modern Mediterranean and Middle Eastern flavours, plated with restraint and character.",feat2Label:"Lounge",feat2Title:"Relax with us",feat2Text:"Soft seating, warm service and a calm atmosphere that carries comfortably into the night.",feat3Label:"Coffee",feat3Title:"Coffee rituals",feat3Text:"Arabic coffee, espresso classics and slow-brew favourites — from first cup to late-night finish.",
    culinaryEyebrow:"Culinary mastery",culinaryTitle:"Made for sharing, remembered for flavour.",culinaryText:"Begin with mezze, move into flame-grilled favourites, then leave space for something sweet. Our menu is designed around generous plates, fresh ingredients and the pleasure of sharing.",culinaryList1:"Levantine & Mediterranean inspiration",culinaryList2:"Charcoal grill signatures",culinaryList3:"Fresh desserts, coffee & tea",seeMenu:"See signature menu",
    relaxEyebrow:"Relax with us",relaxTitle:"An evening with no reason to rush.",relaxText:"Zaitoona is shaped for easy gatherings — business catch-ups, family dinners, coffee with friends or a long shisha session after sunset.",relaxList1:"Comfortable lounge seating",relaxList2:"Calm day-to-night atmosphere",relaxList3:"Attentive table service",bookExperience:"Book your experience",
    shishaEyebrow:"The shisha ritual",shishaTitle:"Prepared with care. Enjoyed without hurry.",shishaText:"Choose your profile, settle in and leave the details to our shisha team. From familiar classics to deeper premium blends, each session is balanced for a smooth, consistent experience.",shisha1Title:"Classic",shisha1Text:"Bright, familiar flavours with a smooth easy draw.",shisha2Title:"Signature",shisha2Text:"House combinations layered for aroma, freshness and depth.",shisha3Title:"Premium",shisha3Text:"Richer leaf profiles for guests who prefer a more full-bodied session.",shisha4Title:"Fresh Head",shisha4Text:"Ask our team about seasonal fruit and specialty presentations.",shishaLegal:"Shisha service is offered in accordance with applicable local regulations.",
    galleryEyebrow:"Our atmosphere",galleryTitle:"A space that changes with the evening.",experienceIt:"Experience it",testimonialEyebrow:"What the evening should feel like",
    callUs:"Call us",
    footerAbout:"A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",footerExplore:"Explore",footerContact:"Contact",footerFollow:"Follow",instagram:"Instagram",tiktok:"TikTok",rights:"All rights reserved.",footerLine:"Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
  },
  ar: {
    announce1:"الدوحة، قطر",announce2:"مطعم · شيشة · قهوة ولاونج",announce3:"يفضل الحجز مسبقاً",
    navHome:"الرئيسية",navMenu:"القائمة",navExperience:"التجربة",navGallery:"الصور",navBlog:"المدونة",navContact:"تواصل",About:"من نحن",bookTable:"احجز طاولة",brand:"زيتونة الأندلس",brandSub:"مطعم · شيشة · قهوة",
    heroKicker:"وجهة راقية للقاءات في الدوحة",hero1:"تذوّق.",hero2:"استرخِ.",hero3:"وخُذ وقتك.",heroDesc:"نكهات متوسطية، شيشة محضّرة بعناية وطقوس قهوة أصيلة — بروح ضيافة دافئة مستوحاة من الأندلس في قلب الدوحة.",reserveNow:"احجز طاولتك",exploreMenu:"اكتشف القائمة",meta1Title:"طوال اليوم",meta1Text:"مطعم",meta2Title:"مميزة",meta2Text:"شيشة",meta3Title:"حتى وقت متأخر",meta3Text:"قهوة ولاونج",
    introEyebrow:"تجربة زيتونة",introTitle:"ضيافة أصيلة بروح الدوحة.",introCopy:"تجمع زيتونة الأندلس بين كرم الضيافة العربية وأناقة المقاهي المتوسطية الهادئة — مكان للقاء وتناول الطعام ومشاركة الشيشة وترك الأمسية تسير على مهل.",detail1Title:"من المطبخ",detail1Text:"مقبلات للمشاركة، مشاوي مميزة، سلطات طازجة، حلويات وأطباق طوال اليوم لطاولات طويلة وأحاديث أجمل.",detail2Title:"من اللاونج",detail2Text:"شيشة محضّرة بعناية، قهوة مختصة، شاي ومشروبات منعشة تقدم في أجواء راقية ومريحة.",
    feat1Label:"المطبخ",feat1Title:"إبداع الطهي",feat1Text:"نكهات متوسطية وشرق أوسطية عصرية بتقديم أنيق ومتوازن.",feat2Label:"اللاونج",feat2Title:"استرخِ معنا",feat2Text:"جلسات مريحة، خدمة دافئة وأجواء هادئة تمتد بسلاسة إلى الليل.",feat3Label:"القهوة",feat3Title:"طقوس القهوة",feat3Text:"قهوة عربية، كلاسيكيات الإسبريسو وطرق تقطير هادئة من أول فنجان حتى نهاية السهرة.",
    culinaryEyebrow:"إتقان الطهي",culinaryTitle:"أطباق للمشاركة ونكهات تبقى في الذاكرة.",culinaryText:"ابدأ بالمقبلات، ثم انتقل إلى أطباق الفحم المميزة واترك مساحة للحلو. صممنا قائمتنا حول الكرم، المكونات الطازجة ومتعة المشاركة.",culinaryList1:"إلهام شامي ومتوسطي",culinaryList2:"توقيعات الشواء على الفحم",culinaryList3:"حلويات طازجة وقهوة وشاي",seeMenu:"شاهد القائمة المختارة",
    relaxEyebrow:"استرخِ معنا",relaxTitle:"أمسية لا تحتاج إلى استعجال.",relaxText:"صُممت زيتونة للقاءات السهلة — اجتماع عمل، عشاء عائلي، قهوة مع الأصدقاء أو جلسة شيشة طويلة بعد الغروب.",relaxList1:"جلسات لاونج مريحة",relaxList2:"أجواء هادئة من النهار إلى الليل",relaxList3:"خدمة طاولات باهتمام",bookExperience:"احجز تجربتك",
    shishaEyebrow:"طقس الشيشة",shishaTitle:"تحضير بعناية. ومتعة بلا استعجال.",shishaText:"اختر الطابع الذي تفضله واترك التفاصيل لفريق الشيشة. من النكهات الكلاسيكية إلى الخلطات البريميوم الأعمق، نضبط كل جلسة لتكون سلسة ومتوازنة.",shisha1Title:"كلاسيك",shisha1Text:"نكهات مألوفة ومنعشة بسحبة سلسة.",shisha2Title:"توقيعنا",shisha2Text:"خلطات بيتية بطبقات من العطر والانتعاش والعمق.",shisha3Title:"بريميوم",shisha3Text:"نكهات أغنى لمن يفضلون جلسة أكثر امتلاءً.",shisha4Title:"رأس فواكه",shisha4Text:"اسأل فريقنا عن الفواكه الموسمية والتقديمات الخاصة.",shishaLegal:"تُقدّم خدمة الشيشة وفقاً للأنظمة المحلية المعمول بها.",
    galleryEyebrow:"أجواؤنا",galleryTitle:"مكان يتغير جماله مع كل ساعة من المساء.",experienceIt:"عِش التجربة",testimonialEyebrow:"هكذا يجب أن تشعر الأمسية",
    callUs:"اتصل بنا",
    footerAbout:"مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",footerExplore:"استكشف",footerContact:"تواصل",footerFollow:"تابعنا",instagram:"إنستغرام",tiktok:"تيك توك",rights:"جميع الحقوق محفوظة.",footerLine:"مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
  }
};
/* End of I18N Data Section */

/* =========================================================
   TESTIMONIAL QUOTES
   ========================================================= */
const QUOTES = {
  en: [
    ["“Elegant without feeling formal — the kind of place where dinner naturally becomes coffee, shisha and another hour with friends.”","Zaitoona Guest Experience"],
    ["“Warm service, a calm atmosphere and a menu made for sharing. Exactly what a Doha evening should feel like.”","Zaitoona Guest Experience ·"],
    ["“Come for the grill, stay for Arabic coffee and a beautifully prepared shisha. The pace of the place is the real luxury.”","Zaitoona Guest Experience ·"]
  ],
  ar: [
    ["«راقي من دون تكلّف — المكان الذي يتحول فيه العشاء بشكل طبيعي إلى قهوة وشيشة وساعة إضافية مع الأصدقاء.»","تجربة ضيف زيتونة · تقييم تجريبي"],
    ["«خدمة دافئة، أجواء هادئة وقائمة مصممة للمشاركة. هكذا يجب أن تكون أمسية الدوحة.»","تجربة ضيف زيتونة · تقييم تجريبي"],
    ["«تعال للمشاوي، وابقَ للقهوة العربية والشيشة المحضّرة بإتقان. هدوء المكان هو الفخامة الحقيقية.»","تجربة ضيف زيتونة · تقييم تجريبي"]
  ]
};
/* End of Testimonial Quotes Section */

/* =========================================================
   GLOBAL STATE & UTILS
   ========================================================= */
let lang = localStorage.getItem("zaitoona-lang") || "en";
let currentQuote = 0;

const $ = (s, root = document) => root.querySelector(s);  const $$ = (s, root = document) => [...root.querySelectorAll(s)];
/* End of Global State Section */

/* =========================================================
   APPLICATION CONFIGURATION
   ========================================================= */
function applyConfig() {
  $$(".js-phone").forEach(el => el.textContent = CONFIG.phoneDisplay);    $$
(".js-phone-link").forEach(el => el.href = `tel:${CONFIG.phoneDial}`);
  $$(".js-email").forEach(el => { el.textContent = CONFIG.email; el.href = `mailto:${CONFIG.email}`; });
  $$(".js-address").forEach(el => el.textContent = CONFIG.address);
  
  if ($("#mobileCall")) $("#mobileCall").href = `tel:${CONFIG.phoneDial}`;
  
  const wa = `https://wa.me/${CONFIG.whatsapp}`;
  if ($("#floatingWhatsapp")) $("#floatingWhatsapp").href = wa;
  if ($("#footerWhatsapp")) $("#footerWhatsapp").href = wa;
  
  const schemaEl = $("#schemaJson");    if (schemaEl) {      try {        const schema = JSON.parse(schemaEl.textContent);        schema.telephone = CONFIG.phoneDial;        schema.address.streetAddress = CONFIG.address;        schemaEl.textContent = JSON.stringify(schema);      } catch (e) {        console.warn("Schema JSON not found or invalid on this page.");      }    }  }  /* End of Application Config Function */    /* =========================================================     LANGUAGE TOGGLE LOGIC     ========================================================= */  function applyLanguage(newLang) {    lang = newLang;    localStorage.setItem("zaitoona-lang", lang);    document.documentElement.lang = lang;    document.documentElement.dir = lang === "ar" ? "rtl" : "ltr";    document.body.classList.toggle("ar", lang === "ar");       $$('[data-i18n]').forEach(el => {
    const k = el.dataset.i18n;
    if (I18N[lang][k]) el.textContent = I18N[lang][k];
  });
  
  if ($("#langToggle")) $("#langToggle").innerHTML = lang === "en" ? "<span>EN</span> / <span>AR</span>" : "<span>AR</span> / <span>EN</span>";
  if ($("#mobileLang")) $("#mobileLang").innerHTML = lang === "en" ? "<span>EN</span> / <span>AR</span>" : "<span>AR</span> / <span>EN</span>";
  
  renderQuotes();
}
/* End of Language Logic Section */

/* =========================================================
   TESTIMONIAL RENDERER
   ========================================================= */
function renderQuotes() {
  const quoteText = $("#quoteText");
  const quoteAuthor = $("#quoteAuthor");
  const quoteDots = $("#quoteDots");

  if (!quoteText || !quoteAuthor || !quoteDots) return;

  const qs = QUOTES[lang];
  if (currentQuote >= qs.length) currentQuote = 0;
  
  quoteText.textContent = qs[currentQuote][0];
  quoteAuthor.textContent = qs[currentQuote][1];
  
  quoteDots.innerHTML = qs.map((_, i) => `<button class="quote-dot ${i === currentQuote ? 'active' : ''}" aria-label="Quote ${i + 1}" data-q="${i}"></button>`).join("");
  
  $$(".quote-dot").forEach(btn => btn.addEventListener("click", () => {
    currentQuote = +btn.dataset.q;
    renderQuotes();
  }));
}
/* End of Testimonial Logic Section */

/* =========================================================
   EVENT LISTENERS & OBSERVERS
   ========================================================= */
window.addEventListener("load", () => setTimeout(() => {
  if ($("#loader")) $("#loader").classList.add("hidden");
}, 450));

setTimeout(() => { if ($("#loader")) $("#loader").classList.add("hidden"); }, 2200);

const header = $("#header");
if (header) {
  window.addEventListener("scroll", () => header.classList.toggle("scrolled", window.scrollY > 28), { passive: true });
}

const navTargets = $$("main section[id]");  const navObserver = new IntersectionObserver(entries => {    entries.forEach(e => {      if (e.isIntersecting) {        $$('.nav-left .nav-link').forEach(a => {
        if (a.getAttribute('href').startsWith('#')) {
          a.classList.toggle('active', a.getAttribute('href') === `#${e.target.id}`);
        }
      });
    }
  });
}, { rootMargin: "-30% 0px -60% 0px" });
navTargets.forEach(s => navObserver.observe(s));

function closeMobile() {
  if ($("#mobileMenu")) {
    $("#mobileMenu").classList.remove("open");
    document.body.classList.remove("no-scroll");
    $("#mobileMenu").setAttribute("aria-hidden", "true");
  }
}

if ($("#menuToggle")) {
  $("#menuToggle").addEventListener("click", () => {
    $("#mobileMenu").classList.toggle("open");
    document.body.classList.toggle("no-scroll");
    $("#mobileMenu").setAttribute("aria-hidden", $("#mobileMenu").classList.contains("open") ? "false" : "true");      });  }   $$("#mobileMenu a").forEach(a => a.addEventListener("click", closeMobile));

if ($("#langToggle")) $("#langToggle").addEventListener("click", () => applyLanguage(lang === "en" ? "ar" : "en"));
if ($("#mobileLang")) $("#mobileLang").addEventListener("click", () => applyLanguage(lang === "en" ? "ar" : "en"));

const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add("visible");
      revealObserver.unobserve(e.target);
    }
  });
}, { threshold: .1, rootMargin: "0px 0px -40px" });
$$(".reveal").forEach(el => revealObserver.observe(el));    /* Lightbox Modal Logic */  $$
(".gallery-item img").forEach(img => {
  img.addEventListener("click", () => {
    const lightboxImage = $("#lightboxImage");
    const lightbox = $("#lightbox");
    if (lightboxImage && lightbox) {
      lightboxImage.src = img.src.replace(/w=\d+/, "w=1800");
      lightbox.classList.add("open");
      document.body.classList.add("no-scroll");
    }
  });
});

function closeLightbox() {
  if ($("#lightbox")) {
    $("#lightbox").classList.remove("open");
    document.body.classList.remove("no-scroll");
  }
}

if ($("#lightboxClose")) $("#lightboxClose").addEventListener("click", closeLightbox);
if ($("#lightbox")) {
  $("#lightbox").addEventListener("click", e => {
    if (e.target === $("#lightbox")) closeLightbox();
  });
}
document.addEventListener("keydown", e => {
  if (e.key === "Escape") { closeLightbox(); closeMobile(); }
});

setInterval(() => {
  if ($("#quoteText")) {
    currentQuote = (currentQuote + 1) % QUOTES[lang].length;
    renderQuotes();
  }
}, 7000);

/* =========================================================
   INITIALIZATION
   ========================================================= */
if ($("#year")) $("#year").textContent = new Date().getFullYear();
applyConfig();
applyLanguage(lang);
renderQuotes();