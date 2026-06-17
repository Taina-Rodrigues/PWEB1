<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = ['Programação Web I', 'Banco de Dados', 'Engenharia de Software'];
        return view('disciplinas.index', ['disciplinas' => $disciplinas]);
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return 'Disciplina cadastrada: ' . $nome;
    }

    public function show($id)
    {
        return 'Visualizando disciplina ID: ' . $id;
    }
}