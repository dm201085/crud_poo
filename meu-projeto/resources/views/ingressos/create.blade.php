<x-app-layout>

<div class="max-w-md mx-auto py-8">

    <a href="{{ route('ingressos.index') }}"
       class="text-red-500 hover:text-red-400 mb-6 inline-block font-semibold">
        ← Voltar
    </a>

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl">

        <h1 class="text-xl font-bold mb-6 text-white">
            Novo Ingresso
        </h1>

        @if ($errors->any())
            <div class="bg-red-900 text-white p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ingressos.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block mb-2 text-white">
                    Setor
                </label>

                <input type="text"
                       name="setor"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded p-2 text-white">
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-white">
                    Preço
                </label>

                <input type="number"
                       step="0.01"
                       name="preco"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded p-2 text-white">
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-white">
                    Quantidade
                </label>

                <input type="number"
                       name="quantidade"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded p-2 text-white">
            </div>

            <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded">
                Salvar
            </button>

        </form>

    </div>

</div>

</x-app-layout>