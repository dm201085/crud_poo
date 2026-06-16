<?php

namespace App\Http\Controllers;

use App\Models\Ingresso;
use Illuminate\Http\Request;

class IngressoController extends Controller
{
    public function index()
    {
        $ingressos = Ingresso::all();

        return view('ingressos.index', compact('ingressos'));
    }

    public function create()
    {
        return view('ingressos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'setor' => 'required|max:100',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        Ingresso::create([
            'setor' => $request->setor,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return redirect()->route('ingressos.index')
            ->with('success', 'Ingresso cadastrado com sucesso!');
    }

    public function show(Ingresso $ingresso)
    {
        return view('ingressos.show', compact('ingresso'));
    }

    public function edit(Ingresso $ingresso)
    {
        return view('ingressos.edit', compact('ingresso'));
    }

    public function update(Request $request, Ingresso $ingresso)
    {
        $request->validate([
            'setor' => 'required|max:100',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $ingresso->update([
            'setor' => $request->setor,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return redirect()->route('ingressos.index')
            ->with('success', 'Ingresso atualizado com sucesso!');
    }

    public function destroy(Ingresso $ingresso)
    {
        $ingresso->delete();

        return redirect()->route('ingressos.index')
            ->with('success', 'Ingresso removido com sucesso!');
    }
}