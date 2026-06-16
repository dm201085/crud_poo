<x-app-layout>

<div class="max-w-5xl mx-auto py-8">

    <div class="flex justify-between items-center mb-8 border-b border-zinc-800 pb-4">

        <h1 class="text-2xl md:text-3xl font-bold tracking-tight">
            Gerenciar <span class="text-red-600">Ingressos</span>
        </h1>

        <a href="{{ route('ingressos.create') }}"
           class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">
            Novo Ingresso
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-900 text-green-300 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-zinc-950 border border-zinc-800 rounded-xl overflow-hidden">

        <table class="w-full">

            <thead>
                <tr class="bg-zinc-900 border-b border-zinc-800">
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Setor</th>
                    <th class="p-4 text-left">Preço</th>
                    <th class="p-4 text-left">Quantidade</th>
                    <th class="p-4 text-center">Ações</th>
                </tr>
            </thead>

            <tbody>

            @forelse($ingressos as $ingresso)

                <tr class="border-b border-zinc-800 hover:bg-zinc-900">

                    <td class="p-4">
                        #{{ $ingresso->id }}
                    </td>

                    <td class="p-4">
                        {{ $ingresso->setor }}
                    </td>

                    <td class="p-4">
                        R$ {{ number_format($ingresso->preco, 2, ',', '.') }}
                    </td>

                    <td class="p-4">
                        {{ $ingresso->quantidade }}
                    </td>

                    <td class="p-4 text-center">

                        <a href="{{ route('ingressos.edit', $ingresso->id) }}"
                           class="text-amber-500 mr-3">
                            ✏️
                        </a>

                        <form action="{{ route('ingressos.destroy', $ingresso->id) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-500"
                                    onclick="return confirm('Deseja excluir este ingresso?')">
                                🗑️
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="5" class="p-8 text-center text-gray-500">
                        Nenhum ingresso cadastrado.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>