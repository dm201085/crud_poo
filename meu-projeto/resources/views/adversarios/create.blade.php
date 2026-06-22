cp .env.example .env
php artisan key:generate<x-app-layout>
<div class="max-w-md mx-auto py-12 px-4">
    
    <div class="mb-5">
        <a href="{{ route('adversarios.index') }}"
           class="text-red-500 hover:text-red-400 text-sm font-semibold tracking-wide transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Voltar ao Painel
        </a>
    </div>

    <div class="bg-zinc-950 border border-zinc-900 p-6 rounded-xl shadow-2xl backdrop-blur-sm">
        
        <h1 class="text-xl font-bold mb-6 text-white tracking-tight">
            Cadastrar <span class="text-red-500">Adversário</span>
        </h1>

        @if ($errors->any())
            <div class="bg-red-950/40 border border-red-900 text-red-400 text-xs p-3 rounded-lg mb-5">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $erro)
                        <li class="flex items-center gap-1.5">
                            <span class="w-1 h-1 rounded-full bg-red-500"></span>
                            {{ $erro }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('adversarios.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">
                    Nome do Clube
                </label>
                <input type="text"
                       name="nome"
                       required
                       placeholder="Ex: Vasco da Gama"
                       class="w-full bg-zinc-900 border border-zinc-800 rounded-lg p-2.5 text-sm text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">
                    Estado (UF)
                </label>
                <input type="text"
                       name="estado"
                       maxlength="2"
                       required
                       placeholder="Ex: RJ"
                       class="w-full bg-zinc-900 border border-zinc-800 rounded-lg p-2.5 text-sm text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition uppercase">
            </div>

            <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-widest transition-colors shadow-lg shadow-red-600/10 mt-2">
                + Salvar Adversário
            </button>
        </form>

    </div>
</div>
</x-app-layout>