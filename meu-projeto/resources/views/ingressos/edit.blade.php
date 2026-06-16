<x-app-layout>

<div class="max-w-md mx-auto py-8">

    <a href="{{ route('ingressos.index') }}"
       class="text-red-500 hover:text-red-400 mb-6 inline-block font-semibold transition">
        ← Cancelar e Voltar
    </a>

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl shadow-xl">

        <h1 class="text-xl font-bold mb-6 text-white border-b border-zinc-800 pb-3">
            Editar <span class="text-amber-500">Ingresso</span>
        </h1>

        <form action="{{ route('ingressos.update', $ingresso->id) }}"
              method="POST"
              class="space-y-4">

            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">
                    Setor
                </label>

                <input type="text"
                       name="setor"
                       value="{{ $ingresso->setor }}"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded-lg p-2.5 text-white">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">
                    Preço
                </label>

                <input type="number"
                       step="0.01"
                       name="preco"
                       value="{{ $ingresso->preco }}"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded-lg p-2.5 text-white">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">
                    Quantidade
                </label>

                <input type="number"
                       name="quantidade"
                       value="{{ $ingresso->quantidade }}"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded-lg p-2.5 text-white">
            </div>

            <button type="submit"
                    class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 rounded-lg">
                Salvar Alterações
            </button>

        </form>

    </div>

</div>

</x-app-layout>