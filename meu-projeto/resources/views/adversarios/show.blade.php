<x-app-layout>
<div class="max-w-xl mx-auto py-12 px-4">

    <div class="bg-zinc-950 border border-zinc-900 p-6 rounded-xl shadow-2xl">

        <h1 class="text-xl font-bold text-white mb-6 border-b border-zinc-900 pb-4 tracking-tight">
            Detalhes do <span class="text-red-500">Adversário</span>
        </h1>

        <div class="space-y-5">
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Nome do Clube
                </label>
                <p class="text-white text-lg font-semibold">
                    {{ $adversario->nome }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-500 mb-1">
                    Estado / Federação
                </label>
                <p class="text-white text-lg font-semibold uppercase font-mono">
                    {{ $adversario->estado }}
                </p>
            </div>
        </div>

        <div class="mt-8 pt-4 border-t border-zinc-900 flex gap-3">
            <a href="{{ route('adversarios.edit', $adversario->id) }}"
               class="bg-zinc-900 hover:bg-zinc-800 border border-zinc-800 text-amber-500 font-semibold px-4 py-2 text-sm rounded-lg transition-colors">
                Editar Registro
            </a>

            <a href="{{ route('adversarios.index') }}"
               class="bg-zinc-900 hover:bg-zinc-800 border border-zinc-800 text-zinc-400 hover:text-white font-semibold px-4 py-2 text-sm rounded-lg transition-colors">
                Voltar à Lista
            </a>
        </div>

    </div>

</div>
</x-app-layout>