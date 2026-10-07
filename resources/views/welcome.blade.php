<!DOCTYPE html>
<html lang="uz">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>Science and Innovation Awards 2026</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,500;0,700;1,500&family=Figtree:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        @vite(['resources/css/app.css'])
    </head>

    <body>
        <canvas id="gl" aria-hidden="true"></canvas>

        <nav>
            <div class="w">
                <a class="logo" href="#top"><img src="{{ asset('images/logo_science_innovation.png') }}"
                        alt="Science and Innovation"></a>
                <div class="links"><a href="#marosim">Tadbir haqida</a><a href="#awards">Nominatsiyalar</a><a
                        href="#korgazma">Ko'rgazmalar</a><a href="#gala_konsert">Gala konsert</a><a
                        href="#mezonlar">Mezonlar</a><a href="#tashkilotchi">Tashkilotchi</a></div>
                <a class="btn sm" href="#ishtirok">Ishtirok etish</a>
            </div>
        </nav>

        <header class="hero" id="top">
            <div class="w">
                <div class="in">
                    <div class="tag"><b></b> Science and Innovation xalqaro ilmiy jurnali</div>
                    <h1>SCIENCE AND INNOVATION <span class="gold">AWARDS 2026</span></h1>
                    <p class="lead">Yil olimi, eng yaxshi oliy ta'lim muassasalari, ilmiy-tadqiqot institutlari va
                        ilmiy nashrlar nominatsiyalari bo'yicha g'oliblar aniqlanadi.</p>
                    <div class="cta">
                        <a class="btn" href="#ishtirok">Tanlovda ishtirok etish &rarr;</a>
                        <a class="btn ghost" href="#awards">Nominatsiyalar</a>
                    </div>
                </div>
            </div>
            <div class="teaser">
                <div class="w">
                    <a class="tz" href="#marosim"><b></b><span class="k">Taqdirlash
                            marosimi</span><span>19-dekabr, 2026, 17:00</span><em id="tcd"></em><span
                            class="arr">Batafsil &darr;</span></a>
                </div>
            </div>
        </header>

        <section class="semsec" id="marosim">
            <div class="w">
                <!-- TAQDIRLASH MAROSIMI: sanani data-date da, videoni #vid da (data-youtube yoki data-src) o'zgartiring -->
                <aside class="sem rv" id="sem" data-date="2026-12-19T17:00:00"
                    aria-label="Science and Innovation Awards 2026 taqdirlash marosimi">
                    <div class="vleft">
                        <h4>Taqdirlash marosimigacha qolgan vaqt</h4>
                        {{-- <div class="vid" id="vid" data-youtube="" data-src="">
                        <div class="poster"><img src="{{ asset('images/seminar.jpg') }}" alt="Science and Innovation Awards 2026 afishasi"></div>
                        <div class="vbadge"><b></b> Video taqdimot</div>
                        <button class="play" type="button" aria-label="Videoni ijro etish"><svg viewBox="0 0 24 24"><path d="M7 4.5v15l13-7.5z" /></svg></button>
                        <p class="note" hidden>Video manzili qo'yilmagan: #vid elementida data-youtube (YouTube ID) yoki data-src (mp4 havola) ni to'ldiring.</p>
                    </div> --}}
                        <div class="cd" id="cd" aria-live="off">
                            <div><strong data-u="d">00</strong><small>kun</small></div>
                            <div><strong data-u="h">00</strong><small>soat</small></div>
                            <div><strong data-u="m">00</strong><small>daqiqa</small></div>
                            <div><strong data-u="s">00</strong><small>soniya</small></div>
                        </div>
                    </div>
                    <div class="sinfo">
                        <div class="top"><b></b> Taqdirlash marosimi</div>
                        <h3>Science and Innovation Awards 2026</h3>
                        <p>Yil olimi, eng yaxshi oliy ta'lim muassasalari, ilmiy-tadqiqot institutlari va ilmiy nashrlar
                            g'oliblari tantanali marosimda e'lon qilinadi va taqdirlanadi.</p>
                        <div class="meta">
                            <div><svg viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="18" height="16" rx="2" />
                                    <path d="M3 10h18M8 3v4M16 3v4" />
                                </svg><span><small>Sana</small><b>19-dekabr, 2026</b></span></div>
                            <div><svg viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 2" />
                                </svg><span><small>Vaqt</small><b>17:00</b></span></div>
                            <div><svg viewBox="0 0 24 24">
                                    <path d="M12 21s7-6.2 7-11.5A7 7 0 005 9.5C5 14.8 12 21 12 21z" />
                                    <circle cx="12" cy="9.5" r="2.5" />
                                </svg><span><small>Joy</small><b>Turkiston san'at saroyi</b></span></div>
                            <div><svg viewBox="0 0 24 24">
                                    <path
                                        d="M8 21h8M12 17v4M7 4h10v5a5 5 0 01-10 0zM7 6H4v1a3 3 0 003 3M17 6h3v1a3 3 0 01-3 3" />
                                </svg><span><small>Nominatsiyalar</small><b>6 ta yo'nalish</b></span></div>
                        </div>
                        <div class="sacts">
                            <a class="btn" href="#ishtirok">Ishtirok etish &rarr;</a>
                            <a class="btn ghost"
                                href="https://awards.science-innovation.org/files/SCIENCE%20AND%20INNOVATION%20AWARDS.pdf"
                                target="_blank" rel="noopener">Tadbir haqida</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <main>
            <section id="awards" style="padding-top:40px">
                <div class="w">
                    <div class="head rv">
                        <h2>Sovrin uchun kurashadigan <span class="gold">oltita nominatsiya</span></h2>
                        <p class="sub">Har bir yo'nalish g'olibi tantanali marosimda e'lon qilinadi va taqdirlanadi.
                        </p>
                    </div>
                    <div class="grid">
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.5 13.5L17 22l-5-3-5 3 1.5-8.5" />
                                </svg></div>
                            <h3>Yil olimi 2026</h3>
                            <p>Ilm-fan rivojiga munosib hissa qo'shgan olim.</p>
                        </article>
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <path d="M3 10l9-6 9 6" />
                                    <path d="M5 10v8M9 10v8M15 10v8M19 10v8" />
                                    <path d="M3 20h18" />
                                </svg></div>
                            <h3>Yilning eng yaxshi oliy ta'lim muassasasi</h3>
                            <p>Ta'lim va ilmiy faoliyatda yuksak natijalarga erishgan OTM.</p>
                        </article>
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <path d="M2 9l10-5 10 5-10 5z" />
                                    <path d="M6 11.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-4.5" />
                                    <path d="M22 9v6" />
                                </svg></div>
                            <h3>Yilning eng yaxshi nodavlat oliy ta'lim muassasasi</h3>
                            <p>Nodavlat sektordagi eng yetakchi oliy ta'lim muassasasi.</p>
                        </article>
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <path d="M9 3h6M10 3v6L4.5 19a1.5 1.5 0 001.3 2h12.4a1.5 1.5 0 001.3-2L14 9V3" />
                                    <path d="M7.5 15h9" />
                                </svg></div>
                            <h3>Yilning eng yaxshi ilmiy tadqiqot instituti</h3>
                            <p>Ilmiy tadqiqotlarda eng samarali ishlagan institut.</p>
                        </article>
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <path d="M12 6c-2-1.5-5-2-9-2v14c4 0 7 .5 9 2 2-1.5 5-2 9-2V4c-4 0-7 .5-9 2z" />
                                    <path d="M12 6v14" />
                                </svg></div>
                            <h3>Yilning eng yaxshi universiteti*</h3>
                            <p>Yil davomida eng yuqori ko'rsatkichlarga erishgan universitet.</p>
                        </article>
                        <article class="el main rv">
                            <div class="ico"><svg viewBox="0 0 24 24">
                                    <path d="M6 3h9l4 4v14H6z" />
                                    <path d="M14 3v5h5M9 13h7M9 17h5" />
                                </svg></div>
                            <h3>Yilning eng yaxshi ilmiy nashri*</h3>
                            <p>Ilmiy hamjamiyatga eng katta hissa qo'shgan nashr.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section id="korgazma" style="padding-top:40px">
                <div class="w">
                    <div class="head rv">
                        <h2>Ko'rgazma <span class="gold">2025</span></h2>
                        <p class="sub">O'tgan yilgi ilmiy-innovatsion ko'rgazmadan lavhalar.</p>
                    </div>
                    <div class="gal k">
                        @for ($i = 1; $i <= 4; $i++)
                            <figure class="ph rv"><img src="{{ asset('images/korgazma' . $i . '.jpg') }}"
                                    alt="Ko'rgazma 2025, {{ $i }}-surat" loading="lazy"><span
                                    class="zm"><svg viewBox="0 0 24 24">
                                        <circle cx="11" cy="11" r="6" />
                                        <path d="M20 20l-4-4M11 8v6M8 11h6" />
                                    </svg></span></figure>
                        @endfor
                    </div>
                </div>
            </section>

            <section id="gala_konsert" style="padding-top:40px">
                <div class="w">
                    <div class="head rv">
                        <h2>Gala konsert <span class="gold">2025</span></h2>
                        <p class="sub">Taqdirlash marosimidan so'ng bo'lib o'tgan tantanali konsert lavhalari.</p>
                    </div>
                    <div class="gal c">
                        @for ($i = 1; $i <= 7; $i++)
                            <figure class="ph rv"><img src="{{ asset('images/konsert' . $i . '.jpg') }}"
                                    alt="Gala konsert 2025, {{ $i }}-surat" loading="lazy"><span
                                    class="zm"><svg viewBox="0 0 24 24">
                                        <circle cx="11" cy="11" r="6" />
                                        <path d="M20 20l-4-4M11 8v6M8 11h6" />
                                    </svg></span></figure>
                        @endfor
                    </div>
                </div>
            </section>

            <section id="ishtirok">
                <div class="w">
                    <div class="head rv">
                        <h2>Marosimda uch xil <span class="gold">shaklda</span> ishtirok etish mumkin</h2>
                        <p class="sub">O'zingizga mos shaklni tanlang va biz bilan bog'laning.</p>
                    </div>
                    <div class="parts">
                        <div class="part rv">
                            <div class="ic"><svg viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="12" rx="2" />
                                    <path d="M8 20h8M12 16v4" />
                                </svg></div>
                            <span class="warn">Joylar soni chegaralangan!</span>
                            <h3>Ilmiy ko'rgazmada ishtirok</h3>
                            <p>Tashkilotlar ilmiy innovatsion ko'rgazmada ishtirok etishlari va hamkorlik qilishlari
                                uchun murojaat qiling.</p>
                            <div class="ct"><small>Murojaat uchun</small>
                                <a href="tel:+998901259654"><svg viewBox="0 0 24 24">
                                        <path
                                            d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z" />
                                    </svg>+998 (90) 125-96-54</a>
                                <a href="https://t.me/science_Gulirano" target="_blank" rel="noopener"><svg
                                        viewBox="0 0 24 24">
                                        <path d="M21 4L3 11l6 2 2 6 3-4 5 4z" />
                                    </svg>@science_Gulirano</a>
                            </div>
                        </div>
                        <div class="part rv">
                            <div class="ic"><svg viewBox="0 0 24 24">
                                    <path
                                        d="M8 21h8M12 17v4M7 4h10v5a5 5 0 01-10 0zM7 6H4v1a3 3 0 003 3M17 6h3v1a3 3 0 01-3 3" />
                                </svg></div>
                            <span class="warn">Tez orada</span>
                            <h3>Tanlovda ishtirok etish</h3>
                            <p>Tanlovda ishtirok etish uchun ushbu sayt orqali ro'yxatdan o'ting. Ro'yxatdan o'tish
                                sahifasi tez orada e'lon qilinadi!</p>
                            <div class="ct"><small>Qo'shimcha savollar uchun</small>
                                <a href="tel:+998933549654"><svg viewBox="0 0 24 24">
                                        <path
                                            d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z" />
                                    </svg>+998 (93) 354-96-54</a>
                                <a href="https://t.me/Science_Feruza" target="_blank" rel="noopener"><svg
                                        viewBox="0 0 24 24">
                                        <path d="M21 4L3 11l6 2 2 6 3-4 5 4z" />
                                    </svg>@Science_Feruza</a>
                            </div>
                        </div>
                        <div class="part rv">
                            <div class="ic"><svg viewBox="0 0 24 24">
                                    <path
                                        d="M3 9a2 2 0 012-2h14a2 2 0 012 2v2a2 2 0 000 4v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2a2 2 0 000-4z" />
                                    <path d="M9 7v10" stroke-dasharray="2 3" />
                                </svg></div>
                            <h3>Tomoshabin sifatida ishtirok</h3>
                            <p>Tadbirda tomoshabin sifatida ishtirok etish uchun chiptalar “Science and Innovation”
                                nashriyoti ofislarida sotiladi.</p>
                            <div class="ct"><small>Chipta uchun</small>
                                <a href="tel:+998933549654"><svg viewBox="0 0 24 24">
                                        <path
                                            d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z" />
                                    </svg>+998 (93) 354-96-54</a>
                                <a href="https://t.me/Science_Feruza" target="_blank" rel="noopener"><svg
                                        viewBox="0 0 24 24">
                                        <path d="M21 4L3 11l6 2 2 6 3-4 5 4z" />
                                    </svg>@Science_Feruza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="mezonlar" style="padding-top:20px">
                <div class="w">
                    <div class="head rv">
                        <h2>Baholash <span class="gold">mezonlari</span></h2>
                        <p class="sub">PDF hujjatlar bilan oldindan tanishib chiqing.</p>
                    </div>
                    <div class="docs">
                        <a class="doc rv"
                            href="https://awards.science-innovation.org/files/Baholash%20mezoni%20OTM.pdf"
                            target="_blank" rel="noopener"><i>PDF</i><span>OTM uchun baholash mezonlari<small>100
                                    ball</small></span></a>
                        <a class="doc rv"
                            href="https://awards.science-innovation.org/files/Baholash%20%20mezonlari%20Yil%20olimi.pdf"
                            target="_blank" rel="noopener"><i>PDF</i><span>“Yil olimi” nominatsiyasi<small>Baholash
                                    mezonlari</small></span></a>
                        <a class="doc rv"
                            href="https://awards.science-innovation.org/files/Baholash%20mezoni%20ITI.pdf"
                            target="_blank" rel="noopener"><i>PDF</i><span>Ilmiy-tadqiqot institutlari
                                (ITI)<small>Baholash mezonlari</small></span></a>
                        <a class="doc rv"
                            href="https://awards.science-innovation.org/files/SCIENCE%20AND%20INNOVATION%20AWARDS.pdf"
                            target="_blank" rel="noopener"><i>PDF</i><span>Tadbir haqida<small>Science and Innovation
                                    Awards</small></span></a>
                    </div>
                </div>
            </section>

            <section id="tashkilotchi" style="padding-top:40px">
                <div class="w">
                    <div class="head rv">
                        <h2>Tashkilotchi: <span class="gold">Science and Innovation</span> xalqaro ilmiy jurnali</h2>
                    </div>
                    <div class="org rv">
                        <div class="org-l"><img src="{{ asset('images/logo_science.png') }}"
                                alt="Science and Innovation"></div>
                        <div class="org-r">
                            <h3>Kelajak innovatsiyalarini bugun yaratamiz</h3>
                            <p><b>"Science and Innovation"</b> — bu zamonaviy ilm-fan yutuqlarini, xalqaro nashriyot
                                tizimlarini va ilg‘or IT loyihalarni o‘zida birlashtirgan innovatsion platformadir. Biz
                                tadqiqotchilar, olimlar, professor-o‘qituvchilar va IT mutaxassislari uchun yagona
                                mukammal ekotizim yaratishni maqsad qilganmiz.</p>
                            <p>Faoliyatimiz ilmiy jurnallarni raqamlashtirish va xalqaro miqyosda rivojlantirish, yuqori
                                sifatli kitoblar hamda monografiyalarni nashr etish, nufuzli ilmiy-amaliy
                                konferensiyalar tashkil etish va zamonaviy veb hamda mobil dasturiy mahsulotlarni ishlab
                                chiqishgacha bo‘lgan keng doirani qamrab oladi.</p>
                            <div class="oc"><span>Ilmiy jurnallar</span><span>Kitob va
                                    monografiyalar</span><span>Konferensiyalar</span><span>Veb va mobil dasturlar</span>
                            </div>
                            <div class="acts">
                                <a class="btn" href="https://science-innovation.org/" target="_blank"
                                    rel="noopener">Rasmiy sayt &rarr;</a>
                                <a class="btn ghost" href="https://scientists.uz/" target="_blank"
                                    rel="noopener">Jurnal sayti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="join" style="padding-top:20px">
                <div class="w">
                    <div class="final rv">
                        <h2>Ilmiy yutuqlaringizni <span class="gold">e'tirof ettiring</span></h2>
                        <p>Ro'yxatdan o'tish sahifasi tez orada e'lon qilinadi. Hozircha savollar bo'yicha Telegram
                            orqali murojaat qiling.</p>
                        <a class="btn" href="https://t.me/science_innovations" target="_blank"
                            rel="noopener">Telegram kanalga o'tish &rarr;</a>
                        <a class="btn ghost" href="https://t.me/science_Gulirano" target="_blank"
                            rel="noopener">Hamkorlik qilish</a>
                        <a class="btn ghost" href="#ishtirok">Ishtirok etish</a>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="w">
                <img class="flogo" src="{{ asset('images/logo_science_innovation.png') }}"
                    alt="Science and Innovation">
                <div class="fcts"><a href="https://t.me/science_Gulirano" target="_blank" rel="noopener">+998 (90)
                        125-96-54</a><a href="https://t.me/Science_Feruza" target="_blank" rel="noopener">+998 (93)
                        354-96-54</a></div>
                <span>&copy; <span id="yr"></span> Science and Innovation</span>
            </div>
        </footer>

        <div class="lb" id="lb" aria-hidden="true"><img alt=""></div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script>
            document.getElementById('yr').textContent = new Date().getFullYear();
            const calm = matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Paydo bo'lish
            const io = new IntersectionObserver(es => es.forEach(e => {
                if (!e.isIntersecting) return;
                e.target.classList.add('in');
                io.unobserve(e.target);
            }), {
                threshold: .15
            });
            document.querySelectorAll('.rv').forEach((el, i) => {
                el.style.transitionDelay = (i % 3) * 80 + 'ms';
                io.observe(el);
            });

            // Marosimgacha qolgan vaqt
            (() => {
                const box = document.getElementById('sem'),
                    cd = document.getElementById('cd');
                const end = new Date(box.dataset.date).getTime(),
                    q = u => cd.querySelector('[data-u=' + u + ']');
                const tc = document.getElementById('tcd');
                const p = n => String(n).padStart(2, '0');
                const tick = () => {
                    const d = end - Date.now();
                    if (isNaN(end)) return;
                    if (d <= 0) {
                        tc.textContent = '';
                        cd.innerHTML = '<span class="done">Marosim boshlangan yoki yakunlangan</span>';
                        clearInterval(id);
                        return;
                    }
                    q('d').textContent = p(Math.floor(d / 864e5));
                    q('h').textContent = p(Math.floor(d / 36e5) % 24);
                    q('m').textContent = p(Math.floor(d / 6e4) % 60);
                    q('s').textContent = p(Math.floor(d / 1e3) % 60);
                    tc.textContent = Math.floor(d / 864e5) + ' kun ' + p(Math.floor(d / 36e5) % 24) + ':' + p(Math
                        .floor(d / 6e4) % 60) + ':' + p(Math.floor(d / 1e3) % 60);
                };
                const id = setInterval(tick, 1000);
                tick();
            })();

            // Video: YouTube yoki mp4
            (() => {
                const v = document.getElementById('vid');
                if (!v) return;
                v.querySelector('.play').addEventListener('click', () => {
                    const yt = v.dataset.youtube.trim(),
                        src = v.dataset.src.trim();
                    let el;
                    if (yt) {
                        el = document.createElement('iframe');
                        el.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(yt) +
                            '?autoplay=1&rel=0';
                        el.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
                        el.allowFullscreen = true;
                        el.title = 'Marosim videosi';
                    } else if (src) {
                        el = document.createElement('video');
                        el.src = src;
                        el.controls = true;
                        el.autoplay = true;
                        el.playsInline = true;
                    } else {
                        v.querySelector('.note').hidden = false;
                        return;
                    }
                    el.className = 'media';
                    v.appendChild(el);
                    v.classList.add('on');
                });
            })();

            // Suratni kattalashtirish
            (() => {
                const lb = document.getElementById('lb'),
                    im = lb.querySelector('img');
                const close = () => lb.classList.remove('on');
                document.querySelectorAll('.ph').forEach(f => f.addEventListener('click', () => {
                    const i = f.querySelector('img');
                    im.src = i.src;
                    im.alt = i.alt;
                    lb.classList.add('on');
                }));
                lb.addEventListener('click', close);
                addEventListener('keydown', e => {
                    if (e.key === 'Escape') close();
                });
            })();

            // 3D: oltin ipak mato va yorug'lik changi
            try {
                const cv = document.getElementById('gl');
                const R = new THREE.WebGLRenderer({
                    canvas: cv,
                    antialias: true,
                    alpha: true
                });
                const PR = Math.min(devicePixelRatio, 1.75);
                R.setPixelRatio(PR);
                R.outputEncoding = THREE.sRGBEncoding;
                R.toneMapping = THREE.ACESFilmicToneMapping;
                R.toneMappingExposure = 1.15;
                const S = new THREE.Scene(),
                    C = new THREE.PerspectiveCamera(35, 1, .1, 100);
                C.position.set(0, 0, 11);

                // studiya yoritgichlari aksi (metall tabiiy ko'rinishi uchun)
                const ec = document.createElement('canvas');
                ec.width = 1024;
                ec.height = 512;
                const x = ec.getContext('2d');
                const bg = x.createLinearGradient(0, 0, 0, 512);
                bg.addColorStop(0, '#141b36');
                bg.addColorStop(.5, '#05070f');
                bg.addColorStop(1, '#2a1c07');
                x.fillStyle = bg;
                x.fillRect(0, 0, 1024, 512);
                const soft = (cx, w, y0, y1, rgb, a) => {
                    const gx = x.createLinearGradient(cx - w, 0, cx + w, 0);
                    gx.addColorStop(0, 'rgba(' + rgb + ',0)');
                    gx.addColorStop(.5, 'rgba(' + rgb + ',' + a + ')');
                    gx.addColorStop(1, 'rgba(' + rgb + ',0)');
                    x.fillStyle = gx;
                    x.fillRect(cx - w, y0, w * 2, y1 - y0);
                };
                soft(180, 80, 30, 340, '255,226,160', 1);
                soft(470, 45, 70, 310, '255,244,222', .9);
                soft(720, 100, 20, 270, '255,208,120', .95);
                soft(930, 55, 90, 330, '26,188,156', .55);
                const et = new THREE.CanvasTexture(ec);
                et.encoding = THREE.sRGBEncoding;
                const pm = new THREE.PMREMGenerator(R);
                S.environment = pm.fromEquirectangular(et).texture;
                pm.dispose();

                const key = new THREE.DirectionalLight(0xffe2a8, .9);
                key.position.set(4, 6, 8);
                S.add(key);

                const G = new THREE.Group();
                S.add(G);

                // oltin ipak mato
                const mob = innerWidth < 860;
                const geo = new THREE.PlaneGeometry(24, 13, mob ? 90 : 150, mob ? 50 : 84);
                const pos = geo.attributes.position,
                    base = pos.array.slice();
                const silk = new THREE.Mesh(geo, new THREE.MeshPhysicalMaterial({
                    color: 0xc8982c,
                    metalness: 1,
                    roughness: .34,
                    clearcoat: .4,
                    clearcoatRoughness: .4,
                    side: THREE.DoubleSide,
                    envMapIntensity: 1.25
                }));
                silk.rotation.set(-1.05, 0, -.28);
                silk.position.set(2, -2.6, -3);
                G.add(silk);
                const wave = t => {
                    const a = pos.array;
                    for (let i = 0; i < pos.count; i++) {
                        const bx = base[i * 3],
                            by = base[i * 3 + 1];
                        a[i * 3 + 2] = .72 * Math.sin(bx * .42 + by * .25 + t * .42) +
                            .38 * Math.sin(bx * .9 - by * .6 - t * .28) +
                            .16 * Math.sin(by * 1.7 + bx * .4 + t * .5);
                    }
                    pos.needsUpdate = true;
                    geo.computeVertexNormals();
                };

                // orqadagi yumshoq yorug'lik
                const gc = document.createElement('canvas');
                gc.width = gc.height = 256;
                const gx = gc.getContext('2d');
                const rg = gx.createRadialGradient(128, 128, 0, 128, 128, 128);
                rg.addColorStop(0, 'rgba(255,214,130,.9)');
                rg.addColorStop(.4, 'rgba(230,170,60,.28)');
                rg.addColorStop(1, 'rgba(230,170,60,0)');
                gx.fillStyle = rg;
                gx.fillRect(0, 0, 256, 256);
                const glow = new THREE.Mesh(new THREE.PlaneGeometry(18, 18), new THREE.MeshBasicMaterial({
                    map: new THREE.CanvasTexture(gc),
                    transparent: true,
                    opacity: .5,
                    blending: THREE.AdditiveBlending,
                    depthWrite: false
                }));
                glow.position.set(2.5, 1.2, -6);
                G.add(glow);

                // suzib yuruvchi yorug'lik changi (bokeh)
                const N = 520,
                    dp = new Float32Array(N * 3),
                    ds = new Float32Array(N),
                    dph = new Float32Array(N),
                    dsp = new Float32Array(N);
                for (let i = 0; i < N; i++) {
                    dp.set([(Math.random() - .5) * 28, (Math.random() - .5) * 18, -4 + Math.random() * 9], i * 3);
                    ds[i] = 6 + Math.pow(Math.random(), 3) * 40;
                    dph[i] = Math.random() * 6.28;
                    dsp[i] = .12 + Math.random() * .3;
                }
                const dg = new THREE.BufferGeometry();
                dg.setAttribute('position', new THREE.BufferAttribute(dp, 3));
                dg.setAttribute('aSize', new THREE.BufferAttribute(ds, 1));
                dg.setAttribute('aPh', new THREE.BufferAttribute(dph, 1));
                dg.setAttribute('aSp', new THREE.BufferAttribute(dsp, 1));
                const dm = new THREE.ShaderMaterial({
                    transparent: true,
                    depthWrite: false,
                    blending: THREE.AdditiveBlending,
                    uniforms: {
                        uT: {
                            value: 0
                        },
                        uPR: {
                            value: PR
                        }
                    },
                    vertexShader: 'uniform float uT;uniform float uPR;attribute float aSize;attribute float aPh;attribute float aSp;varying float vA;' +
                        'void main(){vec3 p=position;p.y=mod(p.y+9.0+uT*aSp,18.0)-9.0;p.x+=sin(uT*.25+aPh)*.35;' +
                        'vec4 mv=modelViewMatrix*vec4(p,1.0);gl_Position=projectionMatrix*mv;gl_PointSize=aSize*uPR*(8.0/-mv.z);' +
                        'vA=.25+.75*(.5+.5*sin(uT*1.2+aPh*5.0));}',
                    fragmentShader: 'varying float vA;void main(){float d=length(gl_PointCoord-.5);float a=smoothstep(.5,.0,d);a*=a;' +
                        'gl_FragColor=vec4(1.0,.82,.45,a*vA*.85);}'
                });
                const dust = new THREE.Points(dg, dm);
                dust.frustumCulled = false;
                S.add(dust);

                let mx = 0,
                    my = 0,
                    y0 = 0;
                addEventListener('pointermove', e => {
                    mx = e.clientX / innerWidth - .5;
                    my = e.clientY / innerHeight - .5;
                });
                const fit = () => {
                    R.setSize(innerWidth, innerHeight, false);
                    C.aspect = innerWidth / innerHeight;
                    C.updateProjectionMatrix();
                    const m = innerWidth < 860;
                    G.position.x = m ? 0 : 1.2;
                    y0 = m ? 1.2 : 0;
                    G.scale.setScalar(m ? .8 : 1);
                };
                addEventListener('resize', fit);
                fit();
                G.position.y = y0;

                const clock = new THREE.Clock();
                const draw = () => {
                    const t = clock.getElapsedTime(),
                        s = scrollY;
                    wave(t);
                    dm.uniforms.uT.value = t;
                    glow.material.opacity = .5 + Math.sin(t * .5) * .08;
                    C.position.x += (mx * .8 - C.position.x) * .04;
                    C.position.y += (-my * .5 - C.position.y) * .04;
                    C.lookAt(0, 0, 0);
                    G.position.y += (y0 + s * .0016 - G.position.y) * .05;
                    cv.style.opacity = Math.max(.15, 1 - s / (innerHeight * .9));
                    R.render(S, C);
                    if (!calm) requestAnimationFrame(draw);
                };
                draw();
            } catch (e) {}
        </script>
    </body>

</html>
