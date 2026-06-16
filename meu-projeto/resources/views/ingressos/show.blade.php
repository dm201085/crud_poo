<x-app-layout>

<div class="max-w-md mx-auto py-8">

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl">

        <h1 class="text-xl font-bold mb-6 text-white border-b border-zinc-800 pb-3">
            Detalhes do <span class="text-red-600">Ingresso</span>
        </h1>

        <div class="space-y-4">

            <p>
                <strong>Setor:</strong>
                {{ $ingresso->setor }}
            </p>

            <p>
                <strong>Preço:</strong>
                R$ {{ number_format($ingresso->preco, 2, ',', '.') }}
            </p>

            <p>
                <strong>Quantidade:</strong>
                {{ $ingresso->quantidade }}
            </p>

        </div>

        <div class="mt-6">
            <a href="{{ route('ingressos.index') }}"
               class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded-lg">
                Voltar
            </a>
        </div>

    </div>

</div>

</x-app-layout>