<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\routes\web;
// use App\Models\User as User;

class UserController extends Controller
{
    public function index() {
    }


    public function create()
    {
        // echo "ola {nome}";
        return view('create');
    }

    public function enter()
    {
        // echo "Massa";
        return view('enter');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
            'cpf' => 'required|string|unique:usuarios,cpf|max:14',
            'telefone' => 'required|string|max:20',
        ]);

        // Inserção no banco
        $user = User::create([
            'nome' => $validated['name'],              // mapeia name → nome
            'email' => $validated['email'],
            'senha' => bcrypt($validated['senha']),    // hash da senha
            'cpf' => $validated['cpf'],
            'telefone' => $validated['telefone'],
        ]);

        // return view('welcome');
            return redirect()->route('success');
    }

    // Página de sucesso
    public function success()
    {

        return view('success');
    }
}
