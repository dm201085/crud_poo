<x-app-layout>

<div class="max-w-5xl mx-auto py-8">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">
            Formas de <span class="text-red-600">Pagamento</span>
        </h1>

        <a href="{{ route('forma-pagamentos.create') }}"
           class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
            Nova Forma
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
                <tr class="bg-zinc-900">
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Tipo</th>
                    <th class="p-4 text-left">Descrição</th>
                    <th class="p-4 text-center">Ações</th>
                </tr>
            </thead>

            <tbody>

            @forelse($formaPagamentos as $forma)

                <tr class="border-t border-zinc-800">

                    <td class="p-4">#{{ $forma->id }}</td>

                    <td class="p-4">{{ $forma->tipo }}</td>

                    <td class="p-4">{{ $forma->descricao }}</td>

                    <td class="p-4 text-center">

                        <a href="{{ route('forma-pagamentos.edit', $forma->id) }}"
                           class="text-yellow-500 mr-3">
                            Editar
                        </a>

                        <form action="{{ route('forma-pagamentos.destroy', $forma->id) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-500"
                                    onclick="return confirm('Deseja excluir?')">
                                Excluir
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center p-6">
                        Nenhuma forma cadastrada.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>