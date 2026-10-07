@php
    // Statik ma'lumotlar: shu yerdan o'zgartirasiz
    $stats = [
        ['label' => 'Jami postlar', 'value' => '128', 'note' => '+12 shu oy', 'up' => true],
        ['label' => 'Foydalanuvchilar', 'value' => '1 240', 'note' => '+86 shu oy', 'up' => true],
        ['label' => 'Yuklangan fayllar', 'value' => '312', 'note' => '+9 shu oy', 'up' => true],
        ['label' => 'Ko\'rishlar', 'value' => '48.2k', 'note' => '-3% o\'tgan oyga nisbatan', 'up' => false],
    ];

    $chart = [
        'Yan' => 40,
        'Fev' => 62,
        'Mar' => 48,
        'Apr' => 75,
        'May' => 58,
        'Iyn' => 90,
        'Iyl' => 70,
        'Avg' => 84,
        'Sen' => 66,
        'Okt' => 100,
    ];

    $posts = [
        ['title' => 'Xalqaro konferensiya e\'loni', 'file' => true, 'date' => '04.10.2026', 'status' => 'Faol'],
        ['title' => 'Yangi nashr: 2026-yil, 3-son', 'file' => true, 'date' => '02.10.2026', 'status' => 'Faol'],
        ['title' => 'Maqolalar qabuli qoidalari', 'file' => false, 'date' => '29.09.2026', 'status' => 'Qoralama'],
        ['title' => 'Tahririyat a\'zolari yangilandi', 'file' => false, 'date' => '25.09.2026', 'status' => 'Faol'],
        ['title' => 'Mukofotlash marosimi dasturi', 'file' => true, 'date' => '21.09.2026', 'status' => 'Faol'],
    ];

    $activity = [
        ['text' => 'Yangi post qo\'shildi', 'time' => '2 soat oldin'],
        ['text' => 'Fayl yuklandi: dastur.pdf', 'time' => 'Kecha'],
        ['text' => 'Foydalanuvchi ro\'yxatdan o\'tdi', 'time' => 'Kecha'],
        ['text' => 'Post tahrirlandi', 'time' => '3 kun oldin'],
    ];
@endphp
<!DOCTYPE html>
<html lang="uz">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin panel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Source+Sans+3:wght@400;600&display=swap"
            rel="stylesheet">
        <style>
            :root {
                --bg: #eef1f6;
                --surface: #ffffff;
                --ink: #16202e;
                --muted: #5d6b80;
                --line: #d9dfe9;
                --accent: #1f4fd8;
                --accent-2: #4b7bff;
                --accent-soft: #e3eaff;
                --ok: #12805c;
                --ok-soft: #dff5ec;
                --warn: #9a6200;
                --warn-soft: #fff1d6;
                --danger: #c0262d;
                --side: #111a28;
                --side-w: 252px;
                --shadow: 0 1px 2px rgba(22, 32, 46, .04), 0 8px 24px rgba(22, 32, 46, .05);
            }

            * {
                box-sizing: border-box;
                margin: 0;
            }

            body {
                background: var(--bg);
                color: var(--ink);
                font-family: "Source Sans 3", system-ui, sans-serif;
                line-height: 1.55;
            }

            a {
                color: inherit;
            }

            svg {
                width: 20px;
                height: 20px;
                flex: none;
                stroke: currentColor;
                fill: none;
                stroke-width: 1.8;
                stroke-linecap: round;
                stroke-linejoin: round;
            }

            /* Sidebar */
            .side {
                position: fixed;
                inset: 0 auto 0 0;
                width: var(--side-w);
                background: var(--side);
                color: #aab6c8;
                display: flex;
                flex-direction: column;
                padding: 24px 14px;
                z-index: 20;
                transition: transform .2s;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 12px;
                color: #fff;
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
                font-size: 1.25rem;
                padding: 0 10px 26px;
            }

            .logo i {
                font-style: normal;
                width: 38px;
                height: 38px;
                border-radius: 10px;
                background: linear-gradient(135deg, var(--accent-2), var(--accent));
                display: grid;
                place-items: center;
                box-shadow: 0 6px 16px rgba(31, 79, 216, .45);
            }

            .group {
                font-size: .74rem;
                text-transform: uppercase;
                letter-spacing: .08em;
                color: #66748a;
                padding: 0 12px 8px;
            }

            .nav {
                display: flex;
                flex-direction: column;
                gap: 3px;
                margin-bottom: 22px;
            }

            .nav a {
                display: flex;
                align-items: center;
                gap: 12px;
                text-decoration: none;
                padding: 10px 12px;
                border-radius: 10px;
                font-weight: 600;
                transition: background .15s, color .15s;
            }

            .nav a:hover {
                background: rgba(255, 255, 255, .06);
                color: #fff;
            }

            .nav a.on {
                background: linear-gradient(135deg, var(--accent-2), var(--accent));
                color: #fff;
                box-shadow: 0 6px 16px rgba(31, 79, 216, .35);
            }

            .nav a:focus-visible,
            .out:focus-visible {
                outline: 3px solid #fff;
                outline-offset: 2px;
            }

            .side-foot {
                margin-top: auto;
                padding-top: 16px;
                border-top: 1px solid rgba(255, 255, 255, .1);
            }

            .me {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 0 8px 14px;
            }

            .avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: var(--accent-soft);
                color: var(--accent);
                display: grid;
                place-items: center;
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
            }

            .me b {
                display: block;
                color: #fff;
                line-height: 1.2;
            }

            .me small {
                font-size: .82rem;
                word-break: break-all;
            }

            .out {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 12px;
                font: inherit;
                font-weight: 600;
                color: #aab6c8;
                background: rgba(255, 255, 255, .06);
                border: 0;
                border-radius: 10px;
                padding: 10px 12px;
                cursor: pointer;
            }

            .out:hover {
                background: var(--danger);
                color: #fff;
            }

            /* Main */
            .main {
                margin-left: var(--side-w);
                padding: 32px 38px 64px;
                max-width: 1280px;
            }

            .top {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 16px;
                flex-wrap: wrap;
                margin-bottom: 28px;
            }

            .top-l {
                display: flex;
                align-items: center;
                gap: 14px;
            }

            .burger {
                display: none;
                background: var(--surface);
                border: 1px solid var(--line);
                border-radius: 10px;
                width: 44px;
                height: 44px;
                cursor: pointer;
                color: var(--ink);
                place-items: center;
            }

            h1 {
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
                font-size: clamp(1.8rem, 4vw, 2.5rem);
                line-height: 1.1;
                letter-spacing: -0.025em;
            }

            .date {
                color: var(--muted);
            }

            .btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, var(--accent-2), var(--accent));
                color: #fff;
                text-decoration: none;
                font-weight: 600;
                padding: 11px 20px;
                border-radius: 10px;
                box-shadow: 0 6px 16px rgba(31, 79, 216, .3);
                transition: transform .15s, box-shadow .15s;
            }

            .btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 10px 22px rgba(31, 79, 216, .35);
            }

            .btn:focus-visible,
            .burger:focus-visible,
            .row-act:focus-visible {
                outline: 3px solid var(--ink);
                outline-offset: 2px;
            }

            /* Stats */
            .stats {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
                gap: 18px;
                margin-bottom: 22px;
            }

            .stat {
                background: var(--surface);
                border-radius: 16px;
                padding: 20px 22px;
                box-shadow: var(--shadow);
                border: 1px solid var(--line);
            }

            .stat span {
                color: var(--muted);
                font-weight: 600;
                font-size: .92rem;
            }

            .stat strong {
                display: block;
                margin: 8px 0 10px;
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
                font-size: 2.3rem;
                line-height: 1;
                letter-spacing: -0.03em;
            }

            .chip {
                display: inline-block;
                font-size: .8rem;
                font-weight: 600;
                padding: 3px 10px;
                border-radius: 99px;
            }

            .chip.up {
                background: var(--ok-soft);
                color: var(--ok);
            }

            .chip.down {
                background: #fdecec;
                color: var(--danger);
            }

            .stat.hl {
                background: linear-gradient(135deg, var(--accent-2), var(--accent));
                border-color: transparent;
                color: #fff;
            }

            .stat.hl span {
                color: #d9e3ff;
            }

            .stat.hl .chip {
                background: rgba(255, 255, 255, .2);
                color: #fff;
            }

            /* Two columns */
            .cols {
                display: grid;
                grid-template-columns: 1.6fr 1fr;
                gap: 18px;
                margin-bottom: 22px;
            }

            .panel {
                background: var(--surface);
                border: 1px solid var(--line);
                border-radius: 16px;
                box-shadow: var(--shadow);
                overflow: hidden;
            }

            .panel-h {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 18px 22px;
                border-bottom: 1px solid var(--line);
            }

            .panel-h h2 {
                font-family: "Bricolage Grotesque", sans-serif;
                font-size: 1.2rem;
            }

            .panel-h a,
            .panel-h small {
                color: var(--accent);
                font-weight: 600;
                text-decoration: none;
            }

            .panel-h small {
                color: var(--muted);
                font-weight: 400;
            }

            .panel-h a:hover {
                text-decoration: underline;
            }

            .bars {
                display: flex;
                align-items: flex-end;
                gap: 12px;
                height: 220px;
                padding: 26px 22px 14px;
            }

            .bar {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                align-items: center;
                gap: 8px;
                height: 100%;
            }

            .bar div {
                width: 100%;
                max-width: 38px;
                border-radius: 8px 8px 4px 4px;
                background: var(--accent-soft);
                transition: background .15s;
            }

            .bar:hover div,
            .bar.last div {
                background: linear-gradient(180deg, var(--accent-2), var(--accent));
            }

            .bar span {
                font-size: .8rem;
                color: var(--muted);
            }

            .feed {
                list-style: none;
                padding: 8px 22px 14px;
            }

            .feed li {
                display: flex;
                gap: 14px;
                padding: 12px 0;
                border-bottom: 1px solid var(--line);
            }

            .feed li:last-child {
                border: 0;
            }

            .dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: var(--accent);
                margin-top: 8px;
                flex: none;
                box-shadow: 0 0 0 4px var(--accent-soft);
            }

            .feed b {
                display: block;
                font-weight: 600;
                line-height: 1.3;
            }

            .feed small {
                color: var(--muted);
            }

            /* Table */
            .scroll {
                overflow-x: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                min-width: 620px;
            }

            th,
            td {
                text-align: left;
                padding: 14px 22px;
            }

            th {
                font-size: .8rem;
                text-transform: uppercase;
                letter-spacing: .06em;
                color: var(--muted);
                background: #f7f9fc;
            }

            td {
                border-top: 1px solid var(--line);
            }

            tbody tr:hover {
                background: #fafbfe;
            }

            td.t {
                font-weight: 600;
                max-width: 320px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .tag {
                display: inline-block;
                font-size: .8rem;
                font-weight: 600;
                padding: 3px 10px;
                border-radius: 99px;
            }

            .tag.ok {
                background: var(--ok-soft);
                color: var(--ok);
            }

            .tag.warn {
                background: var(--warn-soft);
                color: var(--warn);
            }

            .tag.file {
                background: var(--accent-soft);
                color: var(--accent);
            }

            .tag.no {
                background: #eef0f4;
                color: var(--muted);
            }

            .acts {
                display: flex;
                gap: 8px;
                justify-content: flex-end;
            }

            .row-act {
                font: inherit;
                font-size: .88rem;
                font-weight: 600;
                text-decoration: none;
                padding: 6px 12px;
                border-radius: 8px;
                border: 1px solid var(--line);
                background: var(--surface);
                color: var(--ink);
                cursor: pointer;
                transition: border-color .15s, color .15s, background .15s;
            }

            .row-act:hover {
                border-color: var(--accent);
                color: var(--accent);
            }

            .row-act.del {
                color: var(--danger);
            }

            .row-act.del:hover {
                background: var(--danger);
                border-color: var(--danger);
                color: #fff;
            }

            @media (max-width: 1000px) {
                .cols {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 860px) {
                .side {
                    transform: translateX(-100%);
                }

                .side.open {
                    transform: none;
                    box-shadow: 0 0 0 100vmax rgba(17, 26, 40, .5);
                }

                .main {
                    margin-left: 0;
                    padding: 24px 16px 56px;
                }

                .burger {
                    display: grid;
                }
            }
        </style>
    </head>

    <body>

        <aside class="side" id="side">
            <div class="logo"><i>P</i> Admin</div>

            <div class="group">Asosiy</div>
            <nav class="nav" aria-label="Asosiy menyu">
                <a href="#" class="on">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 11l9-8 9 8M5 10v10h5v-6h4v6h5V10" />
                    </svg>
                    Bosh sahifa
                </a>
                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <path d="M5 4h14v16H5zM9 9h6M9 13h6M9 17h3" />
                    </svg>
                    Postlar
                </a>
                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Yangi post
                </a>
            </nav>

            <div class="group">Boshqaruv</div>
            <nav class="nav" aria-label="Boshqaruv menyusi">
                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <circle cx="9" cy="8" r="3.5" />
                        <path
                            d="M2.5 20c.6-3.6 3.2-5.5 6.5-5.5s5.9 1.9 6.5 5.5M16 4.8a3.5 3.5 0 010 6.4M18 14.8c1.9.6 3.2 2.2 3.5 5.2" />
                    </svg>
                    Foydalanuvchilar
                </a>
                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" />
                        <path
                            d="M12 2v3M12 19v3M2 12h3M19 12h3M4.9 4.9l2.1 2.1M17 17l2.1 2.1M4.9 19.1L7 17M17 7l2.1-2.1" />
                    </svg>
                    Sozlamalar
                </a>
            </nav>

            <div class="side-foot">
                <div class="me">
                    <div class="avatar">{{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1)) }}</div>
                    <div>
                        <b>{{ auth()->user()->name }}</b>
                        <small>{{ auth()->user()->email }}</small>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="out">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 4H5v16h4M16 8l4 4-4 4M20 12H9" />
                        </svg>
                        Chiqish
                    </button>
                </form>
            </div>
        </aside>

        <main class="main">

            <header class="top">
                <div class="top-l">
                    <button class="burger" id="burger" aria-label="Menyuni ochish">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 7h16M4 12h16M4 17h16" />
                        </svg>
                    </button>
                    <div>
                        <h1>Salom, {{ \Illuminate\Support\Str::before(auth()->user()->name, ' ') }}</h1>
                        <p class="date">{{ now()->format('d.m.Y') }}, bugungi umumiy ko'rinish</p>
                    </div>
                </div>
                <a class="btn" href="#">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Post qo'shish
                </a>
            </header>

            <section class="stats" aria-label="Statistika">
                @foreach ($stats as $s)
                    <div class="stat {{ $loop->first ? 'hl' : '' }}">
                        <span>{{ $s['label'] }}</span>
                        <strong>{{ $s['value'] }}</strong>
                        <em class="chip {{ $s['up'] ? 'up' : 'down' }}"
                            style="font-style:normal">{{ $s['note'] }}</em>
                    </div>
                @endforeach
            </section>

            <div class="cols">
                <section class="panel">
                    <div class="panel-h">
                        <h2>Postlar dinamikasi</h2>
                        <small>2026-yil</small>
                    </div>
                    <div class="bars" role="img" aria-label="Oylar bo'yicha postlar grafigi">
                        @foreach ($chart as $month => $h)
                            <div class="bar {{ $loop->last ? 'last' : '' }}"
                                title="{{ $month }}: {{ $h }}">
                                <div style="height: {{ $h }}%"></div>
                                <span>{{ $month }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-h">
                        <h2>So'nggi harakatlar</h2>
                    </div>
                    <ul class="feed">
                        @foreach ($activity as $a)
                            <li>
                                <span class="dot"></span>
                                <div><b>{{ $a['text'] }}</b><small>{{ $a['time'] }}</small></div>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>

            <section class="panel">
                <div class="panel-h">
                    <h2>Oxirgi postlar</h2>
                    <a href="#">Hammasi</a>
                </div>
                <div class="scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>Sarlavha</th>
                                <th>Fayl</th>
                                <th>Holat</th>
                                <th>Sana</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $p)
                                <tr>
                                    <td class="t">{{ $p['title'] }}</td>
                                    <td><span
                                            class="tag {{ $p['file'] ? 'file' : 'no' }}">{{ $p['file'] ? 'Bor' : 'Yo\'q' }}</span>
                                    </td>
                                    <td><span
                                            class="tag {{ $p['status'] === 'Faol' ? 'ok' : 'warn' }}">{{ $p['status'] }}</span>
                                    </td>
                                    <td>{{ $p['date'] }}</td>
                                    <td>
                                        <div class="acts">
                                            <a class="row-act" href="#">Tahrirlash</a>
                                            <button type="button" class="row-act del">O'chirish</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

        </main>

        <script>
            const side = document.getElementById('side');
            document.getElementById('burger').addEventListener('click', () => side.classList.toggle('open'));
            document.addEventListener('click', (e) => {
                if (side.classList.contains('open') && !side.contains(e.target) && !e.target.closest('#burger')) {
                    side.classList.remove('open');
                }
            });
        </script>
    </body>

</html>
