<x-app-layout>
<div class="max-w-5xl mx-auto py-12 px-4">

    <div class="flex justify-between items-center mb-8 border-b border-zinc-900 pb-5">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-white">
            Formas de <span class="text-red-500">Pagamento</span>
        </h1>

        <a href="{{ route('forma-pagamentos.create') }}"
           class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg text-sm transition-colors shadow-lg shadow-red-600/10">
            + Nova Forma
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-950/40 border border-emerald-900 text-emerald-400 p-3 rounded-lg mb-5 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-zinc-950 border border-zinc-900 rounded-xl overflow-hidden shadow-2xl">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-zinc-900 border-b border-zinc-800 text-zinc-400 text-xs font-bold uppercase tracking-wider">
                    <th class="p-4 w-20">ID</th>
                    <th class="p-4 w-52">Tipo</th>
                    <th class="p-4">Descrição</th>
                    <th class="p-4 w-32 text-center">Ações</th>
                </tr>
            </thead>

            <tbody class="text-sm text-zinc-300 divide-y divide-zinc-900">
            @forelse($formaPagamentos as $forma)
                <tr class="hover:bg-zinc-900/30 transition-colors">
                    <td class="p-4 text-zinc-500 font-mono">
                        #{{ $forma->id }}
                    </td>
                    <td class="p-4 font-semibold text-white">
                        <a href="{{ route('forma-pagamentos.show', $forma->id) }}" class="hover:text-red-400 transition-colors">
                            {{ $forma->tipo }}
                        </a>
                    </td>
                    <td class="p-4 text-zinc-400">
                        {{ $forma->descricao }}
                    </td>
                    <td class="p-4">
                        <div class="flex items-center justify-center gap-3">
                            <a href="{{ route('forma-pagamentos.edit', $forma->id) }}"
                               class="text-zinc-400 hover:text-amber-500 transition-colors" 
                               title="Editar">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>

                            <form action="{{ route('forma-pagamentos.destroy', $forma->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-zinc-400 hover:text-red-500 transition-colors"
                                        onclick="return confirm('Deseja realmente excluir esta forma de pagamento?')"
                                        title="Excluir">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-12 text-center text-zinc-600 font-medium">
                        Nenhuma forma de pagamento cadastrada até o momento.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

</div>
</x-app-layout>