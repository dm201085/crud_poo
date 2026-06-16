<x-app-layout>

<div class="max-w-4xl mx-auto py-8">

    <div class="flex justify-between items-center mb-8 border-b border-zinc-800 pb-4">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight">
            Gerenciar <span class="text-red-600">Adversários</span>
        </h1>

        <a href="{{ route('adversarios.create') }}"
           class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition">
            Novo Adversário
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-900 text-green-300 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-zinc-950 border border-zinc-800 rounded-xl overflow-hidden shadow-xl">

        <table class="w-full text-left">

            <thead>
                <tr class="bg-zinc-900 border-b border-zinc-800">
                    <th class="p-4">ID</th>
                    <th class="p-4">Nome do Clube</th>
                    <th class="p-4">Estado</th>
                    <th class="p-4 text-center">Ações</th>
                </tr>
            </thead>

            <tbody>

            @forelse($adversarios as $adversario)

                <tr class="hover:bg-zinc-900/40">

                    <td class="p-4">
                        #{{ $adversario->id }}
                    </td>

                    <td class="p-4 font-semibold">
                        {{ $adversario->nome }}
                    </td>

                    <td class="p-4 uppercase">
                        {{ $adversario->estado }}
                    </td>

                    <td class="p-4 text-center">

                        <a href="{{ route('adversarios.edit', $adversario->id) }}"
                           class="text-yellow-500 mr-3">
                            ✏️
                        </a>

                        <form action="{{ route('adversarios.destroy', $adversario->id) }}"
                              method="POST"
                              style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-500"
                                    onclick="return confirm('Deseja excluir {{ $adversario->nome }}?')">
                                🗑️
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="p-8 text-center text-gray-500">
                        Nenhum adversário cadastrado ainda.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>