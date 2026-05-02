<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Lato:wght@300;400&display=swap');

        .tg-card {
            background: rgba(253,246,236,0.10);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(201,168,124,0.3);
            border-radius: 8px;
            padding: 2.2rem 2.6rem;
            box-shadow: 0 8px 40px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.10);
            animation: fadeUp 0.5s ease both;
            font-family: 'Lato', sans-serif;
        }
        @keyframes fadeUp {
            from { opacity:0; transform:translateY(18px); }
            to   { opacity:1; transform:translateY(0); }
        }
        .tg-logo { text-align:center; margin-bottom:1.4rem; }
        .tg-logo h1 {
            font-family:'Cormorant Garamond',serif;
            font-size:1.8rem; font-weight:600;
            color:#f0d9bc; margin:0; letter-spacing:0.04em;
        }
        .tg-logo p {
            font-family:'Cormorant Garamond',serif;
            font-style:italic; font-size:0.8rem;
            color:#c9a87c; margin:0.2rem 0 0; letter-spacing:0.1em;
        }
        .tg-divider { display:flex; align-items:center; gap:10px; margin-bottom:1.4rem; }
        .tg-divider span { flex:1; height:0.5px; background:rgba(201,168,124,0.35); }
        .tg-divider em {
            font-family:'Cormorant Garamond',serif;
            font-style:italic; font-size:0.78rem;
            color:#c9a87c; letter-spacing:0.1em; white-space:nowrap;
        }
        .tg-description {
            font-size:0.82rem; color:rgba(201,168,124,0.85);
            text-align:center; line-height:1.6;
            margin-bottom:1.4rem; font-family:'Lato',sans-serif;
        }
        .tg-field { margin-bottom:1rem; position:relative; }
        .tg-label {
            display:block; font-size:0.68rem; font-weight:400;
            letter-spacing:0.12em; text-transform:uppercase;
            color:#e0c9a8; margin-bottom:0.35rem;
        }
        .tg-icon {
            position:absolute; left:0.75rem; top:2.05rem;
            width:15px; height:15px; opacity:0.5; pointer-events:none;
            color:#c9a87c; transition:opacity 0.2s;
        }
        .tg-field:focus-within .tg-icon { opacity:0.9; }
        .tg-input {
            width:100%; box-sizing:border-box;
            padding: 0.6rem 0.85rem 0.6rem 2.4rem;
            border: 1px solid rgba(201,168,124,0.35); border-radius:3px;
            background: rgba(255,250,244,0.07);
            font-size:0.88rem; color:#f5e8d4;
            font-family:'Lato',sans-serif;
            outline:none; transition:background 0.25s, transform 0.2s, border-color 0.25s;
        }
        .tg-input::placeholder { color:rgba(201,168,124,0.4); }
        .tg-input:hover {
            border-color:rgba(201,168,124,0.7);
            background:rgba(255,250,244,0.11);
            transform:translateY(-1px);
        }
        .tg-input:focus {
            outline:none;
            border-color:rgba(201,168,124,0.9);
            background:rgba(255,250,244,0.14);
            transform:translateY(-2px);
            box-shadow:0 0 0 2px rgba(201,168,124,0.25);
        }
        .tg-btn {
            width:100%; padding:0.78rem;
            background:rgba(139,94,60,0.8);
            border:1px solid rgba(201,168,124,0.45);
            color:#f5e8d4;
            font-family:'Cormorant Garamond',serif;
            font-size:1.05rem; font-weight:500;
            letter-spacing:0.18em; cursor:pointer;
            border-radius:3px; transition:background 0.2s, transform 0.2s;
            margin-top:0.5rem;
        }
        .tg-btn:hover {
            background:rgba(139,94,60,1);
            transform:scale(1.03);
        }
        .tg-btn:active { transform:scale(0.99); }
        .tg-link {
            font-size:0.78rem; color:#c9a87c;
            text-decoration:none; letter-spacing:0.05em;
            border-bottom:1px solid transparent; transition:border-color 0.2s;
        }
        .tg-link:hover { border-bottom-color:#c9a87c; }
    </style>

    <div class="tg-card">

        <div class="tg-logo">
            <h1>Tinto Galeras</h1>
            <p>Recupera tu acceso</p>
        </div>

        <div class="tg-divider">
            <span></span><em>restablecer contraseña</em><span></span>
        </div>

        <p class="tg-description">
            Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
        </p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="tg-field">
                <label for="email" class="tg-label">Correo electrónico</label>
                <svg class="tg-icon" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <input id="email" class="tg-input" type="email" name="email"
                    value="{{ old('email') }}" required autofocus
                    placeholder="usuario@ejemplo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <button type="submit" class="tg-btn">
                Enviar enlace
            </button>

            <div class="text-center mt-4">
                <a class="tg-link" href="{{ route('login') }}">
                    Volver al inicio de sesión
                </a>
            </div>
        </form>
    </div>

</x-guest-layout>