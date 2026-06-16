<x-app-layout>

<div class="max-w-2xl mx-auto mt-8">

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl shadow-xl">

        <h1 class="text-2xl font-bold text-white mb-6 border-b border-zinc-800 pb-3">
            Detalhes do <span class="text-red-600">Adversário</span>
        </h1>

        <div class="space-y-4">

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400">
                    Nome do Clube
                </label>

                <p class="text-white text-lg">
                    {{ $adversario->nome }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400">
                    Estado
                </label>

                <p class="text-white text-lg">
                    {{ $adversario->estado }}
                </p>
            </div>

        </div>

        <div class="mt-6 flex gap-3">

            <a href="{{ route('adversarios.edit', $adversario->id) }}"
               class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg">
                Editar
            </a>

            <a href="{{ route('adversarios.index') }}"
               class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded-lg">
                Voltar
            </a>

        </div>

    </div>

</div>

</x-app-layout>