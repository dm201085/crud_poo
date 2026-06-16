<x-app-layout>
<div class="max-w-md mx-auto py-12 px-4">
    
    <div class="mb-5">
        <a href="{{ route('adversarios.index') }}"
           class="text-red-600 hover:text-red-500 text-sm font-semibold tracking-wide transition flex items-center gap-1">
            ← Voltar ao Painel
        </a>
    </div>

    <div class="bg-zinc-950/80 border border-zinc-900 p-6 rounded-xl shadow-2xl backdrop-blur-sm">
        
        <h1 class="text-xl font-bold mb-6 text-white tracking-tight">
            Cadastrar <span class="text-red-600">adversário</span>
        </h1>

        @if ($errors->any())
            <div class="bg-zinc-900 border-l-2 border-red-600 text-red-400 text-xs p-3 rounded mb-4">
                <ul class="space-y-0.5">
                    @foreach ($errors->all() as $erro)
                        <li>• {{ $erro }}</li>
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
                       placeholder="Ex: Flamengo"
                       class="w-full bg-zinc-900/50 border border-zinc-800 rounded-lg p-2.5 text-sm text-white placeholder-zinc-600 focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition">
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
                       class="w-full bg-zinc-900/50 border border-zinc-800 rounded-lg p-2.5 text-sm text-white placeholder-zinc-600 focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition uppercase">
            </div>

            <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-widest transition shadow-lg shadow-red-600/10 mt-2">
                + Salvar Adversário
            </button>
        </form>

    </div>
</div>
</x-app-layout>