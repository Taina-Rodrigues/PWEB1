<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return 'Aluno salvo: ' . $nome;
    }

    public function show($id)
    {
        return 'Exibindo aluno ID: ' . $id;
    }
}