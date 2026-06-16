<?php

namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    public function index()
    {
        $formaPagamentos = FormaPagamento::all();

        return view('forma-pagamentos.index', compact('formaPagamentos'));
    }

    public function create()
    {
        return view('forma-pagamentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'descricao' => 'required',
        ]);

        FormaPagamento::create($request->all());

        return redirect()
            ->route('forma-pagamentos.index')
            ->with('success', 'Forma de pagamento cadastrada!');
    }

    public function edit(FormaPagamento $formaPagamento)
    {
        return view('forma-pagamentos.edit', compact('formaPagamento'));
    }

    public function update(Request $request, FormaPagamento $formaPagamento)
    {
        $request->validate([
            'tipo' => 'required',
            'descricao' => 'required',
        ]);

        $formaPagamento->update($request->all());

        return redirect()
            ->route('forma-pagamentos.index')
            ->with('success', 'Forma de pagamento atualizada!');
    }

    public function destroy(FormaPagamento $formaPagamento)
    {
        $formaPagamento->delete();

        return redirect()
            ->route('forma-pagamentos.index')
            ->with('success', 'Forma de pagamento removida!');
    }
}