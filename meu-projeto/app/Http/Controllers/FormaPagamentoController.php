<?php

namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    /**
     * 1. EXIBIR A LISTA (index.blade.php)
     */
    public function index()
    {
        // Busca todas as formas de pagamento do banco de dados
        // IMPORTANTE: O nome '$formaPagamentos' é o mesmo que você usou no @forelse
        $formaPagamentos = FormaPagamento::all();

        // Abre a tela index.blade.php passando os dados
        return view('forma_pagamentos.index', compact('formaPagamentos'));
    }

    /**
     * 2. EXIBIR O FORMULÁRIO DE CRIAÇÃO (create.blade.php)
     */
    public function create()
    {
        // Apenas abre a tela com o formulário de cadastro
        return view('forma_pagamentos.create');
    }

    /**
     * 3. SALVAR OS DADOS NO BANCO
     */
    public function store(Request $request)
    {
        // Valida os campos para garantir que o usuário preencheu tudo
        $request->validate([
            'tipo' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
        ]);

        // Salva no banco de dados. 
        // O Eloquent trata os textos automaticamente (coloca as aspas no 'pix')
        FormaPagamento::create([
            'tipo' => $request->input('tipo'),
            'descricao' => $request->input('descricao'),
        ]);

        // Redireciona de volta para a listagem com a mensagem de sucesso
        // IMPORTANTE: Usamos 'success' em inglês para sumir com o erro 419 e ativar o alerta verde
        return redirect()->route('forma-pagamentos.index')
                         ->with('success', 'Forma de pagamento cadastrada com sucesso!');
    }

    /**
     * 4. EXIBIR DETALHES (Caso clique no link do Tipo)
     */
    public function show(FormaPagamento $formaPagamento)
    {
        // Se você não planejou uma tela de detalhes ainda, 
        // podemos apenas redirecionar para a edição para não dar erro de página em branco
        return redirect()->route('forma-pagamentos.edit', $formaPagamento->id);
    }

    /**
     * 5. EXIBIR TELA DE EDIÇÃO
     */
    public function edit($id)
    {
        $formaPagamento = FormaPagamento::findOrFail($id);
        // Retorna uma view de edição (você precisará criar o edit.blade.php futuramente se quiser editar)
        return view('forma_pagamentos.edit', compact('formaPagamento'));
    }

    /**
     * 6. ATUALIZAR OS DADOS
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
        ]);

        $formaPagamento = FormaPagamento::findOrFail($id);
        $formaPagamento->update($request->all());

        return redirect()->route('forma-pagamentos.index')
                         ->with('success', 'Forma de pagamento atualizada com sucesso!');
    }

    /**
     * 7. EXCLUIR DO BANCO (Botão da lixeira)
     */
    public function destroy($id)
    {
        $formaPagamento = FormaPagamento::findOrFail($id);
        $formaPagamento->delete();

        return redirect()->route('forma-pagamentos.index')
                         ->with('success', 'Forma de pagamento excluída com sucesso!');
    }
}