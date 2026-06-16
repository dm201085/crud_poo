<x-app-layout>

<div class="max-w-md mx-auto py-8">

    <div class="bg-zinc-950 border border-zinc-800 p-6 rounded-xl">

        <h1 class="text-xl font-bold mb-6">
            Nova Forma de Pagamento
        </h1>

        <form action="{{ route('forma-pagamentos.store') }}"
              method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 text-white">
                    Tipo
                </label>

                <input type="text"
                       name="tipo"
                       required
                       class="w-full bg-zinc-900 border border-zinc-700 rounded p-2 text-white">

            </div>

            <div class="mb-4">

                <label class="block mb-2 text-white">
                    Descrição
                </label>

                <input type="text"
                       name="descricao"
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