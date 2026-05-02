<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Lato:wght@300;400&display=swap');

        body {
            background: #1a0f07 !important;
            background-image:
                radial-gradient(ellipse at 20% 30%, rgba(139,94,60,0.45) 0%, transparent 55%),
                radial-gradient(ellipse at 80% 70%, rgba(44,26,14,0.6) 0%, transparent 55%) !important;
        }

        .tg-card {
            background: rgba(253, 246, 236, 0.12);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(201, 168, 124, 0.35);
            border-radius: 8px;
            padding: 2.5rem 2.8rem;
            box-shadow: 0 8px 40px rgba(0,0,0,0.45), inset 0 1px 0 rgba(255,255,255,0.12);
            font-family: 'Lato', sans-serif;
            animation: fadeUp 0.5s ease both;
            max-width: 450px;
            margin: 2rem auto;
        }

        @keyframes fadeUp {
            from { opacity:0; transform:translateY(18px); }
            to   { opacity:1; transform:translateY(0); }
        }

        .tg-logo { text-align: center; margin-bottom: 1.8rem; }
        .tg-logo h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem; font-weight: 600;
            color: #f0d9bc; margin: 0; letter-spacing: 0.04em;
        }
        .tg-logo p {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic; font-size: 0.9rem;
            color: #c9a87c; margin: 0.2rem 0 0; letter-spacing: 0.1em;
        }

        .tg-divider { display: flex; align-items: center; gap: 10px; margin-bottom: 1.6rem; }
        .tg-divider span { flex: 1; height: 0.5px; background: rgba(201,168,124,0.4); }
        .tg-divider em {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic; font-size: 0.8rem;
            color: #c9a87c; letter-spacing: 0.1em; white-space: nowrap;
        }

        .tg-field { margin-bottom: 1.2rem; position: relative; }
        .tg-label {
            display: block; font-size: 0.72rem; font-weight: 400;
            letter-spacing: 0.12em; text-transform: uppercase;
            color: #e0c9a8; margin-bottom: 0.4rem;
        }

        .tg-icon {
            position: absolute; left: 0.75rem; top: 2.15rem;
            width: 16px; height: 16px; opacity: 0.5; pointer-events: none;
            color: #c9a87c; transition: opacity 0.2s;
        }
        .tg-field:focus-within .tg-icon { opacity: 0.9; }

        .tg-input {
            width: 100%; box-sizing: border-box;
            padding: 0.65rem 0.85rem 0.65rem 2.4rem;
            border: 1px solid rgba(201,168,124,0.4); border-radius: 3px;
            background: rgba(255,250,244,0.08);
            font-size: 0.95rem; color: #f5e8d4;
            font-family: 'Lato', sans-serif;
            outline: none; transition: all 0.25s;
        }

        .tg-input::placeholder { color: rgba(201,168,124,0.4); }
        .tg-input:hover {
            border-color: rgba(201,168,124,0.7);
            background: rgba(255,250,244,0.11);
        }
        .tg-input:focus {
            border-color: rgba(201,168,124,0.9);
            background: rgba(255,250,244,0.14);
            box-shadow: 0 0 0 3px rgba(201,168,124,0.15);
        }

        .tg-btn {
            width: 100%; padding: 0.85rem;
            background: rgba(139,94,60,0.8);
            border: 1px solid rgba(201,168,124,0.5);
            color: #f5e8d4;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem; font-weight: 500;
            letter-spacing: 0.2em; cursor: pointer;
            border-radius: 3px; transition: all 0.3s;
            text-transform: uppercase;
        }
        .tg-btn:hover {
            background: rgba(139,94,60,1);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .tg-link {
            font-size: 0.8rem; color: #c9a87c;
            text-decoration: none; letter-spacing: 0.05em;
            transition: color 0.2s;
        }
        .tg-link:hover { color: #f0d9bc; text-decoration: underline; }
        
        .tg-register-box {
            margin-top: 2rem;
            padding-top: 1.5rem;
            text-align: center;
        }
    </style>

    <div class="tg-card">
        <div class="tg-logo">
            <h1>Tinto Galeras</h1>
            <p>Pasto, Nariño — Desde el corazón del café</p>
        </div>

        <div class="tg-divider">
            <span></span><em>acceso privado</em><span></span>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="tg-field">
                <label for="email" class="tg-label">Correo electrónico</label>
                <svg class="tg-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <input id="email" class="tg-input" type="email" name="email"
                    value="{{ old('email') }}" required autofocus autocomplete="username"
                    placeholder="usuario@ejemplo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Contraseña --}}
            <div class="tg-field">
                <label for="password" class="tg-label">Contraseña</label>
                <svg class="tg-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <input id="password" class="tg-input" type="password" name="password"
                    required autocomplete="current-password" placeholder="••••••••" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Recordarme y Olvido --}}
            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox"
                        style="accent-color: #c9a87c;"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember">
                    <span class="ms-2 text-sm" style="color:#c9a87c;">Recordarme</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="tg-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            <button type="submit" class="tg-btn">Ingresar</button>

            {{-- Sección de Registro --}}
            <div class="tg-register-box">
                <div class="tg-divider">
                    <span></span><em>¿No tienes cuenta?</em><span></span>
                </div>
                
                @if (Route::has('register'))
                    <a class="tg-link" href="{{ route('register') }}" style="font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em;">
                        Crear una cuenta nueva
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>