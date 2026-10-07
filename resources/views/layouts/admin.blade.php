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
        @vite(['resources/css/admin.css'])
    </head>

    <body>

        <aside class="side" id="side">
            <div class="logo"><i>P</i> Admin</div>

            <div class="group">Asosiy</div>
            <nav class="nav" aria-label="Asosiy menyu">
                <a href="{{ route('admin.index') }}" class="{{ request()->routeIs('admin.index') ? 'on' : '' }}">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 11l9-8 9 8M5 10v10h5v-6h4v6h5V10" />
                    </svg>
                    Bosh sahifa
                </a>
                <a href="{{ route('about.event') }}" class="{{ request()->routeIs('about.event') ? 'on' : '' }}">
                    <svg viewBox="0 0 24 24">
                        <path d="M5 4h14v16H5zM9 9h6M9 13h6M9 17h3" />
                    </svg>
                    Tadbir haqida
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
            @yield('content')
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
