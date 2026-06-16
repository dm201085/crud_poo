<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Flamengo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-6 shadow">

                <h3>Gerenciamento</h3>

                <br>

                <a href="{{ route('adversarios.index') }}">
                    CRUD Adversários
                </a>

                <br><br>

                <a href="{{ route('ingressos.index') }}">
                    CRUD Ingressos
                </a>

                <br><br>

                <a href="{{ route('forma-pagamentos.index') }}">
                    CRUD Forma de Pagamento
                </a>

            </div>

        </div>
    </div>
</x-app-layout>