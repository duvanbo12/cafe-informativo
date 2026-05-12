<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#1a0f0a] px-4">
        <div class="w-full max-w-md bg-[#2a1a12] border border-[#6b4226] rounded-xl px-8 py-10 shadow-lg">

            {{-- Encabezado --}}
            <div class="text-center mb-8">
                <p class="text-[#c8922a] text-3xl mb-1">☕</p>
                <h1 class="text-[#e8d5b0] text-xl font-medium tracking-widest mb-2"
                    style="font-family: 'Cormorant Garamond', Georgia, serif;">
                    Área Segura
                </h1>
                <p class="text-[#9a7a5a] text-sm leading-relaxed">
                    {{ __('Por favor confirma tu contraseña antes de continuar.') }}
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                {{-- Contraseña --}}
                <div class="mb-6">
                    <label for="password"
                        class="block text-xs font-medium text-[#c8922a] tracking-widest uppercase mb-2">
                        {{ __('Contraseña') }}
                    </label>

                    <input id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="w-full px-4 py-2.5 bg-[#1a0f0a] border border-[#6b4226] rounded-lg
                               text-[#e8d5b0] placeholder-[#6b4226] text-sm
                               focus:outline-none focus:border-[#c8922a] transition-colors duration-200"
                        style="font-family: 'Cormorant Garamond', Georgia, serif;" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs" />
                </div>

                {{-- Botón --}}
                <button type="submit"
                    class="w-full py-3 bg-[#c8922a] text-[#1a0f0a] text-xs font-semibold
                           tracking-widest uppercase rounded-lg hover:bg-[#e0a830]
                           transition-colors duration-200 cursor-pointer">
                    {{ __('Confirmar') }}
                </button>

            </form>
        </div>
    </div>
</x-guest-layout>