<!DOCTYPE html>
<html lang="uz">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kirish</title>
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
                --accent-soft: #e3eaff;
                --danger: #c0262d;
                --danger-soft: #fdecec;
            }

            * {
                box-sizing: border-box;
                margin: 0;
            }

            body {
                min-height: 100vh;
                display: grid;
                place-items: center;
                padding: 24px 16px;
                background: var(--bg);
                color: var(--ink);
                font-family: "Source Sans 3", system-ui, sans-serif;
                line-height: 1.55;
            }

            .box {
                width: 100%;
                max-width: 420px;
            }

            .brand {
                width: 48px;
                height: 48px;
                border-radius: 12px;
                background: var(--accent);
                color: #fff;
                display: grid;
                place-items: center;
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
                font-size: 1.5rem;
                margin-bottom: 22px;
            }

            h1 {
                font-family: "Bricolage Grotesque", sans-serif;
                font-weight: 800;
                font-size: clamp(2.2rem, 7vw, 2.8rem);
                line-height: 1;
                letter-spacing: -0.03em;
            }

            .sub {
                color: var(--muted);
                margin: 10px 0 26px;
            }

            .form {
                background: var(--surface);
                border: 1px solid var(--line);
                border-radius: 14px;
                padding: 26px;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .field {
                display: flex;
                flex-direction: column;
                gap: 7px;
            }

            label {
                font-weight: 600;
            }

            input[type="email"],
            input[type="password"],
            input[type="text"] {
                width: 100%;
                font: inherit;
                color: var(--ink);
                background: #fff;
                border: 1px solid var(--line);
                border-radius: 8px;
                padding: 11px 14px;
                transition: border-color .15s, box-shadow .15s;
            }

            input:focus {
                outline: none;
                border-color: var(--accent);
                box-shadow: 0 0 0 3px var(--accent-soft);
            }

            .invalid {
                border-color: var(--danger) !important;
            }

            .error {
                color: var(--danger);
                font-size: .92rem;
            }

            .pass {
                position: relative;
            }

            .pass input {
                padding-right: 76px;
            }

            .toggle {
                position: absolute;
                right: 6px;
                top: 50%;
                transform: translateY(-50%);
                font: inherit;
                font-size: .88rem;
                font-weight: 600;
                color: var(--accent);
                background: none;
                border: 0;
                border-radius: 6px;
                padding: 6px 10px;
                cursor: pointer;
            }

            .toggle:hover {
                background: var(--accent-soft);
            }

            .row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 12px;
                flex-wrap: wrap;
            }

            .check {
                display: flex;
                align-items: center;
                gap: 8px;
                font-weight: 400;
                color: var(--muted);
                cursor: pointer;
            }

            .check input {
                width: 17px;
                height: 17px;
                accent-color: var(--accent);
            }

            .link {
                color: var(--accent);
                font-weight: 600;
                text-decoration: none;
                font-size: .95rem;
            }

            .link:hover {
                text-decoration: underline;
            }

            .alert {
                background: var(--danger-soft);
                border: 1px solid #f3c2c4;
                color: var(--danger);
                border-radius: 8px;
                padding: 12px 14px;
            }

            .btn {
                font: inherit;
                font-weight: 600;
                width: 100%;
                background: var(--accent);
                color: #fff;
                border: 0;
                border-radius: 8px;
                padding: 12px 24px;
                cursor: pointer;
                transition: background .15s;
            }

            .btn:hover {
                background: #173ca8;
            }

            .btn:focus-visible,
            .toggle:focus-visible,
            .link:focus-visible {
                outline: 3px solid var(--ink);
                outline-offset: 2px;
            }

            .foot {
                text-align: center;
                color: var(--muted);
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <main class="box">
            <div class="brand" aria-hidden="true">P</div>
            <h1>Kirish</h1>
            <p class="sub">Hisobingizga kirish uchun ma'lumotlarni kiriting.</p>

            <form class="form" action="{{ route('admin.login') }}" method="POST" novalidate>
                @csrf

                @if (session('status'))
                    <div class="alert" role="status">{{ session('status') }}</div>
                @endif

                @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
                    <div class="alert" role="alert">{{ $errors->first() }}</div>
                @endif

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="{{ $errors->has('email') ? 'invalid' : '' }}" autocomplete="email" required autofocus>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Parol</label>
                    <div class="pass">
                        <input type="password" id="password" name="password"
                            class="{{ $errors->has('password') ? 'invalid' : '' }}" autocomplete="current-password"
                            required>
                        <button type="button" class="toggle" id="toggle"
                            aria-label="Parolni ko'rsatish">Ko'rsat</button>
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <label class="check">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Eslab qol
                    </label>
                    @if (Route::has('password.request'))
                        <a class="link" href="{{ route('password.request') }}">Parolni unutdingizmi?</a>
                    @endif
                </div>

                <button type="submit" class="btn">Kirish</button>
            </form>

            @if (Route::has('register'))
                <p class="foot">Hisobingiz yo'qmi? <a class="link" href="{{ route('register') }}">Ro'yxatdan
                        o'tish</a></p>
            @endif

        </main>

        <script>
            const pass = document.getElementById('password');
            const toggle = document.getElementById('toggle');
            toggle.addEventListener('click', () => {
                const show = pass.type === 'password';
                pass.type = show ? 'text' : 'password';
                toggle.textContent = show ? 'Yashir' : "Ko'rsat";
                toggle.setAttribute('aria-label', show ? 'Parolni yashirish' : "Parolni ko'rsatish");
            });
        </script>
    </body>

</html>
