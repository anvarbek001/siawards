{{--
    resources/views/components/cookie-consent.blade.php

    Ishlatish (layouts/app.blade.php ichida, </body> dan oldin):
        <x-cookie-consent policy-url="/maxfiylik-siyosati" />
--}}
@props(['policyUrl' => '/maxfiylik-siyosati'])

<div id="cookie-consent" class="cc" role="dialog" aria-live="polite" aria-label="Cookie sozlamalari" hidden>
    <p class="cc-title">Biz cookie fayllaridan foydalanamiz</p>
    <p class="cc-text">
        Sayt ishlashi uchun zarur cookie'lar doim yoqilgan. Statistika cookie'lari saytni yaxshilashga
        yordam beradi va faqat sizning roziligingiz bilan yoqiladi.
        {{-- <a href="{{ $policyUrl }}">Batafsil</a> --}}
    </p>
    <div class="cc-actions">
        <button type="button" class="cc-btn cc-btn-primary" data-cookie-action="all">Hammasini qabul qilish</button>
        <button type="button" class="cc-btn cc-btn-secondary" data-cookie-action="necessary">Faqat zarurlari</button>
    </div>
</div>

<style>
    .cc {
        --cc-accent: #1f6f5c;
        --cc-bg: #ffffff;
        --cc-ink: #1d2523;
        --cc-muted: #5d6a66;
        --cc-line: #dfe6e3;

        position: fixed;
        z-index: 9999;
        left: 12px;
        right: 12px;
        bottom: calc(12px + env(safe-area-inset-bottom, 0px));
        max-width: 520px;
        padding: 18px;
        background: var(--cc-bg);
        color: var(--cc-ink);
        border: 1px solid var(--cc-line);
        border-radius: 16px;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.18);
        font: 400 15px/1.5 system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        animation: cc-in 0.4s ease both;
    }

    .cc[hidden] {
        display: none;
    }

    .cc-title {
        margin: 0 0 6px;
        font-size: 17px;
        font-weight: 700;
    }

    .cc-text {
        margin: 0 0 14px;
        color: var(--cc-muted);
    }

    .cc-text a {
        color: var(--cc-accent);
        font-weight: 600;
    }

    .cc-actions {
        display: grid;
        gap: 8px;
    }

    .cc-btn {
        min-height: 46px;
        padding: 10px 16px;
        border-radius: 12px;
        font: 600 15px system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        cursor: pointer;
        border: 1.5px solid var(--cc-accent);
    }

    .cc-btn-primary {
        background: var(--cc-accent);
        color: #fff;
    }

    .cc-btn-secondary {
        background: transparent;
        color: var(--cc-accent);
    }

    .cc-btn:focus-visible {
        outline: 3px solid #e0a526;
        outline-offset: 2px;
    }

    @media (min-width: 560px) {
        .cc {
            left: 20px;
            right: auto;
            bottom: 20px;
        }

        .cc-actions {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (prefers-color-scheme: dark) {
        .cc {
            --cc-bg: #17201e;
            --cc-ink: #eef3f1;
            --cc-muted: #a3b1ad;
            --cc-line: #2b3835;
            --cc-accent: #3fb59b;
        }

        .cc-btn-primary {
            color: #0b1311;
        }
    }

    @keyframes cc-in {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .cc {
            animation: none;
        }
    }
</style>

<script>
    (function() {
        var KEY = 'cookie_consent'; // qiymatlar: "all" yoki "necessary"
        var banner = document.getElementById('cookie-consent');

        function getConsent() {
            var m = document.cookie.match(new RegExp('(?:^|; )' + KEY + '=([^;]*)'));
            return m ? decodeURIComponent(m[1]) : null;
        }

        function setConsent(value) {
            var secure = location.protocol === 'https:' ? '; Secure' : '';
            document.cookie = KEY + '=' + encodeURIComponent(value) +
                '; max-age=' + (60 * 60 * 24 * 365) + '; path=/; SameSite=Lax' + secure;
        }

        // type="text/plain" data-consent="analytics" bo'lgan skriptlarni rozilikdan keyin ishga tushiradi
        function loadAnalytics() {
            document.querySelectorAll('script[type="text/plain"][data-consent="analytics"]').forEach(function(old) {
                var s = document.createElement('script');
                if (old.dataset.src) {
                    s.src = old.dataset.src;
                    s.async = true;
                }
                if (old.textContent.trim()) {
                    s.textContent = old.textContent;
                }
                old.replaceWith(s);
            });
        }

        // Rozilik qaytarib olinsa, Google Analytics cookie'larini tozalaydi
        function clearAnalyticsCookies() {
            document.cookie.split(';').forEach(function(c) {
                var name = c.split('=')[0].trim();
                if (name === '_gid' || name.indexOf('_ga') === 0) {
                    document.cookie = name + '=; max-age=0; path=/';
                    document.cookie = name + '=; max-age=0; path=/; domain=.' + location.hostname;
                }
            });
        }

        function choose(value) {
            var previous = getConsent();
            setConsent(value);
            banner.hidden = true;

            if (value === 'all') {
                loadAnalytics();
            } else if (previous === 'all') {
                clearAnalyticsCookies();
                location.reload(); // allaqachon yuklangan skriptlarni to'xtatish uchun
            }
        }

        banner.addEventListener('click', function(e) {
            var btn = e.target.closest('[data-cookie-action]');
            if (btn) {
                choose(btn.getAttribute('data-cookie-action'));
            }
        });

        // Footerda: <a href="#" data-cookie-settings>Cookie sozlamalari</a>
        document.addEventListener('click', function(e) {
            if (e.target.closest('[data-cookie-settings]')) {
                e.preventDefault();
                banner.hidden = false;
            }
        });

        var current = getConsent();
        if (current === 'all') {
            loadAnalytics();
        } else if (!current) {
            banner.hidden = false;
        }
    })();
</script>
