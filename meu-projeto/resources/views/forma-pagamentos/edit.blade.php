<x-app-layout>
<div class="max-w-md mx-auto py-12 px-4">
    
    <div class="mb-5">
        <a href="{{ route('forma-pagamentos.index') }}"
           class="text-zinc-400 hover:text-white text-sm font-semibold tracking-wide transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            Cancelar e Voltar
        </a>
    </div>

    <div class="bg-zinc-950 border border-zinc-900 p-6 rounded-xl shadow-2xl backdrop-blur-sm">
        
        <h1 class="text-xl font-bold mb-6 text-white tracking-tight">
            Editar <span class="text-red-500">Forma de Pagamento</span>
        </h1>

        @if ($errors->any())
            <div class="bg-red-950/40 border border-red-900 text-red-400 text-xs p-3 rounded-lg mb-5">
                <ul class="space-y-1">
                    @foreach ($errors->all() as $erro)
                        <li class="flex items-center gap-1.5">
                            <span class="w-1 h-1 rounded-full bg-red-500"></span>
                            {{ $erro }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('forma-pagamentos.update', $formaPagamento->id) }}"
              method="POST"
              class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">
                    Tipo de Pagamento
                </label>
                <input type="text"
                       name="tipo"
                       value="{{ old('tipo', $formaPagamento->tipo) }}"
                       required
                       class="w-full bg-zinc-900 border border-zinc-800 rounded-lg p-2.5 text-sm text-white focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">
                    Descrição / Instruções
                </label>
                <input type="text"
                       name="descricao"
                       value="{{ old('descricao', $formaPagamento->descricao) }}"
                       required
                       class="w-full bg-zinc-900 border border-zinc-800 rounded-lg p-2.5 text-sm text-white focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition">
            </div>

            <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-xs uppercase tracking-widest transition-colors shadow-lg shadow-red-600/10 mt-2">
                Salvar Alterações
            </button>
        </form>

    </div>
</div>
</x-app-layout>