<x-app-layout>
<div class="max-w-xl mx-auto py-12 px-4">

    <div class="mb-5">
        <a href="{{ route('ingressos.index') }}"
           class="text-zinc-400 hover:text-white text-sm font-semibold tracking-wide transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Voltar à Lista
        </a>
    </div>

    <div class="bg-zinc-950 border border-zinc-900 p-6 rounded-xl shadow-2xl">

        <h1 class="text-xl font-bold text-white mb-6 border-b border-zinc-900 pb-4 tracking-tight">
            Detalhes do <span class="text-red-500">Ingresso</span>
        </h1>

        <div class="space-y-5">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Código (ID)
                </label>
                <p class="text-zinc-400 font-mono text-base">
                    #{{ $ingresso->id }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Setor Escolhido
                </label>
                <p class="text-white text-lg font-semibold">
                    {{ $ingresso->setor }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Valor Unitário
                </label>
                <p class="text-emerald-400 text-xl font-bold">
                    R$ {{ number_format($ingresso->preco, 2, ',', '.') }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Quantidade em Estoque
                </label>
                <p class="text-white text-base font-mono">
                    {{ $ingresso->quantidade }} unidades disponíveis
                </p>
            </div>
        </div>

        <div class="mt-8 pt-4 border-t border-zinc-900 flex gap-3">
            <a href="{{ route('ingressos.edit', $ingresso->id) }}"
               class="bg-zinc-900 hover:bg-zinc-800 border border-zinc-800 text-amber-500 font-semibold px-4 py-2 text-sm rounded-lg transition-colors flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                Editar Registro
            </a>
        </div>

    </div>

</div>
</x-app-layout>