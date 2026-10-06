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

const I18N = {
  en:{
    announce1:"Doha, Qatar",announce2:"Restaurant · Shisha · Coffee Lounge",announce3:"Reservations Recommended",
    navHome:"Home",navMenu:"Menu",navExperience:"Experience",navGallery:"Gallery",navContact:"Contact",bookTable:"Book a table",brand:"Zaitoona Al Andalaus",brandSub:"Restaurant · Shisha · Coffee",
    blogHeroTitle:"Our Journal",
    blogIntroHeading:"Stories from the Table",
    blogIntroText:"Discover the inspiration behind our Mediterranean menus, the heritage of our premium shisha, and the delicate art of Arabic coffee. Welcome to the Zaitoona journal.",
    readMore:"Read More", loadMore:"Load More Articles",
    footerAbout:"A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",footerExplore:"Explore",footerContact:"Contact",footerFollow:"Follow",instagram:"Instagram",tiktok:"TikTok",rights:"All rights reserved.",footerLine:"Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
  },
  ar:{
    announce1:"الدوحة، قطر",announce2:"مطعم · شيشة · قهوة ولاونج",announce3:"يفضل الحجز مسبقاً",
    navHome:"الرئيسية",navMenu:"القائمة",navExperience:"التجربة",navGallery:"الصور",navContact:"تواصل",bookTable:"احجز طاولة",brand:"زيتونة الأندلس",brandSub:"مطعم · شيشة · قهوة",
    blogHeroTitle:"مجلتنا",
    blogIntroHeading:"قصص من المائدة",
    blogIntroText:"اكتشف الإلهام وراء قوائمنا المتوسطية، وتراث الشيشة الفاخرة لدينا، والفن الدقيق لتحضير القهوة العربية. مرحبًا بك في مجلة زيتونة.",
    readMore:"اقرأ المزيد", loadMore:"تحميل المزيد من المقالات",
    footerAbout:"مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",footerExplore:"استكشف",footerContact:"تواصل",footerFollow:"تابعنا",instagram:"إنستغرام",tiktok:"تيك توك",rights:"جميع الحقوق محفوظة.",footerLine:"مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
  }
};
/* End of Config Section */

/* =========================================================
   GLOBAL STATE & UTILS
   ========================================================= */
let lang = localStorage.getItem("zaitoona-lang") || "en";
const $ = (s,root=document)=>root.querySelector(s); const $$ = (s,root=document)=>[...root.querySelectorAll(s)];

function applyConfig(){
  $$(".js-phone").forEach(el=>el.textContent=CONFIG.phoneDisplay);   $$
(".js-phone-link").forEach(el=>el.href=`tel:${CONFIG.phoneDial}`);
  $$(".js-email-link").forEach(el=>{el.href=`mailto:${CONFIG.email}`});
  $$(".js-address").forEach(el=>el.textContent=CONFIG.address);
  const wa=`https://wa.me/${CONFIG.whatsapp}`;
  $$(".js-wa-btn").forEach(el=>{if(el) el.href=wa});
  if($("#floatingWhatsapp")) $("#floatingWhatsapp").href=wa;
  if($("#footerWhatsapp")) $("#footerWhatsapp").href=wa; } /* End of Setup Utils */  /* =========================================================    LANGUAGE TOGGLE LOGIC    ========================================================= */ function applyLanguage(newLang){   lang=newLang;localStorage.setItem("zaitoona-lang",lang);   document.documentElement.lang=lang;document.documentElement.dir=lang==="ar"?"rtl":"ltr";   document.body.classList.toggle("ar",lang==="ar");   $$('[data-i18n]').forEach(el=>{const k=el.dataset.i18n;if(I18N[lang][k])el.textContent=I18N[lang][k]});$("#langToggle").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  if($("#mobileLang")) {
    $("#mobileLang").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  }
}
/* End of Language Logic */

/* =========================================================
   MOBILE MENU & EVENT LISTENERS
   ========================================================= */
function closeMobile(){$("#mobileMenu").classList.remove("open");document.body.classList.remove("no-scroll");if($("#mobileMenu"))$("#mobileMenu").setAttribute("aria-hidden","true")}
if($("#menuToggle")) {
  $("#menuToggle").addEventListener("click",()=>{
    $("#mobileMenu").classList.toggle("open");
    document.body.classList.toggle("no-scroll");
    $("#mobileMenu").setAttribute("aria-hidden",$("#mobileMenu").classList.contains("open")?"false":"true");   }); } $$("#mobileMenu a").forEach(a=>a.addEventListener("click",closeMobile));

if($("#langToggle")) $("#langToggle").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en"));
if($("#mobileLang")) $("#mobileLang").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en")); /* End of Event Listeners */  /* =========================================================    REVEAL ANIMATIONS ON SCROLL    ========================================================= */ const revealObserver=new IntersectionObserver(entries=>{entries.forEach(e=>{   if(e.isIntersecting){     e.target.classList.add("visible");     revealObserver.unobserve(e.target);   } })},{threshold:.1, rootMargin:"0px 0px -40px"}); $$(".reveal").forEach(el=>revealObserver.observe(el));
/* End of Intersection Observer */

/* =========================================================
   PARALLAX SCROLL FOR HERO
   ========================================================= */
window.addEventListener('scroll', () => {
  const scrolled = window.pageYOffset;
  const heroImg = $('.blog-hero img');
  if (heroImg) {
    heroImg.style.transform = `translateY(${scrolled * 0.3}px) scale(1)`;
  }
});
/* End of Parallax effect */

/* =========================================================
   INITIALIZATION
   ========================================================= */
if($("#year")) $("#year").textContent=new Date().getFullYear();
applyConfig();
applyLanguage(lang);
/* End of JS Initialization */