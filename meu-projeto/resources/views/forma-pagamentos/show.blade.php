<x-app-layout>

<div class="max-w-md mx-auto py-8">

    <a href="{{ route('forma-pagamentos.index') }}"
       class="text-red-500 hover:text-red-400 mb-6 inline-block font-semibold">
        ← Voltar
    </a>

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl shadow-xl">

        <h1 class="text-xl font-bold mb-6 text-white border-b border-zinc-800 pb-3">
            Detalhes da <span class="text-red-600">Forma de Pagamento</span>
        </h1>

        <div class="space-y-4">

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">
                    ID
                </label>

                <p class="text-white">
                    #{{ $formaPagamento->id }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">
                    Tipo
                </label>

                <p class="text-white">
                    {{ $formaPagamento->tipo }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">
                    Descrição
                </label>

                <p class="text-white">
                    {{ $formaPagamento->descricao }}
                </p>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">
                    Criado em
                </label>

                <p class="text-white">
                    {{ $formaPagamento->created_at->format('d/m/Y H:i') }}
                </p>
            </div>

        </div>

        <div class="mt-6">

            <a href="{{ route('forma-pagamentos.edit', $formaPagamento->id) }}"
               class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg">
                Editar
            </a>

        </div>

    </div>

</div>

</x-app-layout>











