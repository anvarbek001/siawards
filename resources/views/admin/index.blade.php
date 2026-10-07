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

@extends('layouts.admin')
@section('content')
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
    </header>

    <section class="stats" aria-label="Statistika">
        @foreach ($stats as $s)
            <div class="stat {{ $loop->first ? 'hl' : '' }}">
                <span>{{ $s['label'] }}</span>
                <strong>{{ $s['value'] }}</strong>
                <em class="chip {{ $s['up'] ? 'up' : 'down' }}" style="font-style:normal">{{ $s['note'] }}</em>
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
                    <div class="bar {{ $loop->last ? 'last' : '' }}" title="{{ $month }}: {{ $h }}">
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
                            <td><span class="tag {{ $p['status'] === 'Faol' ? 'ok' : 'warn' }}">{{ $p['status'] }}</span>
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
@endsection
