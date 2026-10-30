<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<script>document.documentElement.classList.add("js")</script>
<title>Padel KZ — CRM для падел-клуба</title>
<meta name="description" content="Сетка кортов, касса с Kaspi, тренеры, абонементы и турниры в одной CRM. Бронь из приложения Padel KZ сразу попадает в сетку администратора.">
<meta name="theme-color" content="#0C110F">
<link rel="canonical" href="https://padelkz.kz/">
<meta property="og:type" content="website">
<meta property="og:url" content="https://padelkz.kz/">
<meta property="og:title" content="Padel KZ — CRM для падел-клуба">
<meta property="og:description" content="Корты, касса, тренеры, абонементы и турниры клуба в одной системе.">
<meta property="og:image" content="https://padelkz.kz/img/og.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="favicon.ico" sizes="any">
<link rel="icon" href="img/mark.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="preload" href="fonts/onest-cyrillic.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="img/schedule.webp" as="image" type="image/webp" fetchpriority="high">
<style>
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(fonts/onest-cyrillic-ext.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C8A,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(fonts/onest-cyrillic.woff2) format("woff2");unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(fonts/onest-latin-ext.woff2) format("woff2");unicode-range:U+0100-02BA,U+02BD-02C5,U+02C7-02CC,U+02CE-02D7,U+02DD-02FF,U+0304,U+0308,U+0329,U+1D00-1DBF,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C4,U+2113,U+2C60-2C7F,U+A720-A7FF}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(fonts/onest-latin.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}

:root{
  --bg:#0C110F; --surface:#141B18; --surface-2:#1A2320; --line:#25302B; --line-2:#33413A;
  --text:#EDF2EE; --text-2:#B0BDB6; --text-3:#85938C;
  --accent:#22C47A; --accent-hi:#38D38B; --on-accent:#04140C;
  --font:"Onest",system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;
  --w-regular:400; --w-medium:500; --w-bold:700;
  --s1:4px; --s2:8px; --s3:12px; --s4:16px; --s5:24px; --s6:32px; --s7:48px; --s8:64px; --s9:96px; --s10:144px;
  --r-sm:8px; --r:14px; --r-lg:24px;
  --gutter:clamp(16px,4vw,40px); --wrap:1240px; --nav-h:68px;
  --ease-out:cubic-bezier(0.23,1,0.32,1); --ease-in-out:cubic-bezier(0.77,0,0.175,1); --ease-drawer:cubic-bezier(0.32,0.72,0,1);
  --shadow:0 28px 56px -24px rgba(0,0,0,.7),0 2px 6px rgba(0,0,0,.35);
  interpolate-size:allow-keywords;
}
*,*::before,*::after{box-sizing:border-box}
html{-webkit-tap-highlight-color:transparent;-webkit-text-size-adjust:100%;caret-color:var(--accent);scrollbar-color:var(--line-2) var(--bg);scroll-behavior:smooth;scroll-padding-top:calc(var(--nav-h) + 16px)}
body{margin:0;background:var(--bg);color:var(--text);font:var(--w-regular) 1.0625rem/1.65 var(--font);font-variant-numeric:tabular-nums;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;overflow-x:hidden}
::selection{background:var(--accent);color:var(--on-accent)}
:focus-visible{outline:2px solid var(--accent);outline-offset:3px;border-radius:4px}
a{color:inherit;text-underline-offset:.18em;text-decoration-thickness:from-font}
h1,h2,h3{margin:0;text-wrap:balance;font-weight:var(--w-bold)}
p{margin:0;text-wrap:pretty;max-width:66ch}
img{max-width:100%;height:auto;display:block}
input,textarea,select,button{font:inherit}
input,textarea,select{font-size:max(16px,1rem)}
button,.btn{touch-action:manipulation;user-select:none;-webkit-user-select:none}
.wrap{width:100%;max-width:calc(var(--wrap) + var(--gutter)*2);margin:0 auto;padding:0 var(--gutter)}
.skip{position:absolute;left:-9999px;top:8px;background:var(--accent);color:var(--on-accent);padding:8px 12px;border-radius:var(--r-sm);z-index:100}
.skip:focus{left:8px}

/* кнопки */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;min-height:52px;padding:0 26px;border-radius:999px;border:1px solid transparent;font-weight:var(--w-bold);font-size:1rem;line-height:1;white-space:nowrap;text-decoration:none;cursor:pointer;transition:transform 160ms var(--ease-out),background-color 150ms ease,border-color 150ms ease,color 150ms ease}
.btn:active{transform:scale(.97)}
.btn-primary{background:var(--accent);color:var(--on-accent)}
.btn-ghost{border-color:var(--line-2);color:var(--text)}
.btn-sm{min-height:44px;padding:0 20px;font-size:.9375rem}
.btn .arr{transition:transform 200ms var(--ease-out)}
@media (hover:hover) and (pointer:fine){
  .btn-primary:hover{background:var(--accent-hi)}
  .btn-ghost:hover{border-color:var(--text-3);background:var(--surface)}
  .btn:hover .arr{transform:translateX(3px)}
  .nav-links a:hover{color:var(--text)}
}

/* навигация */
.nav{position:fixed;inset:0 0 auto;z-index:50;height:var(--nav-h);transition:background-color 200ms ease,border-color 200ms ease;border-bottom:1px solid transparent}
.nav.solid{background:rgba(12,17,15,.94);border-bottom-color:var(--line)}
.nav .wrap{height:100%;display:flex;align-items:center;gap:var(--s6)}
.nav-logo{display:flex;align-items:center;height:44px;flex-shrink:0}
.nav-logo img{height:30px;width:auto}
.nav-links{display:flex;gap:var(--s5);margin-left:auto;font-size:.9375rem;color:var(--text-2)}
.nav-links a{position:relative;text-decoration:none;padding:10px 2px;transition:color 150ms ease}
.nav-links a::after{content:"";position:absolute;left:2px;right:2px;bottom:4px;height:2px;border-radius:2px;background:var(--accent);transform:scaleX(0);transition:transform 260ms var(--ease-out)}
.nav-links a.on{color:var(--text)}
.nav-links a.on::after{transform:none}
.nav .btn{margin-left:var(--s2)}

/* герой */
.hero{min-height:100svh;padding:calc(var(--nav-h) + clamp(40px,8vh,104px)) 0 clamp(8px,2vw,32px);overflow:hidden}
.hero-copy{max-width:880px;margin:0 auto;text-align:center}
.hero h1{font-size:clamp(2.75rem,6vw,5.5rem);line-height:1;letter-spacing:-.035em}
.nw{white-space:nowrap}
.hero-sub{margin:var(--s5) auto 0;font-size:clamp(1.0625rem,1.4vw,1.25rem);color:var(--text-2);max-width:40ch}
.hero-cta{display:flex;flex-wrap:wrap;justify-content:center;gap:var(--s3);margin-top:var(--s6)}
.hero-visual{position:relative;margin-top:clamp(48px,6vw,80px);padding-bottom:clamp(40px,5vw,72px);perspective:1800px}
.hero-visual .win{transform-origin:50% 100%;transform:rotateX(var(--tilt,0deg));will-change:transform}

/* слова заголовков выезжают из-под маски */
.wm{display:inline-block;overflow:hidden;vertical-align:top;padding:.1em 0 .16em;margin:-.1em 0 -.16em}
.wi{display:inline-block}
@keyframes wordUp{from{transform:translateY(110%)}to{transform:none}}
@keyframes rise{from{opacity:0;transform:translateY(var(--rise,24px))}to{opacity:1;transform:none}}
html.js .hero h1 .wi{animation:wordUp 800ms var(--ease-out) both;animation-delay:calc(var(--i) * 70ms)}
html.js .hero-sub{animation:rise 700ms var(--ease-out) 160ms both}
html.js .hero-cta{animation:rise 700ms var(--ease-out) 240ms both}
html.js .hero-visual{--rise:56px;animation:rise 1100ms var(--ease-out) 300ms both}
html.js .hero-phone{--rise:72px;animation:rise 1100ms var(--ease-out) 620ms both}
html.js .split .wi{transform:translateY(110%);transition:transform 800ms var(--ease-out);transition-delay:calc(var(--i) * 55ms)}
html.js .split.in .wi{transform:none}

/* окно CRM */
.win{background:var(--surface);border:1px solid var(--line);border-radius:var(--r);overflow:hidden}
.win-bar{display:flex;align-items:center;justify-content:space-between;gap:var(--s3);height:38px;padding:0 var(--s4);border-bottom:1px solid var(--line);font-size:.8125rem;color:var(--text-3);white-space:nowrap}
.win-bar b{font-weight:var(--w-medium);color:var(--text-2);overflow:hidden;text-overflow:ellipsis}
.win-pic{position:relative;background:#0E1010}
.win-pic img{width:100%}

/* выноски на сетке */
.mark{position:absolute;border:2px solid var(--accent);border-radius:6px;opacity:0;transform:scale(1.04);transition:opacity 260ms var(--ease-out),transform 260ms var(--ease-out);pointer-events:none}
.mark span{position:absolute;left:-2px;top:calc(100% + 6px);background:var(--accent);color:var(--on-accent);font-size:.8125rem;font-weight:var(--w-bold);line-height:1.2;padding:6px 10px;border-radius:6px;white-space:nowrap}
.mark.up span{top:auto;bottom:calc(100% + 6px)}
.mark.on{opacity:1;transform:none}

/* телефон */
.phone{position:relative;width:100%;aspect-ratio:720/1330;border-radius:38px;background:#0E1512;border:7px solid #232B28;box-shadow:var(--shadow);overflow:hidden;padding-top:26px}
.phone::before{content:"";position:absolute;top:8px;left:50%;width:30%;height:16px;transform:translateX(-50%);background:#000;border-radius:10px}
.phone img{width:100%}
.hero-phone{position:absolute;right:clamp(16px,4%,56px);bottom:0;width:clamp(150px,15vw,212px);z-index:2}

/* общее для секций */
section{position:relative}
.sec{padding:clamp(80px,11vw,152px) 0}
.sec-head{max-width:760px;margin-bottom:clamp(40px,5vw,72px)}
.sec-head h2,.h2{font-size:clamp(2rem,3.8vw,3.375rem);line-height:1.05;letter-spacing:-.03em}
.sec-head p{margin-top:var(--s4);font-size:1.125rem;color:var(--text-2)}
.cap{margin-top:var(--s3);font-size:.875rem;color:var(--text-3)}

/* сравнение */
.compare{position:relative}
.cmp-row{position:relative;display:grid;grid-template-columns:minmax(0,4fr) minmax(0,4fr) minmax(0,5fr);gap:var(--s6);padding:var(--s5) 0;align-items:baseline}
/* линии таблицы прорисовываются слева направо, как разметка */
.compare::before,.cmp-row::after{content:"";position:absolute;left:0;right:0;height:1px;background:var(--line);transform-origin:0 50%;transition:transform 1000ms var(--ease-out) var(--d,0ms)}
.compare::before{top:0}
.cmp-row::after{bottom:0}
html.js .compare:not(.in)::before,html.js .compare:not(.in) .cmp-row::after{transform:scaleX(0)}
.cmp-old .t{background:linear-gradient(var(--text-3),var(--text-3)) no-repeat 0 60%/100% 1px}
html.js .cmp-old .t{background-size:0 1px;transition:background-size 700ms var(--ease-in-out) calc(var(--d,0ms) + 300ms)}
html.js .compare.in .cmp-old .t{background-size:100% 1px}
.ck{width:18px;height:18px;margin-right:8px;vertical-align:-3px;fill:none;stroke:var(--accent);stroke-width:2.6;stroke-linecap:round;stroke-linejoin:round}
html.js .compare .ck path{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset 500ms var(--ease-out) calc(var(--d,0ms) + 800ms)}
html.js .compare.in .ck path{stroke-dashoffset:0}
.cmp-row.head{padding:var(--s3) 0;font-size:.875rem;color:var(--text-3)}
.cmp-row.head span:last-child{color:var(--accent)}
.cmp-q{font-size:clamp(1.375rem,2.2vw,1.875rem);font-weight:var(--w-bold);letter-spacing:-.02em;line-height:1.15}
.cmp-old{color:var(--text-3)}
.cmp-new{color:var(--text)}
.cmp-row .lbl{display:none}

/* день клуба */
.day-grid{display:grid;grid-template-columns:260px minmax(0,1fr);gap:clamp(40px,6vw,96px)}
.clock{position:sticky;top:calc(var(--nav-h) + 40px);align-self:start}
.digits{display:flex;font-size:5rem;font-weight:var(--w-bold);letter-spacing:-.04em;line-height:1;height:1em;overflow:hidden}
.slot{display:block;height:1em;overflow:hidden;width:.62em;text-align:center}
.slot.colon{width:.3em}
.reel{display:flex;flex-direction:column;transition:transform 640ms var(--ease-out)}
.reel span{height:1em;line-height:1}
.clock-now{margin-top:var(--s3);color:var(--text-2);min-height:3.3em;font-size:1rem}
.clock-list{list-style:none;margin:var(--s6) 0 0;padding:0;border-left:1px solid var(--line)}
.clock-list a{display:flex;gap:var(--s3);padding:7px 0 7px var(--s4);text-decoration:none;color:var(--text-3);font-size:.9375rem;line-height:1.35;position:relative;transition:color 200ms ease}
.clock-list a::before{content:"";position:absolute;left:-1px;top:6px;bottom:6px;width:2px;background:var(--accent);transform:scaleY(0);transition:transform 260ms var(--ease-out)}
.clock-list a.on{color:var(--text)}
.clock-list a.on::before{transform:none}
.clock-list time{color:inherit;min-width:3.2em}
.steps{display:flex;flex-direction:column;gap:clamp(96px,12vw,160px)}
.step-time{display:block;font-size:.9375rem;font-weight:var(--w-bold);color:var(--accent);margin-bottom:var(--s3)}
.step h3{font-size:clamp(1.625rem,2.6vw,2.375rem);letter-spacing:-.025em;line-height:1.1}
.step p{margin-top:var(--s4);color:var(--text-2)}
.step figure{margin:var(--s6) 0 0}
.chips{display:flex;flex-wrap:wrap;gap:var(--s2);margin-top:var(--s5);padding:0;list-style:none}
.chips li{font-size:.875rem;line-height:1;padding:9px 12px;border-radius:999px;border:1px solid var(--line-2);color:var(--text-2)}
.duo{position:relative;padding-bottom:clamp(40px,6vw,80px)}
.duo .win:first-child{width:86%}
.duo .receipt{position:absolute;right:0;bottom:0;width:42%}
html:not(.js) .clock{display:none}
@media (min-width:861px){html.js .step-time,html.js .clock-now{display:none}}
html:not(.js) .day-grid{grid-template-columns:1fr}
/* экран шага раскрывается шторкой сверху вниз, чек кассы «печатается» следом */
html.js .step .win{clip-path:inset(0 0 100% 0 round var(--r));transform:translateY(32px);transition:clip-path 1000ms var(--ease-out),transform 1000ms var(--ease-out)}
html.js .step .win img{transform:scale(1.06);transform-origin:50% 0;transition:transform 1400ms var(--ease-out)}
html.js .step.seen .win{clip-path:inset(0 0 0 0 round var(--r));transform:none}
html.js .step.seen .win img{transform:none}
html.js .step .duo .receipt{transition-delay:500ms;transition-duration:900ms}
html.js .step .cap{opacity:0;transition:opacity 600ms ease 400ms}
html.js .step.seen .cap{opacity:1}
html.js .step .chips li{opacity:0;transform:translateY(10px);transition:opacity 400ms var(--ease-out),transform 500ms var(--ease-out);transition-delay:calc(var(--i) * 40ms)}
html.js .step.seen .chips li{opacity:1;transform:none}

/* клиенты: бенто */
.bento{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr) minmax(0,1fr);grid-template-areas:"client cards cards" "client wa call";gap:var(--s4)}
.cell{background:var(--surface);border:1px solid var(--line);border-radius:var(--r-lg);padding:clamp(24px,2.6vw,36px);display:flex;flex-direction:column;overflow:hidden}
.cell h3{font-size:1.375rem;letter-spacing:-.02em;line-height:1.2}
.cell p{margin-top:var(--s3);color:var(--text-2);font-size:1rem}
.c-client{grid-area:client}
.c-cards{grid-area:cards}
.c-wa{grid-area:wa}
.c-call{grid-area:call}
.cell .pic{margin-top:auto;padding-top:var(--s6)}
.c-client .pic{display:flex;justify-content:center}
.c-client .pic img{width:min(100%,270px);margin-bottom:calc(-1 * clamp(24px,2.6vw,36px))}
.c-cards .pic img{border-radius:var(--r);border:1px solid var(--line)}
.c-cards .txt{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1.4fr);gap:var(--s6);align-items:start}
.c-cards .txt p{margin-top:0}
.c-cards .pic img{transition:transform 600ms var(--ease-out)}
html.js .bento .cell{opacity:0;transform:translateY(36px);transition:opacity 700ms var(--ease-out) var(--d,0ms),transform 900ms var(--ease-out) var(--d,0ms),border-color 200ms ease}
html.js .bento.in .cell{opacity:1;transform:none}
@media (hover:hover) and (pointer:fine){
  .cell:hover{border-color:var(--line-2)}
  .c-cards:hover .pic img{transform:scale(1.015)}
}

/* приложение */
.app-grid{display:grid;grid-template-columns:minmax(0,6fr) minmax(0,6fr);gap:clamp(40px,6vw,96px);align-items:center}
.phones{display:flex;gap:clamp(16px,2vw,28px);justify-content:center;align-items:flex-start}
.phones .phone{width:min(46%,250px)}
.phones .phone:last-child{margin-top:64px}
.facts{margin-top:var(--s6);display:grid;gap:var(--s4)}
.fact{display:grid;grid-template-columns:28px 1fr;gap:var(--s3);color:var(--text-2)}
.fact svg{width:22px;height:22px;color:var(--accent);margin-top:3px}
html.js .fact path{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset 600ms var(--ease-out) calc(var(--d,0ms) + 150ms)}
html.js .fact span{opacity:0;transform:translateX(-8px);transition:opacity 500ms var(--ease-out) var(--d,0ms),transform 600ms var(--ease-out) var(--d,0ms)}
html.js .facts.in .fact path{stroke-dashoffset:0}
html.js .facts.in .fact span{opacity:1;transform:none}
.phones .phone{transform:translateY(var(--py,0px))}
.stores{display:flex;flex-wrap:wrap;gap:var(--s3);margin-top:var(--s6)}

/* модули */
.mods{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:clamp(32px,4vw,64px)}
.mod-group{position:relative;padding-top:var(--s5)}
.mod-group::before{content:"";position:absolute;top:0;left:0;right:0;height:1px;background:var(--line-2);transform-origin:0 50%;transition:transform 1000ms var(--ease-out) var(--d,0ms)}
.mod-group h3{font-size:.9375rem;font-weight:var(--w-medium);color:var(--accent);margin-bottom:var(--s5)}
.mod-group dl{margin:0;display:grid;gap:var(--s5)}
.mod-group dt{font-weight:var(--w-bold);font-size:1.0625rem;transition:color 150ms ease}
.mod-group dd{margin:2px 0 0;color:var(--text-2);font-size:.9375rem;line-height:1.55}
html.js .mods:not(.in) .mod-group::before{transform:scaleX(0)}
html.js .mod-group dl > div{opacity:0;transform:translateY(14px);transition:opacity 500ms var(--ease-out) var(--d,0ms),transform 700ms var(--ease-out) var(--d,0ms)}
html.js .mods.in .mod-group dl > div{opacity:1;transform:none}
@media (hover:hover) and (pointer:fine){.mod-group dl > div:hover dt{color:var(--accent)}}
.data-note{position:relative;margin-top:clamp(48px,6vw,80px);padding-top:var(--s5);display:flex;flex-wrap:wrap;gap:var(--s3) var(--s7);color:var(--text-2);font-size:.9375rem}
.data-note::before{content:"";position:absolute;top:0;left:0;right:0;height:1px;background:var(--line);transform-origin:0 50%;transition:transform 1200ms var(--ease-out)}
html.js .data-note:not(.in)::before{transform:scaleX(0)}
.data-note b{color:var(--text);font-weight:var(--w-bold)}

/* подключение */
.start{list-style:none;margin:0;padding:0;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:var(--s5);counter-reset:st}
.start li{position:relative;padding-top:var(--s7)}
.start li::before{counter-increment:st;content:counter(st);position:absolute;top:0;left:0;width:34px;height:34px;border-radius:50%;background:var(--surface-2);border:1px solid var(--line-2);display:grid;place-items:center;font-weight:var(--w-bold);font-size:.9375rem;color:var(--accent);z-index:1}
.start li::after{content:"";position:absolute;top:17px;left:34px;right:calc(var(--s5) * -1);height:1px;background:var(--line-2)}
.start li:last-child::after{display:none}
.start h3{font-size:1.25rem;letter-spacing:-.015em}
.start p{margin-top:var(--s2);color:var(--text-2);font-size:1rem}
/* мяч перелетает от шага к шагу, кружок загорается, когда мяч в него попал */
.start-wrap{position:relative}
.rally{display:none}
.start li::before{transition:background-color 300ms ease,border-color 300ms ease,color 300ms ease}
.start li.hit::before{background:var(--accent);border-color:var(--accent);color:var(--on-accent);animation:pop 420ms var(--ease-out)}
@keyframes pop{40%{transform:scale(1.18)}}
@media (min-width:1101px){
  html.js .rally{display:block;position:absolute;left:0;top:-72px;width:100%;height:110px;overflow:visible;pointer-events:none}
  html.js .start li::after{display:none}
}
.rally .trail{fill:none;stroke:var(--text-3);stroke-width:2;stroke-linecap:round;stroke-dasharray:0 9}
.rally .ball{fill:var(--text)}

/* вопросы */
.faq-grid{display:grid;grid-template-columns:minmax(0,4fr) minmax(0,7fr);gap:clamp(32px,5vw,80px)}
.faq details{border-bottom:1px solid var(--line)}
.faq details:first-child{border-top:1px solid var(--line)}
.faq summary{list-style:none;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:var(--s4);padding:var(--s5) 0;font-size:1.1875rem;font-weight:var(--w-bold);min-height:44px}
.faq summary::-webkit-details-marker{display:none}
.faq summary .pm{flex-shrink:0;width:28px;height:28px;border-radius:50%;border:1px solid var(--line-2);position:relative;transition:transform 220ms var(--ease-out)}
.faq summary .pm::before,.faq summary .pm::after{content:"";position:absolute;left:50%;top:50%;width:11px;height:1.5px;background:var(--text-2);transform:translate(-50%,-50%)}
.faq summary .pm::after{transform:translate(-50%,-50%) rotate(90deg)}
.faq details[open] summary .pm{transform:rotate(45deg)}
.faq details p{padding:0 0 var(--s5);color:var(--text-2)}
@supports selector(::details-content){
  .faq details::details-content{block-size:0;overflow:hidden;transition:block-size 320ms var(--ease-out),content-visibility 320ms allow-discrete}
  .faq details[open]::details-content{block-size:auto}
}

/* заявка */
.demo{padding:clamp(48px,6vw,96px) 0 clamp(64px,8vw,112px)}
.demo-grid{display:grid;grid-template-columns:minmax(0,6fr) minmax(0,5fr);gap:clamp(32px,5vw,80px);align-items:stretch;background:var(--accent);color:var(--on-accent);border-radius:var(--r-lg);padding:clamp(24px,5vw,72px)}
.demo-copy{display:flex;flex-direction:column}
.demo-grid .h2{font-size:clamp(2.25rem,4.4vw,3.75rem)}
.demo-copy > p{margin-top:var(--s5);font-size:1.125rem;color:rgba(4,20,12,.8)}
.alt-contact{margin-top:var(--s6);display:flex;flex-wrap:wrap;gap:var(--s3)}
.alt-contact:empty{display:none}
.demo-grid .btn-ghost{color:var(--on-accent);border-color:rgba(4,20,12,.4)}
@media (hover:hover) and (pointer:fine){.demo-grid .btn-ghost:hover{background:rgba(4,20,12,.08);border-color:var(--on-accent)}}
/* корт сверху: разметка прорисовывается, мяч летит в зону подачи и отскакивает */
.court{display:block;width:100%;max-width:560px;margin-top:auto;padding-top:clamp(32px,4vw,56px);overflow:visible}
.court .ln{fill:none;stroke:rgba(4,20,12,.4);stroke-width:1.5;stroke-linecap:round}
.court .net{stroke:rgba(4,20,12,.6);stroke-width:2.2}
.court .post{fill:rgba(4,20,12,.6)}
.court .trail{fill:none;stroke:rgba(4,20,12,.55);stroke-width:1.8;stroke-linecap:round;stroke-dasharray:0 6}
.court .ball{fill:#F4FBF6}
.court .ring{fill:none;stroke:#F4FBF6;stroke-width:2;opacity:0}
html.js .court .ln{stroke-dasharray:1;stroke-dashoffset:1;transition:stroke-dashoffset 1200ms var(--ease-in-out) var(--d,0ms)}
html.js .court.in .ln{stroke-dashoffset:0}
html.js .court .post{opacity:0;transition:opacity 400ms ease 900ms}
html.js .court.in .post{opacity:1}
.form{align-self:center;color:var(--text);background:var(--surface);border:1px solid var(--line);border-radius:var(--r-lg);padding:clamp(24px,3vw,40px)}
.field{margin-bottom:var(--s5)}
.field label{display:block;font-size:.9375rem;font-weight:var(--w-medium);margin-bottom:var(--s2)}
.field input{width:100%;height:52px;padding:0 16px;border-radius:var(--r-sm);border:1px solid var(--line-2);background:var(--bg);color:var(--text);transition:border-color 150ms ease}
.field input::placeholder{color:var(--text-3)}
.field input:focus{outline:none;border-color:var(--accent)}
.field .err{display:none;margin-top:6px;font-size:.875rem;color:#F08A7E}
.field.bad input{border-color:#F08A7E}
.field.bad .err{display:block}
.trap{position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden}
.form .btn{width:100%}
.form-note{margin-top:var(--s3);font-size:.875rem;color:var(--text-3);text-align:center}
.form-ok{display:none;text-align:center;padding:var(--s6) 0}
.form-ok h3{font-size:1.5rem}
.form-ok p{margin:var(--s3) auto 0;color:var(--text-2)}
.form.sent form{display:none}
.form.sent .form-ok{display:block}

/* подвал */
.foot{border-top:1px solid var(--line);padding:var(--s7) 0 calc(var(--s7) + env(safe-area-inset-bottom,0px));color:var(--text-3);font-size:.875rem}
.foot .wrap{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:var(--s5)}
.foot img{height:26px;width:auto}
.foot nav{display:flex;flex-wrap:wrap;gap:var(--s5)}
.foot a{text-decoration:none;color:var(--text-2);padding:10px 0}

/* нижняя кнопка на телефоне */
.cta-bar{display:none}

@media (max-width:1100px){
  .hero{min-height:auto}
  .hero-phone{width:clamp(120px,20vw,180px)}
  .bento{grid-template-columns:1fr 1fr;grid-template-areas:"cards cards" "client wa" "client call"}
  .app-grid{grid-template-columns:1fr}
  .phones{order:2}
  .start{grid-template-columns:1fr 1fr;row-gap:var(--s7)}
  .start li:nth-child(2)::after{display:none}
  .mods{grid-template-columns:1fr 1fr}
}
@media (max-width:860px){
  .nav-links{display:none}
  .nav .btn{margin-left:auto}
  .cmp-row{grid-template-columns:1fr;gap:var(--s2)}
  .cmp-row.head{display:none}
  .cmp-row .lbl{display:inline;color:var(--text-3)}
  .cmp-new .lbl{color:var(--accent)}
  .cmp-q{margin-bottom:var(--s2)}
  .day-grid{grid-template-columns:1fr;gap:0}
  .clock{position:sticky;top:var(--nav-h);z-index:5;margin:0 calc(var(--gutter) * -1) var(--s7);padding:10px var(--gutter);background:rgba(12,17,15,.96);border-bottom:1px solid var(--line);display:flex;align-items:center;gap:var(--s4)}
  .digits{font-size:1.75rem;letter-spacing:-.02em}
  .clock-now{margin:0;min-height:0;font-size:.9375rem;line-height:1.3}
  .clock-list{display:none}
  .demo-grid,.faq-grid{grid-template-columns:1fr}
  .c-cards .txt{grid-template-columns:1fr;gap:0}
  .c-cards .txt p{margin-top:var(--s3)}
  .duo .win:first-child{width:100%}
  .duo .receipt{position:relative;width:70%;margin:-48px 0 0 auto}
  .duo{padding-bottom:0}
  .cta-bar{display:block;position:fixed;inset:auto 0 0;z-index:40;padding:12px 16px calc(12px + env(safe-area-inset-bottom,0px));background:rgba(12,17,15,.96);border-top:1px solid var(--line);transform:translateY(110%);transition:transform 320ms var(--ease-drawer)}
  .cta-bar.show{transform:none}
  .cta-bar .btn{width:100%}
}
@media (max-width:640px){
  .nav .btn{padding:0 16px}
  .nav-logo img{height:26px}
  .hero{padding-top:calc(var(--nav-h) + 28px)}
  .hero-cta .btn{flex:1 1 auto}
  .hero-visual{padding:0}
  .hero-phone{display:none}
  .demo-grid{border-radius:var(--r)}
  .mark span{font-size:.75rem;padding:5px 8px}
  .bento{grid-template-columns:1fr;grid-template-areas:"cards" "client" "wa" "call"}
  .start,.mods{grid-template-columns:1fr}
  .start li::after{display:none}
  .phones .phone:last-child{margin-top:40px}
  .phone{border-radius:28px;border-width:5px;padding-top:20px}
  .phone::before{top:6px;height:12px}
  .foot .wrap{flex-direction:column;align-items:flex-start}
}
@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  .btn:active{transform:none}
  .reel{transition:none}
  .mark{transition:opacity 200ms ease;transform:none}
  html.js .hero h1 .wi,html.js .hero-sub,html.js .hero-cta,html.js .hero-visual,html.js .hero-phone{animation:none}
  html.js .split .wi,html.js .step .win,html.js .step .win img,html.js .bento .cell,html.js .fact span,html.js .mod-group dl > div,html.js .step .chips li{transform:none;transition:opacity 300ms ease}
  html.js .step .win{clip-path:none;opacity:0}
  html.js .step.seen .win{opacity:1}
  .start li.hit::before{animation:none}
}
</style>
</head>
<body>
<a class="skip" href="#main">К содержанию</a>

<header class="nav" id="nav">
  <div class="wrap">
    <a class="nav-logo" href="#top" aria-label="Padel KZ"><img src="img/logo-white.svg" alt="Padel KZ" width="112" height="30"></a>
    <nav class="nav-links" aria-label="Разделы">
      <a href="#day">Как работает</a>
      <a href="#clients">Клиенты</a>
      <a href="#app">Приложение</a>
      <a href="#start">Подключение</a>
    </nav>
    <a class="btn btn-primary btn-sm" href="#demo">Записаться на демо</a>
  </div>
</header>

<main id="main">
<section class="hero" id="top">
  <div class="wrap">
    <div class="hero-copy">
      <h1><span class="wm"><span class="wi" style="--i:0">CRM</span></span> <span class="wm"><span class="wi" style="--i:1">для</span></span> <span class="wm nw"><span class="wi" style="--i:2">падел-клуба</span></span></h1>
      <p class="hero-sub">Сетка кортов, касса с Kaspi, тренеры, абонементы и турниры. Бронь из приложения Padel KZ сразу попадает в сетку.</p>
      <div class="hero-cta">
        <a class="btn btn-primary" href="#demo">Записаться на демо <svg class="arr" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        <a class="btn btn-ghost" href="#day">Что внутри</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="win">
        <div class="win-bar"><b>Расписание кортов — Padel Club</b><span>демо-клуб</span></div>
        <div class="win-pic" id="heroPic">
          <img src="img/schedule.webp" width="2000" height="979" alt="Сетка кортов в CRM: шесть кортов по часам, брони с именем клиента, суммой и способом оплаты" fetchpriority="high">
          <div class="mark" style="left:21.4%;top:0.7%;width:15.1%;height:8.6%"><span>Kaspi, тренер +15 000 ₸</span></div>
          <div class="mark" style="left:37.2%;top:20.8%;width:15%;height:6.6%"><span>Оплачено по счёту Kaspi</span></div>
          <div class="mark up" style="left:52.9%;top:60.8%;width:15.1%;height:6.6%"><span>Не оплачено</span></div>
          <div class="mark" style="left:21.4%;top:28.9%;width:15.1%;height:14.7%"><span>Два часа, терминал</span></div>
          <div class="mark up" style="left:5.6%;top:84.5%;width:15%;height:6.6%"><span>Свободно, вечерняя цена</span></div>
        </div>
      </div>
      <div class="phone hero-phone" aria-hidden="true"><img src="img/app_slots.webp" width="720" height="1216" alt=""></div>
    </div>
  </div>
</section>

<section class="sec" id="problem">
  <div class="wrap">
    <div class="sec-head">
      <h2>Одна бронь, четыре вопроса</h2>
      <p>Когда клуб ведут в WhatsApp, Excel и тетради, ответы на них лежат в разных местах. В CRM они в одной записи.</p>
    </div>
    <div class="compare" role="table" aria-label="Как отвечают на вопросы без системы и в CRM">
      <div class="cmp-row head" role="row"><span role="columnheader">Вопрос</span><span role="columnheader">Без системы</span><span role="columnheader">В Padel KZ</span></div>
      <div class="cmp-row" role="row">
        <div class="cmp-q" role="cell">Кто записался?</div>
        <div class="cmp-old" role="cell"><span class="lbl">Без системы: </span><span class="t">ищут в чате и переносят в таблицу</span></div>
        <div class="cmp-new" role="cell"><svg class="ck" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span class="lbl">В Padel KZ: </span>имя и телефон стоят в ячейке корта, история визитов в карточке клиента</div>
      </div>
      <div class="cmp-row" role="row">
        <div class="cmp-q" role="cell">Корт свободен?</div>
        <div class="cmp-old" role="cell"><span class="lbl">Без системы: </span><span class="t">звонят администратору и ждут, пока он проверит</span></div>
        <div class="cmp-new" role="cell"><svg class="ck" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span class="lbl">В Padel KZ: </span>сетка по кортам и часам, бронь из приложения появляется в ней сама</div>
      </div>
      <div class="cmp-row" role="row">
        <div class="cmp-q" role="cell">Клиент заплатил?</div>
        <div class="cmp-old" role="cell"><span class="lbl">Без системы: </span><span class="t">вечером сверяют переводы Kaspi с тетрадью</span></div>
        <div class="cmp-new" role="cell"><svg class="ck" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span class="lbl">В Padel KZ: </span>способ и статус оплаты видны на брони, касса сводит смену</div>
      </div>
      <div class="cmp-row" role="row">
        <div class="cmp-q" role="cell">Тренеру начислили?</div>
        <div class="cmp-old" role="cell"><span class="lbl">Без системы: </span><span class="t">считают в конце месяца по памяти</span></div>
        <div class="cmp-new" role="cell"><svg class="ck" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span class="lbl">В Padel KZ: </span>доля тренера записана в брони и в журнале занятий</div>
      </div>
    </div>
  </div>
</section>

<section class="sec" id="day">
  <div class="wrap">
    <div class="sec-head">
      <h2>Один день клуба в CRM</h2>
      <p>С открытия смены до отчёта владельцу. Все экраны ниже из рабочей CRM, клуб и клиенты в них демонстрационные.</p>
    </div>
    <div class="day-grid">
      <aside class="clock" aria-hidden="true">
        <div class="digits" id="digits">08:00</div>
        <div class="clock-now" id="clockNow">Смена открывается по чек-листу</div>
        <ol class="clock-list" id="clockList"></ol>
      </aside>
      <div class="steps">
        <article class="step" id="t08" data-time="08:00">
          <time class="step-time">08:00</time>
          <h3>Смена открывается по чек-листу</h3>
          <p>Менеджер отмечает пункты, которые задал владелец: свет, сетки, касса. Пока всё не отмечено, смена не откроется. Замечания и любые изменения броней, групп и турниров попадают в журнал с именем сотрудника.</p>
          <figure>
            <div class="win"><div class="win-bar"><b>Журнал действий</b><span>демо-клуб</span></div>
              <div class="win-pic"><img src="img/log.webp" width="1600" height="901" loading="lazy" decoding="async" alt="Журнал действий клуба: время, тип действия, объект, описание и автор каждого изменения"></div></div>
            <figcaption class="cap">Кто, что и когда изменил. Фильтр по броням, клиентам, турнирам и сотрудникам.</figcaption>
          </figure>
        </article>

        <article class="step" id="t10" data-time="10:00">
          <time class="step-time">10:00</time>
          <h3>Бронь занимает один экран</h3>
          <p>Администратор нажимает свободный слот и заполняет окно: длительность, цена и скидка, тренер, аренда ракеток. Здесь же можно поставить мягкую бронь, группу, индивидуальное занятие или турнир.</p>
          <ul class="chips" aria-label="Способы оплаты">
            <li>Наличные</li><li>Карта</li><li>Kaspi</li><li>Счёт Kaspi</li><li>Терминал</li><li>Ссылка картой</li><li>Клубная карта</li><li>Сертификат</li><li>Депозит</li><li>Кешбэк</li><li>Через приложение</li>
          </ul>
          <figure>
            <div class="win"><div class="win-bar"><b>Бронирование · Корт 2, 11:00</b><span>демо-клуб</span></div>
              <div class="win-pic"><img src="img/booking.webp" width="1600" height="1047" loading="lazy" decoding="async" alt="Окно брони: длительность, цена корта и скидка, тренер, инвентарь, тип брони и способ оплаты"></div></div>
          </figure>
        </article>

        <article class="step" id="t13" data-time="13:00">
          <time class="step-time">13:00</time>
          <h3>Деньги проходят через кассу</h3>
          <p>Терминал Kaspi на стойке получает сумму прямо из CRM, клиенту можно отправить ссылку на оплату картой. Чек уходит в WhatsApp, возврат оформляется из той же строки оплаты.</p>
          <figure class="duo">
            <div class="win"><div class="win-bar"><b>Касса</b><span>демо-клуб</span></div>
              <div class="win-pic"><img src="img/kassa.webp" width="1600" height="1190" loading="lazy" decoding="async" alt="Касса клуба: терминал Kaspi на связи, оплаты за день со способом, статусом, чеком и возвратом"></div></div>
            <div class="win receipt"><div class="win-pic"><img src="img/receipt.webp" width="760" height="708" loading="lazy" decoding="async" alt="Чек оплаты с терминала Kaspi на 200 000 ₸ за клубную карту"></div></div>
          </figure>
        </article>

        <article class="step" id="t17" data-time="17:00">
          <time class="step-time">17:00</time>
          <h3>Группы и абонементы считаются сами</h3>
          <p>У каждого участника видно, сколько занятий осталось в пакете и до какого числа он действует. Кнопка «Провести» списывает занятие, повторно списать его нельзя. Начисление тренеру пересчитывается по условиям группы.</p>
          <figure>
            <div class="win"><div class="win-bar"><b>Абонемент 8 занятий</b><span>демо-клуб</span></div>
              <div class="win-pic"><img src="img/group.webp" width="1400" height="1178" loading="lazy" decoding="async" alt="Группа по абонементу: проведено и впереди, участники с остатком пакета и оплатой, предстоящие занятия"></div></div>
          </figure>
        </article>

        <article class="step" id="t19" data-time="19:00">
          <time class="step-time">19:00</time>
          <h3>Вечерний турнир с живой таблицей</h3>
          <p>Американо, мексикано, лесенка, флекс, группы с сеткой плей-офф. Организатор вводит счёт, таблица пересчитывается, игроки видят свой корт и раунд в приложении. После турнира у них меняется рейтинг.</p>
          <figure>
            <div class="win"><div class="win-bar"><b>Американо выходного дня</b><span>демо-клуб</span></div>
              <div class="win-pic"><img src="img/tour.webp" width="1600" height="897" loading="lazy" decoding="async" alt="Турнир американо в CRM: дата, уровень, 12 участников и таблица с победами, поражениями и очками"></div></div>
          </figure>
        </article>

        <article class="step" id="t23" data-time="23:00">
          <time class="step-time">23:00</time>
          <h3>Смена закрывается отчётом</h3>
          <p>При закрытии менеджер видит кассу за день с итогами по способам оплаты, отчёт смены выгружается в PDF и Excel. Владелец смотрит выручку, брони, загрузку кортов и средний чек за любой период.</p>
          <figure>
            <div class="win"><div class="win-bar"><b>Отчёты клуба</b><span>демо-данные</span></div>
              <div class="win-pic"><img src="img/reports.webp" width="1600" height="893" loading="lazy" decoding="async" alt="Отчёты клуба: выручка, брони, загруженность, средний чек и график выручки по дням"></div></div>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="sec" id="clients">
  <div class="wrap">
    <div class="sec-head">
      <h2>Каждый клиент с историей визитов и оплат</h2>
      <p>Клубные карты, сертификаты и депозит привязаны к человеку, поэтому администратор видит остаток раньше, чем клиент о нём спросит.</p>
    </div>
    <div class="bento">
      <div class="cell c-cards">
        <div class="txt">
          <h3>Клубные карты</h3>
          <p>Пакеты часов или посещений с ценой и сроком. У каждой выданной карты виден остаток, а когда часов мало, рядом стоит пометка.</p>
        </div>
        <div class="pic"><img src="img/cards.webp" width="1600" height="671" loading="lazy" decoding="async" alt="Клубные карты: типы карт с ценой и выданные карты с остатком часов"></div>
      </div>
      <div class="cell c-client">
        <h3>Карточка клиента</h3>
        <p>Брони, группы, карты, сертификаты и депозит в одном месте. Базу можно загрузить из Excel, повторы находит раздел «Дубликаты».</p>
        <div class="pic"><img src="img/client.webp" width="514" height="1080" loading="lazy" decoding="async" alt="Карточка клиента: телефон, сертификаты, депозит и клубные карты"></div>
      </div>
      <div class="cell c-wa">
        <h3>WhatsApp клуба внутри CRM</h3>
        <p>Переписка открывается из карточки клиента. Отдельный экран показывает, кто ждёт ответа дольше заданного времени, а разбор переписки за день подсказывает, где клиент ушёл без брони.</p>
      </div>
      <div class="cell c-call">
        <h3>Списки для обзвона</h3>
        <p>Новички за выбранный период и те, кто не приходил от 14 до 20 дней или дольше трёх недель. Администратор открывает список и звонит, пока клиент не ушёл в другой клуб.</p>
      </div>
    </div>
  </div>
</section>

<section class="sec" id="app">
  <div class="wrap app-grid">
    <div class="phones" aria-hidden="true">
      <div class="phone"><img src="img/app_home.webp" width="720" height="1216" loading="lazy" decoding="async" alt=""></div>
      <div class="phone"><img src="img/app_slots.webp" width="720" height="1216" loading="lazy" decoding="async" alt=""></div>
    </div>
    <div>
      <h2 class="h2">Игроки бронируют сами</h2>
      <p style="margin-top:var(--s5);font-size:1.125rem;color:var(--text-2)">Приложение Padel KZ для iPhone и Android. Игрок выбирает клуб, корт и час, видит цену до брони и платит онлайн. Там же турниры по уровню, рейтинг, клубные карты и сертификаты.</p>
      <div class="facts">
        <div class="fact"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span>Бронь из приложения сразу стоит в сетке кортов у администратора.</span></div>
        <div class="fact"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span>Запись на турнир проверяет уровень игрока, при полном составе он встаёт в лист ожидания.</span></div>
        <div class="fact"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5" pathLength="1"/></svg><span>Рейтинг пересчитывается после каждого турнира, у игрока есть повод вернуться.</span></div>
      </div>
      <div class="stores">
        <a class="btn btn-ghost btn-sm" href="https://apps.apple.com/app/padel-kz/id6759392401" target="_blank" rel="noopener">App Store <svg class="arr" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
        <a class="btn btn-ghost btn-sm" href="https://play.google.com/store/apps/details?id=com.padelkz.app" target="_blank" rel="noopener">Google Play <svg class="arr" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
      </div>
    </div>
  </div>
</section>

<section class="sec" id="modules">
  <div class="wrap">
    <div class="sec-head">
      <h2>Что ещё есть в CRM</h2>
      <p>Разделы в том порядке, в каком они стоят в меню администратора.</p>
    </div>
    <div class="mods">
      <div class="mod-group">
        <h3>Работа клуба</h3>
        <dl>
          <div><dt>Корты</dt><dd>Сетка по кортам или по дням, цена зависит от часа.</dd></div>
          <div><dt>Тренеры</dt><dd>Рабочие часы по дням, выходные и разовые исключения, ставки.</dd></div>
          <div><dt>Группы</dt><dd>Состав, абонементы, остаток занятий у каждого участника.</dd></div>
          <div><dt>Журнал занятий</dt><dd>Посещаемость, списания с пакета, пробные и заморозки.</dd></div>
          <div><dt>Отчёты</dt><dd>Выручка, загрузка по часам, отмены, сверка кортов с организаторами турниров.</dd></div>
        </dl>
      </div>
      <div class="mod-group">
        <h3>Клиенты и турниры</h3>
        <dl>
          <div><dt>Клиенты и WhatsApp</dt><dd>База с историей визитов и переписка клуба в одном окне.</dd></div>
          <div><dt>Клубные карты и сертификаты</dt><dd>Продажа, остаток, списание при брони.</dd></div>
          <div><dt>Инвентарь</dt><dd>Аренда ракеток, продажа воды и мячей прямо в брони.</dd></div>
          <div><dt>Турниры клуба</dt><dd>Свои турниры и чужие организаторы на ваших кортах.</dd></div>
          <div><dt>Лиги</dt><dd>Этапы с общим зачётом для постоянных игроков.</dd></div>
        </dl>
      </div>
      <div class="mod-group">
        <h3>Управление</h3>
        <dl>
          <div><dt>Касса</dt><dd>Терминал Kaspi, оплаты и возвраты, выгрузка в Excel и PDF.</dd></div>
          <div><dt>Пользователи</dt><dd>Доступы владельца, администраторов и менеджеров.</dd></div>
          <div><dt>Чек-листы и смены</dt><dd>Что проверить при открытии и закрытии, кто сколько отработал.</dd></div>
          <div><dt>Журнал</dt><dd>Каждое действие в клубе с автором и временем.</dd></div>
          <div><dt>Помощь</dt><dd>Видеоинструкции по разделам CRM для новых сотрудников.</dd></div>
        </dl>
      </div>
    </div>
    <div class="data-note">
      <span><b>Выгрузка</b> отчётов в Excel и PDF</span>
      <span><b>API</b> для ваших систем учёта</span>
      <span><b>Резервные копии</b> на сервере в Казахстане</span>
    </div>
  </div>
</section>

<section class="sec" id="start">
  <div class="wrap">
    <div class="sec-head">
      <h2>Как подключить клуб</h2>
    </div>
    <div class="start-wrap">
    <svg class="rally" id="rally" aria-hidden="true">
      <defs><mask id="rallyMask" maskUnits="userSpaceOnUse"><path id="rallyDraw" fill="none" stroke="#fff" stroke-width="8" pathLength="1" stroke-dasharray="1" stroke-dashoffset="1"/></mask></defs>
      <path class="trail" id="rallyPath" mask="url(#rallyMask)"/>
      <circle class="ball" id="rallyBall" r="6" cx="-20" cy="-20"/>
    </svg>
    <ol class="start" id="startList">
      <li><h3>Демо</h3><p>Показываем CRM на созвоне и разбираем, как устроена работа вашего клуба.</p></li>
      <li><h3>Настройка</h3><p>Заводим корты, часы работы, цены по времени, тренеров и группы.</p></li>
      <li><h3>Оплата</h3><p>Подключаем терминал Kaspi на стойке и оплату картой по ссылке.</p></li>
      <li><h3>Команда</h3><p>Выдаём доступы сотрудникам. Видеоинструкции лежат в CRM, в разделе «Помощь».</p></li>
    </ol>
    </div>
  </div>
</section>

<section class="sec" id="faq" style="padding-top:0">
  <div class="wrap faq-grid">
    <h2 class="h2">Частые вопросы</h2>
    <div class="faq">
      <details>
        <summary>Игрокам обязательно ставить приложение?<span class="pm" aria-hidden="true"></span></summary>
        <p>Нет. Администратор создаёт бронь по имени и телефону. Игроки с приложением бронируют корты и записываются на турниры сами.</p>
      </details>
      <details>
        <summary>Какие оплаты принимает касса?<span class="pm" aria-hidden="true"></span></summary>
        <p>Наличные, карта, Kaspi (терминал, QR и счёт), ссылка на оплату картой, клубные карты, сертификаты, депозит и кешбэк. Способ оплаты виден на каждой брони.</p>
      </details>
      <details>
        <summary>Можно перенести нашу базу клиентов?<span class="pm" aria-hidden="true"></span></summary>
        <p>Да, клиентов можно загрузить из Excel. Повторяющиеся записи помогает найти раздел «Дубликаты».</p>
      </details>
      <details>
        <summary>Где хранятся данные клуба?<span class="pm" aria-hidden="true"></span></summary>
        <p>Резервные копии делаются на сервер в Казахстане. Отчёты выгружаются в Excel и PDF, для своих систем есть API.</p>
      </details>
    </div>
  </div>
</section>

<section class="demo" id="demo">
  <div class="wrap">
  <div class="demo-grid">
    <div class="demo-copy">
      <h2 class="h2">Покажем CRM на примере вашего клуба</h2>
      <p>Оставьте контакты: напишем в WhatsApp и договоримся о времени демо.</p>
      <div class="alt-contact" id="altContact"></div>
      <svg class="court" id="court" viewBox="-8 -16 416 232" aria-hidden="true">
        <defs><mask id="courtMask" maskUnits="userSpaceOnUse" x="-8" y="-16" width="416" height="232"><path id="courtDraw" d="M44 152 Q172 -60 300 58 Q338 14 380 30" fill="none" stroke="#fff" stroke-width="10" pathLength="1" stroke-dasharray="1" stroke-dashoffset="1"/></mask></defs>
        <path class="ln" d="M0 0H400V200H0Z" pathLength="1"/>
        <path class="ln" d="M61 0V200" pathLength="1" style="--d:200ms"/>
        <path class="ln" d="M339 0V200" pathLength="1" style="--d:200ms"/>
        <path class="ln" d="M61 100H339" pathLength="1" style="--d:400ms"/>
        <path class="ln net" d="M200 -10V210" pathLength="1" style="--d:300ms"/>
        <circle class="post" cx="200" cy="-10" r="3.5"/><circle class="post" cx="200" cy="210" r="3.5"/>
        <path class="trail" id="courtTrail" d="M44 152 Q172 -60 300 58 Q338 14 380 30" mask="url(#courtMask)"/>
        <circle class="ring" id="courtRing" cx="300" cy="58" r="4"/>
        <circle class="ball" id="courtBall" cx="44" cy="152" r="6" style="opacity:0"/>
      </svg>
    </div>
    <div class="form" id="formBox">
      <form id="leadForm" novalidate>
        <div class="field">
          <label for="f-name">Как к вам обращаться</label>
          <input id="f-name" name="name" type="text" autocomplete="name" placeholder="Имя" required>
          <div class="err">Напишите имя</div>
        </div>
        <div class="field">
          <label for="f-club">Клуб и город</label>
          <input id="f-club" name="club" type="text" autocomplete="organization" placeholder="Padel Club, Алматы" required>
          <div class="err">Напишите название клуба и город</div>
        </div>
        <div class="field">
          <label for="f-phone">Телефон или WhatsApp</label>
          <input id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="+7 700 000 00 00" required>
          <div class="err">Проверьте номер: нужно 11 цифр</div>
        </div>
        <div class="trap" aria-hidden="true"><label for="f-site">Сайт</label><input id="f-site" name="site" type="text" tabindex="-1" autocomplete="off"></div>
        <button class="btn btn-primary" type="submit" id="sendBtn">Записаться на демо <svg class="arr" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></button>
        <p class="form-note" id="formNote">Откроется WhatsApp с готовым сообщением</p>
      </form>
      <div class="form-ok" role="status" aria-live="polite">
        <h3>Заявка у нас</h3>
        <p>Напишем вам в WhatsApp в рабочее время.</p>
      </div>
    </div>
  </div>
  </div>
</section>
</main>

<footer class="foot">
  <div class="wrap">
    <img src="img/logo-white.svg" alt="Padel KZ" width="97" height="26">
    <nav aria-label="Ссылки">
      <a href="https://apps.apple.com/app/padel-kz/id6759392401" target="_blank" rel="noopener">App Store</a>
      <a href="https://play.google.com/store/apps/details?id=com.padelkz.app" target="_blank" rel="noopener">Google Play</a>
      <a href="#demo">Демо CRM</a>
    </nav>
    <span>© 2026 Padel KZ</span>
  </div>
</footer>

<div class="cta-bar" id="ctaBar"><a class="btn btn-primary" href="#demo">Записаться на демо</a></div>

<script>
/* ===== Настройки: заполнить перед публикацией =====
   whatsapp — номер для заявок, только цифры, например "77001234567".
              Пусто: WhatsApp откроется с готовым текстом и выбором получателя.
   telegram — ник без @, например "padelkz". Пусто: кнопки Telegram не будет.
   endpoint — адрес, куда отправить заявку POST-запросом JSON {name, club, phone, page}.
              Если указан, заявка уходит туда, а WhatsApp не открывается. */
const CONFIG = @json($config);

const reduce = matchMedia("(prefers-reduced-motion: reduce)").matches;
const $$ = (s, root = document) => [...root.querySelectorAll(s)];
const stagger = (els, step, base = 0) => els.forEach((el, i) => el.style.setProperty("--d", base + i * step + "ms"));

/* заголовки: слова в маски, выезжают при появлении */
$$(".sec-head h2, .h2, .step h3").forEach(el => {
  const words = el.textContent.trim().split(" ");
  el.textContent = "";
  words.forEach((w, i) => {
    const m = document.createElement("span"), s = document.createElement("span");
    m.className = "wm"; s.className = "wi"; s.style.setProperty("--i", i); s.textContent = w;
    m.append(s); el.append(m, i < words.length - 1 ? " " : "");
  });
  el.classList.add("split", "rv");
});

/* задержки для каскадов */
stagger($$(".cmp-row:not(.head)"), 160, 100);
stagger($$(".bento .cell"), 90);
stagger($$(".fact"), 160);
$$(".mod-group").forEach((g, gi) => { g.style.setProperty("--d", gi * 140 + "ms"); stagger($$("dl > div", g), 70, gi * 140 + 250); });
$$(".chips").forEach(c => $$("li", c).forEach((li, i) => li.style.setProperty("--i", i)));
$$(".compare, .bento, .facts, .mods, .data-note, .court, .start-wrap").forEach(el => el.classList.add("rv"));

/* появление по скроллу: один наблюдатель на всё */
const rv = new IntersectionObserver(es => es.forEach(e => {
  if (!e.isIntersecting) return;
  e.target.classList.add("in"); rv.unobserve(e.target);
  e.target.dispatchEvent(new Event("reveal"));
}), { rootMargin: "0px 0px -12% 0px" });
$$(".rv").forEach(el => rv.observe(el));

/* окно в герое лежит с наклоном и выпрямляется при прокрутке; телефоны в «Приложении» расходятся */
(() => {
  if (reduce) return;
  const win = document.querySelector(".hero-visual .win"), phones = $$(".phones .phone");
  let ticking = false;
  const upd = () => {
    ticking = false;
    const max = innerWidth > 700 ? 14 : 0;
    const k = Math.min(1, scrollY / (innerHeight * .55));
    win.style.setProperty("--tilt", (max * (1 - k)).toFixed(2) + "deg");
    const r = phones[0].parentElement.getBoundingClientRect();
    if (r.bottom > 0 && r.top < innerHeight) {
      const p = (innerHeight - r.top) / (innerHeight + r.height) - .5;
      phones[0].style.setProperty("--py", (-p * 56).toFixed(1) + "px");
      phones[1].style.setProperty("--py", (p * 56).toFixed(1) + "px");
    }
  };
  addEventListener("scroll", () => { if (!ticking) { ticking = true; requestAnimationFrame(upd); } }, { passive: true });
  addEventListener("resize", upd); upd();
})();

/* полёт мяча по траектории: след прорисовывается за мячом */
const fly = ({ path, draw, ball, dur, onMove, lift = 0 }) => new Promise(done => {
  const L = path.getTotalLength(), ease = t => t < .5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
  let t0 = null;
  const frame = now => {
    if (t0 === null) t0 = now;
    const t = Math.min(1, (now - t0) / dur), s = ease(t) * L, p = path.getPointAtLength(s);
    ball.setAttribute("cx", p.x); ball.setAttribute("cy", p.y);
    ball.style.opacity = 1;
    if (lift) ball.setAttribute("r", (6 + lift * Math.sin(Math.PI * Math.min(1, s / (L * .78)))).toFixed(2));
    if (draw) draw.style.strokeDashoffset = 1 - ease(t);
    if (onMove) onMove(s / L);
    t < 1 ? requestAnimationFrame(frame) : done();
  };
  requestAnimationFrame(frame);
});

/* «Как подключить»: мяч перелетает с шага на шаг, кружки загораются по попаданию */
(() => {
  const wrap = document.querySelector(".start-wrap"), lis = $$("#startList li");
  const svg = document.getElementById("rally"), path = document.getElementById("rallyPath"), draw = document.getElementById("rallyDraw"), ball = document.getElementById("rallyBall");
  const build = () => {
    const wr = wrap.getBoundingClientRect();
    const pts = lis.map(li => [li.getBoundingClientRect().left - wr.left + 17, 89]);
    let d = `M${pts[0][0]} ${pts[0][1]}`;
    for (let i = 1; i < pts.length; i++) d += ` Q${(pts[i - 1][0] + pts[i][0]) / 2} ${pts[i][1] - 120} ${pts[i][0]} ${pts[i][1]}`;
    path.setAttribute("d", d); draw.setAttribute("d", d);
  };
  const hit = i => lis[i] && lis[i].classList.add("hit");
  wrap.addEventListener("reveal", () => {
    if (reduce || getComputedStyle(svg).display === "none") { lis.forEach((li, i) => setTimeout(() => hit(i), reduce ? 0 : 200 + i * 260)); return; }
    build(); hit(0);
    fly({ path, draw, ball, dur: 2200, onMove: f => hit(Math.floor(f * (lis.length - 1) + .02)) })
      .then(() => { lis.forEach((_, i) => hit(i)); ball.style.transition = "opacity 400ms ease"; ball.style.opacity = 0; });
  });
  addEventListener("resize", () => { if (lis[0].classList.contains("hit") && getComputedStyle(svg).display !== "none") { build(); draw.style.strokeDashoffset = 0; } });
})();

/* корт в заявке: мяч летит в зону подачи, отскакивает, на месте касания расходится круг */
(() => {
  const court = document.getElementById("court");
  const path = document.getElementById("courtTrail"), draw = document.getElementById("courtDraw"), ball = document.getElementById("courtBall"), ring = document.getElementById("courtRing");
  if (reduce) { draw.style.strokeDashoffset = 0; ball.setAttribute("cx", 300); ball.setAttribute("cy", 58); ball.style.opacity = 1; return; }
  let visible = false, busy = false, first = true;
  const splash = () => ring.animate([{ r: "4px", opacity: .9 }, { r: "22px", opacity: 0 }], { duration: 700, easing: "cubic-bezier(0.23,1,0.32,1)" });
  const rally = async () => {
    if (busy || !visible) return;
    busy = true;
    let landed = false;
    await fly({ path, draw: first ? draw : null, ball, dur: 1900, lift: 3, onMove: f => { if (!landed && f > .76) { landed = true; splash(); } } });
    first = false;
    const fade = ball.animate([{ opacity: 1 }, { opacity: 0 }], { duration: 350, fill: "forwards" });
    fade.finished.then(() => { ball.style.opacity = 0; fade.cancel(); });
    setTimeout(() => { busy = false; rally(); }, 2600);
  };
  new IntersectionObserver(([e]) => { visible = e.isIntersecting; if (visible) setTimeout(rally, first ? 900 : 0); }).observe(court);
})();

/* подсветка раздела в меню */
(() => {
  const links = $$(".nav-links a");
  const spy = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) links.forEach(a => a.classList.toggle("on", a.getAttribute("href") === "#" + e.target.id));
  }), { rootMargin: "-45% 0px -50% 0px" });
  $$("main > section[id]").forEach(s => spy.observe(s));
})();

/* шапка становится плотной после первого экрана */
const nav = document.getElementById("nav");
const onScroll = () => nav.classList.toggle("solid", scrollY > 24);
addEventListener("scroll", onScroll, { passive: true }); onScroll();

/* выноски на сетке кортов по очереди */
(() => {
  const marks = [...document.querySelectorAll("#heroPic .mark")];
  if (!marks.length) return;
  if (reduce) { marks[0].classList.add("on"); return; }
  let i = -1, timer;
  const next = () => { marks.forEach(m => m.classList.remove("on")); i = (i + 1) % marks.length; marks[i].classList.add("on"); };
  const start = () => { if (!timer) { next(); timer = setInterval(next, 2600); } };
  const stop = () => { clearInterval(timer); timer = null; };
  new IntersectionObserver(([e]) => e.isIntersecting ? start() : stop(), { threshold: .3 }).observe(document.getElementById("heroPic"));
})();

/* часы дня: цифры прокручиваются к времени текущего шага */
(() => {
  const box = document.getElementById("digits"), now = document.getElementById("clockNow"), list = document.getElementById("clockList");
  const steps = [...document.querySelectorAll(".step")];
  box.textContent = "";
  const reels = [...steps[0].dataset.time].map(ch => {
    const slot = document.createElement("span");
    if (ch === ":") { slot.className = "slot colon"; slot.textContent = ":"; box.append(slot); return null; }
    slot.className = "slot";
    const reel = document.createElement("span"); reel.className = "reel";
    for (let d = 0; d < 10; d++) { const s = document.createElement("span"); s.textContent = d; reel.append(s); }
    slot.append(reel); box.append(slot); return reel;
  });
  const links = steps.map(st => {
    const li = document.createElement("li"), a = document.createElement("a");
    a.href = "#" + st.id; a.innerHTML = `<time>${st.dataset.time}</time><span>${st.querySelector("h3").textContent}</span>`;
    li.append(a); list.append(li); return a;
  });
  const set = (k) => {
    const t = steps[k].dataset.time;
    [...t].forEach((ch, j) => { if (reels[j]) reels[j].style.transform = `translateY(${-ch}em)`; });
    now.textContent = steps[k].querySelector("h3").textContent;
    links.forEach((a, j) => a.classList.toggle("on", j === k));
  };
  set(0);
  const io = new IntersectionObserver(es => es.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.classList.add("seen");
    set(steps.indexOf(e.target));
  }), { rootMargin: "-45% 0px -45% 0px" });
  steps.forEach(s => io.observe(s));
  /* картинку шага показываем чуть раньше, чем меняется время */
  const show = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add("seen"); show.unobserve(e.target); } }), { rootMargin: "0px 0px -15% 0px" });
  steps.forEach(s => show.observe(s));
})();

/* нижняя кнопка на телефоне: после героя и пока не видна форма */
(() => {
  const bar = document.getElementById("ctaBar");
  let pastHero = false, formVisible = false;
  const upd = () => bar.classList.toggle("show", pastHero && !formVisible);
  new IntersectionObserver(([e]) => { pastHero = !e.isIntersecting; upd(); }).observe(document.querySelector(".hero-cta"));
  new IntersectionObserver(([e]) => { formVisible = e.isIntersecting; upd(); }).observe(document.getElementById("demo"));
})();

/* Telegram, если указан */
if (CONFIG.telegram) {
  const a = document.createElement("a");
  a.className = "btn btn-ghost"; a.href = "https://t.me/" + CONFIG.telegram; a.target = "_blank"; a.rel = "noopener";
  a.innerHTML = 'Написать в Telegram <svg class="arr" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg>';
  document.getElementById("altContact").append(a);
}
if (CONFIG.endpoint) document.getElementById("formNote").textContent = "Ответим в WhatsApp в рабочее время";

/* заявка */
(() => {
  const form = document.getElementById("leadForm"), box = document.getElementById("formBox"), btn = document.getElementById("sendBtn");
  const phone = form.phone;
  phone.addEventListener("input", () => {
    let d = phone.value.replace(/\D/g, "");
    if (d.startsWith("8")) d = "7" + d.slice(1);
    if (d && !d.startsWith("7")) d = "7" + d;
    d = d.slice(0, 11);
    const p = [d.slice(1, 4), d.slice(4, 7), d.slice(7, 9), d.slice(9, 11)].filter(Boolean);
    phone.value = d ? "+7 " + p.join(" ") : "";
  });
  const check = (input, ok) => { input.closest(".field").classList.toggle("bad", !ok); return ok; };
  form.querySelectorAll("input[required]").forEach(i => i.addEventListener("blur", () => { if (i.value) validate(i); }));
  const validate = (i) => i === phone ? check(i, i.value.replace(/\D/g, "").length === 11) : check(i, i.value.trim().length > 1);
  form.addEventListener("submit", async (ev) => {
    ev.preventDefault();
    if (form.site.value) return;
    const fields = [form.name, form.club, phone];
    const ok = fields.map(validate).every(Boolean);
    if (!ok) { fields.find(i => i.closest(".field").classList.contains("bad")).focus(); return; }
    if (btn.disabled) return;
    btn.disabled = true; setTimeout(() => btn.disabled = false, 3000);
    const data = { name: form.name.value.trim(), club: form.club.value.trim(), phone: phone.value, page: location.href };
    if (CONFIG.endpoint) {
      try {
        const r = await fetch(CONFIG.endpoint, { method: "POST", headers: { "Content-Type": "application/json" }, body: JSON.stringify(data) });
        if (!r.ok) throw new Error(r.status);
        box.classList.add("sent"); return;
      } catch (e) { /* не получилось — уходим в WhatsApp, чтобы заявка не потерялась */ }
    }
    const text = `Здравствуйте! Хочу посмотреть CRM Padel KZ.\nИмя: ${data.name}\nКлуб: ${data.club}\nТелефон: ${data.phone}`;
    window.open(`https://wa.me/${CONFIG.whatsapp}?text=${encodeURIComponent(text)}`, "_blank", "noopener");
  });
})();
</script>
</body>
</html>
