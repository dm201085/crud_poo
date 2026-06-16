<?php

namespace App\Http\Controllers;

use App\Models\Adversario;
use Illuminate\Http\Request;

class AdversarioController extends Controller
{
    public function index()
    {
        $adversarios = Adversario::all();
        return view('adversarios.index', compact('adversarios'));
    }

    public function create()
    {
        return view('adversarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'estado' => 'required|max:50',
        ]);

        Adversario::create([
            'nome' => $request->nome,
            'estado' => $request->estado,
        ]);

        return redirect()->route('adversarios.index')
            ->with('success', 'Adversário cadastrado com sucesso!');
    }

    public function show(Adversario $adversario)
    {
        return view('adversarios.show', compact('adversario'));
    }

    public function edit(Adversario $adversario)
    {
        return view('adversarios.edit', compact('adversario'));
    }

    public function update(Request $request, Adversario $adversario)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'estado' => 'required|max:50',
        ]);

        $adversario->update([
            'nome' => $request->nome,
            'estado' => $request->estado,
        ]);

        return redirect()->route('adversarios.index')
            ->with('success', 'Adversário atualizado com sucesso!');
    }

    public function destroy(Adversario $adversario)
    {
        $adversario->delete();

        return redirect()->route('adversarios.index')
            ->with('success', 'Adversário removido com sucesso!');
    }
}