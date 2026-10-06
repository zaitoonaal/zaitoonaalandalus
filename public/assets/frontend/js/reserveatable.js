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
    bookEyebrow:"Reserve your table",bookTitle:"Your table is waiting.",bookText:"Send your booking request directly to our team. For groups, celebrations or preferred lounge seating, add a note and we will confirm availability with you.",phoneLabel:"Phone / WhatsApp",hoursLabel:"Opening hours",hoursValue:"Daily · 10:00 AM – 2:00 AM",locationLabel:"Location",locationValue:"Doha, Qatar",
    formName:"Your name",formPhone:"Phone number",formDate:"Date",formTime:"Time",formGuests:"Guests",formSeating:"Seating preference",seatNoPref:"No preference",seatDining:"Dining area",seatLounge:"Shisha lounge",seatOutdoor:"Outdoor / terrace",formMessage:"Message",sendBooking:"Send booking by WhatsApp",formNote:"Submitting opens WhatsApp with your reservation details. Your booking is confirmed only after our team replies.",
    footerAbout:"A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",footerExplore:"Explore",footerContact:"Contact",footerFollow:"Follow",instagram:"Instagram",tiktok:"TikTok",rights:"All rights reserved.",footerLine:"Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
  },
  ar:{
    announce1:"الدوحة، قطر",announce2:"مطعم · شيشة · قهوة ولاونج",announce3:"يفضل الحجز مسبقاً",
    navHome:"الرئيسية",navMenu:"القائمة",navExperience:"التجربة",navGallery:"الصور",navContact:"تواصل",bookTable:"احجز طاولة",brand:"زيتونة الأندلس",brandSub:"مطعم · شيشة · قهوة",
    bookEyebrow:"احجز طاولتك",bookTitle:"طاولتك بانتظارك.",bookText:"أرسل طلب الحجز مباشرة إلى فريقنا. للمجموعات والمناسبات أو لاختيار جلسة لاونج محددة، أضف ملاحظة وسنؤكد التوفر معك.",phoneLabel:"الهاتف / واتساب",hoursLabel:"ساعات العمل",hoursValue:"يومياً · 10:00 صباحاً – 2:00 فجراً",locationLabel:"الموقع",locationValue:"الدوحة، قطر",
    formName:"الاسم",formPhone:"رقم الهاتف",formDate:"التاريخ",formTime:"الوقت",formGuests:"عدد الضيوف",formSeating:"تفضيل الجلسة",seatNoPref:"بدون تفضيل",seatDining:"منطقة الطعام",seatLounge:"لاونج الشيشة",seatOutdoor:"جلسة خارجية / تراس",formMessage:"ملاحظات",sendBooking:"أرسل الحجز عبر واتساب",formNote:"سيتم فتح واتساب مع تفاصيل الحجز. يصبح الحجز مؤكداً بعد رد فريقنا.",
    footerAbout:"مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",footerExplore:"استكشف",footerContact:"تواصل",footerFollow:"تابعنا",instagram:"إنستغرام",tiktok:"تيك توك",rights:"جميع الحقوق محفوظة.",footerLine:"مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
  }
};

let lang = localStorage.getItem("zaitoona-lang") || "en";
const $ = (s,root=document)=>root.querySelector(s); const $$ = (s,root=document)=>[...root.querySelectorAll(s)];

function applyConfig(){
  $$(".js-phone").forEach(el=>el.textContent=CONFIG.phoneDisplay);   $$
(".js-phone-link").forEach(el=>el.href=`tel:${CONFIG.phoneDial}`);
  $$(".js-email").forEach(el=>{el.textContent=CONFIG.email;el.href=`mailto:${CONFIG.email}`});
  $$(".js-address").forEach(el=>el.textContent=CONFIG.address);
  const wa=`https://wa.me/${CONFIG.whatsapp}`;
  if($("#floatingWhatsapp")) $("#floatingWhatsapp").href=wa;
  if($("#footerWhatsapp")) $("#footerWhatsapp").href=wa; }  function applyLanguage(newLang){   lang=newLang;localStorage.setItem("zaitoona-lang",lang);   document.documentElement.lang=lang;document.documentElement.dir=lang==="ar"?"rtl":"ltr";   document.body.classList.toggle("ar",lang==="ar");   $$('[data-i18n]').forEach(el=>{const k=el.dataset.i18n;if(I18N[lang][k])el.textContent=I18N[lang][k]});
  if($("#langToggle")) $("#langToggle").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  if($("#mobileLang")) $("#mobileLang").innerHTML=lang==="en"?"<span>EN</span> / <span>AR</span>":"<span>AR</span> / <span>EN</span>";
  if($("#name")) $("#name").placeholder=lang==="en"?"Your name":"الاسم";
  if($("#message")) $("#message").placeholder=lang==="en"?"Celebration, dietary notes or seating request...":"مناسبة، حساسية غذائية أو طلب جلسة...";
}

/* mobile menu */
function closeMobile(){if($("#mobileMenu")){$("#mobileMenu").classList.remove("open");document.body.classList.remove("no-scroll");$("#mobileMenu").setAttribute("aria-hidden","true")}}
if($("#menuToggle")) {
  $("#menuToggle").addEventListener("click",()=>{
    $("#mobileMenu").classList.toggle("open");
    document.body.classList.toggle("no-scroll");
    $("#mobileMenu").setAttribute("aria-hidden",$("#mobileMenu").classList.contains("open")?"false":"true");   }); } $$("#mobileMenu a").forEach(a=>a.addEventListener("click",closeMobile));

/* language */
if($("#langToggle")) $("#langToggle").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en"));
if($("#mobileLang")) $("#mobileLang").addEventListener("click",()=>applyLanguage(lang==="en"?"ar":"en"));  /* reveals */ const revealObserver=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add("visible");revealObserver.unobserve(e.target)}})},{threshold:.1,rootMargin:"0px 0px -40px"}); $$(".reveal").forEach(el=>revealObserver.observe(el));

/* booking form logic */
if($("#date")) {
  const today=new Date();
  today.setMinutes(today.getMinutes()-today.getTimezoneOffset());
  $("#date").min=today.toISOString().split("T")[0];
}

if($("#bookingForm")) {
  $("#bookingForm").addEventListener("submit",e=>{
    e.preventDefault();
    const form=e.currentTarget;
    const status=$("#formStatus");
    if(!form.checkValidity()){form.reportValidity();return}
    const f=new FormData(form);
    const lines=lang==="en"?[
      "Hello Zaitoona Al Andalaus, I would like to request a table reservation:","",`Name: ${f.get('name')}`,`Phone: ${f.get('phone')}`,`Date: ${f.get('date')}`,`Time: ${f.get('time')}`,`Guests: ${f.get('guests')}`,`Seating: ${f.get('seating')}`,`Message: ${f.get('message')||'-'}`
    ]:[
      "مرحباً زيتونة الأندلس، أود طلب حجز طاولة:","",`الاسم: ${f.get('name')}`,`الهاتف: ${f.get('phone')}`,`التاريخ: ${f.get('date')}`,`الوقت: ${f.get('time')}`,`الضيوف: ${f.get('guests')}`,`الجلسة: ${f.get('seating')}`,`الملاحظات: ${f.get('message')||'-'}`
    ];
    status.textContent=lang==="en"?"Opening WhatsApp with your booking details…":"جاري فتح واتساب مع تفاصيل الحجز…";status.classList.add("show");
    const url=`https://wa.me/${CONFIG.whatsapp}?text=${encodeURIComponent(lines.join('\n'))}`;window.open(url,"_blank","noopener");
  });
}

if($("#year")) $("#year").textContent=new Date().getFullYear();
applyConfig();applyLanguage(lang);