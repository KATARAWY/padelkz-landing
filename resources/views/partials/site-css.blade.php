@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(/fonts/onest-cyrillic-ext.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C8A,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(/fonts/onest-cyrillic.woff2) format("woff2");unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(/fonts/onest-latin-ext.woff2) format("woff2");unicode-range:U+0100-02BA,U+02BD-02C5,U+02C7-02CC,U+02CE-02D7,U+02DD-02FF,U+0304,U+0308,U+0329,U+1D00-1DBF,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C4,U+2113,U+2C60-2C7F,U+A720-A7FF}
@font-face{font-family:"Onest";font-style:normal;font-weight:100 900;font-display:swap;src:url(/fonts/onest-latin.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
:root{
  --bg:#0C110F; --surface:#141B18; --surface-2:#1A2320; --line:#25302B; --line-2:#33413A;
  --text:#EDF2EE; --text-2:#B0BDB6; --text-3:#85938C;
  --accent:#22C47A; --accent-hi:#38D38B; --on-accent:#04140C;
  --font:"Onest",system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;
  --w-regular:400; --w-medium:500; --w-bold:700;
  --s1:4px; --s2:8px; --s3:12px; --s4:16px; --s5:24px; --s6:32px; --s7:48px; --s8:64px; --s9:96px;
  --r-sm:8px; --r:14px; --r-lg:24px;
  --gutter:clamp(16px,4vw,40px); --wrap:1240px; --nav-h:68px; --read:44rem;
  --ease-out:cubic-bezier(0.23,1,0.32,1);
}
*,*::before,*::after{box-sizing:border-box}
html{-webkit-tap-highlight-color:transparent;-webkit-text-size-adjust:100%;caret-color:var(--accent);scrollbar-color:var(--line-2) var(--bg);scroll-behavior:smooth;scroll-padding-top:calc(var(--nav-h) + 24px)}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
body{margin:0;background:var(--bg);color:var(--text);font:var(--w-regular) 1.0625rem/1.65 var(--font);font-variant-numeric:tabular-nums;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;overflow-x:hidden}
::selection{background:var(--accent);color:var(--on-accent)}
:focus-visible{outline:2px solid var(--accent);outline-offset:3px;border-radius:4px}
a{color:inherit;text-underline-offset:.18em;text-decoration-thickness:from-font}
h1,h2,h3{margin:0;text-wrap:balance;font-weight:var(--w-bold)}
p{margin:0;text-wrap:pretty}
img{max-width:100%;height:auto;display:block}
.wrap{width:100%;max-width:calc(var(--wrap) + var(--gutter)*2);margin:0 auto;padding:0 var(--gutter)}
.skip{position:absolute;left:-9999px;top:8px;background:var(--accent);color:var(--on-accent);padding:8px 12px;border-radius:var(--r-sm);z-index:100}
.skip:focus{left:8px}

.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;min-height:52px;padding:0 26px;border-radius:999px;border:1px solid transparent;font-weight:var(--w-bold);font-size:1rem;line-height:1;white-space:nowrap;text-decoration:none;cursor:pointer;touch-action:manipulation;transition:transform 160ms var(--ease-out),background-color 150ms ease,border-color 150ms ease}
.btn:active{transform:scale(.97)}
.btn-primary{background:var(--accent);color:var(--on-accent)}
.btn-dark{background:var(--on-accent);color:var(--text)}
.btn-line{border-color:rgba(4,20,12,.35);color:var(--on-accent)}
.btn-sm{min-height:44px;padding:0 20px;font-size:.9375rem}

.nav{position:sticky;top:0;z-index:50;height:var(--nav-h);background:rgba(12,17,15,.94);border-bottom:1px solid var(--line)}
.nav .wrap{height:100%;display:flex;align-items:center;gap:var(--s6)}
.nav-logo{display:flex;align-items:center;height:44px;flex-shrink:0}
.nav-logo img{height:30px;width:auto}
.nav-links{display:flex;gap:var(--s5);margin-left:auto;font-size:.9375rem;color:var(--text-2)}
.nav-links a{position:relative;text-decoration:none;padding:10px 2px;transition:color 150ms ease}
.nav-links a::after{content:"";position:absolute;left:2px;right:2px;bottom:4px;height:2px;border-radius:2px;background:var(--accent);transform:scaleX(0);transition:transform 260ms var(--ease-out)}
.nav-links a.on{color:var(--text)}
.nav-links a.on::after{transform:none}
.nav .btn{margin-left:var(--s2)}

.foot{border-top:1px solid var(--line);padding:var(--s7) 0 calc(var(--s7) + env(safe-area-inset-bottom,0px));color:var(--text-3);font-size:.875rem}
.foot .wrap{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:var(--s5)}
.foot img{height:26px;width:auto}
.foot nav{display:flex;flex-wrap:wrap;gap:var(--s5)}
.foot a{text-decoration:none;color:var(--text-2);padding:10px 0}

/* список статей */
.blog-head{padding:var(--s9) 0 var(--s7)}
.blog-head h1{font-size:clamp(2.25rem,5vw,3.75rem);line-height:1.05;letter-spacing:-.03em;max-width:16ch}
.blog-head p{margin-top:var(--s4);color:var(--text-2);font-size:1.1875rem;max-width:46ch}
.posts{list-style:none;margin:0 0 var(--s9);padding:0;border-top:1px solid var(--line)}
.post{border-bottom:1px solid var(--line)}
.post a{display:grid;grid-template-columns:minmax(0,1fr) 300px;gap:var(--s7);align-items:center;padding:var(--s6) 0;text-decoration:none}
.post-meta{font-size:.875rem;color:var(--text-3)}
.post h2{margin-top:var(--s2);font-size:clamp(1.375rem,2.4vw,1.875rem);line-height:1.2;letter-spacing:-.015em;transition:color 150ms ease}
.post p{margin-top:var(--s3);color:var(--text-2);max-width:60ch}
.post-more{display:inline-block;margin-top:var(--s4);color:var(--accent);font-weight:var(--w-medium);font-size:.9375rem}
.post img{border-radius:var(--r);border:1px solid var(--line);aspect-ratio:16/10;object-fit:cover;object-position:left top;width:100%}

/* статья */
.crumbs{padding-top:var(--s7);font-size:.875rem;color:var(--text-3)}
.crumbs a{text-decoration:none;color:var(--text-2)}
.crumbs span[aria-hidden]{margin:0 var(--s2)}
.art-head{padding:var(--s5) 0 var(--s7);max-width:52rem}
.art-head h1{font-size:clamp(2rem,4.6vw,3.25rem);line-height:1.08;letter-spacing:-.025em}
.art-lead{margin-top:var(--s5);font-size:1.25rem;line-height:1.55;color:var(--text-2);max-width:42ch}
.art-meta{margin-top:var(--s5);font-size:.875rem;color:var(--text-3)}
.art-cover{margin:0 0 var(--s8)}
.art-cover img{width:100%;max-height:min(68vh,620px);object-fit:cover;object-position:left top;border-radius:var(--r-lg);border:1px solid var(--line)}
.art{display:grid;grid-template-columns:220px minmax(0,var(--read));gap:var(--s8);justify-content:start;padding-bottom:var(--s9)}
.toc{position:sticky;top:calc(var(--nav-h) + 32px);align-self:start;font-size:.9375rem}
.toc b{display:block;font-weight:var(--w-medium);color:var(--text-3);font-size:.8125rem;margin-bottom:var(--s3)}
.toc ol{list-style:none;margin:0;padding:0;border-left:1px solid var(--line)}
.toc a{display:block;padding:6px 0 6px var(--s4);margin-left:-1px;border-left:2px solid transparent;color:var(--text-2);text-decoration:none;line-height:1.35}
.toc-m{display:none}

.prose{font-size:1.125rem;line-height:1.75;min-width:0}
.prose>*+*{margin-top:1.15em}
.prose h2{margin-top:2.4em;font-size:clamp(1.5rem,2.6vw,1.875rem);line-height:1.2;letter-spacing:-.015em}
.prose h3{margin-top:1.8em;font-size:1.25rem;line-height:1.3}
.prose h2+*,.prose h3+*{margin-top:.7em}
.prose p,.prose li{color:var(--text)}
.prose strong{font-weight:var(--w-bold)}
.prose a{color:var(--accent)}
.prose ul,.prose ol{padding-left:1.4em}
.prose li+li{margin-top:.45em}
.prose li::marker{color:var(--accent)}
.prose figure{margin:2em 0}
.prose figure img{width:100%;border-radius:var(--r);border:1px solid var(--line)}
.prose figcaption{margin-top:var(--s3);font-size:.9375rem;line-height:1.5;color:var(--text-3)}
.prose blockquote{margin:1.6em 0;padding:var(--s5) var(--s5);background:var(--surface);border-radius:var(--r);color:var(--text)}
.prose blockquote>*+*{margin-top:.8em}
.prose table{width:100%;border-collapse:collapse;font-size:1rem;line-height:1.5}
.prose .tbl{overflow-x:auto;margin:1.6em 0}
.prose th,.prose td{padding:12px 14px;text-align:left;border-bottom:1px solid var(--line);vertical-align:top}
.prose th{font-weight:var(--w-medium);color:var(--text-3);font-size:.875rem}
.prose hr{border:0;border-top:1px solid var(--line);margin:2.4em 0}
.prose code{font-size:.9em;background:var(--surface-2);padding:2px 6px;border-radius:6px}

/* призыв в конце статьи — тот же зелёный блок, что на главной */
.cta{background:var(--accent);color:var(--on-accent);border-radius:var(--r-lg);padding:clamp(28px,5vw,56px);margin:0 0 var(--s9)}
.cta h2{font-size:clamp(1.75rem,3.6vw,2.75rem);line-height:1.08;letter-spacing:-.025em;max-width:18ch}
.cta p{margin-top:var(--s4);font-size:1.125rem;max-width:44ch;color:var(--on-accent)}
.cta-row{display:flex;flex-wrap:wrap;gap:var(--s3);margin-top:var(--s6)}

.more{padding-bottom:var(--s8)}
.more h2{font-size:1.5rem;margin-bottom:var(--s5)}

@media (hover:hover) and (pointer:fine){
  .btn-primary:hover{background:var(--accent-hi)}
  .btn-line:hover{background:rgba(4,20,12,.08)}
  .nav-links a:hover{color:var(--text)}
  .foot a:hover{color:var(--text)}
  .post a:hover h2{color:var(--accent)}
  .toc a:hover{color:var(--text);border-left-color:var(--line-2)}
  .crumbs a:hover{color:var(--text)}
}
@media (max-width:1020px){
  .art{grid-template-columns:minmax(0,var(--read))}
  .toc{display:none}
  .toc-m{display:block;margin-bottom:var(--s6);background:var(--surface);border-radius:var(--r);padding:0 var(--s5)}
  .toc-m summary{cursor:pointer;min-height:52px;display:flex;align-items:center;font-weight:var(--w-medium)}
  .toc-m ol{margin:0 0 var(--s4);padding-left:1.2em;color:var(--text-2)}
  .toc-m a{display:block;padding:6px 0;text-decoration:none}
}
@media (max-width:860px){
  .nav-links{display:none}
  .nav .btn{margin-left:auto}
  .post a{grid-template-columns:1fr;gap:var(--s4)}
  .post img{order:-1}
}
@media (max-width:420px){
  .nav .btn{padding:0 16px}
  .blog-head{padding:var(--s8) 0 var(--s6)}
  .prose{font-size:1.0625rem}
  .cta-row .btn{width:100%}
}
