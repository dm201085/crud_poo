<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Flamengo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <h3 class="text-lg font-bold text-gray-700 mb-6 border-b pb-2">Gerenciamento do Sistema</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    
                    <a href="{{ route('adversarios.index') }}" class="flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-4 rounded shadow transition duration-200">
                        CRUD Adversários
                    </a>

                    <a href="{{ route('ingressos.index') }}" class="flex items-center justify-center bg-black hover:bg-gray-900 text-white font-semibold py-3 px-4 rounded shadow transition duration-200">
                        CRUD Ingressos
                    </a>

                    <a href="{{ route('forma-pagamentos.index') }}" class="flex items-center justify-center bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-4 rounded shadow transition duration-200">
                        CRUD Forma de Pagamento
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>