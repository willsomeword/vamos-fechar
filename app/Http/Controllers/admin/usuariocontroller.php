<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class usuariocontroller extends Controller
{
    public function login(Request $request) {
        $dados = $request->all();
        if (Auth::attempt(['email' => $dados ['email'], 'password' => $dados ['password']])){
            $request->session()->flash('mensagem', 
            ['msg' =>'Login efetuado com sucesso!', 'class'=>'orange black-text']);
            return redirect()->route('admin.home');
        }

            $request->session()->flash('mensagem', 
            ['msg' =>'Erro: dados de login incorretos!', 'class'=>'orange black-text']);
            return redirect()->route('admin.login');
            
    } 

    public function logout(Request $request)
{
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flash('mensagem', 
        ['msg' =>'Sessao encerrada com sucesso!', 'class'=>'orange black-text']);
        return redirect()->route('admin.login');
        
    }
    public function index()
    {
        $usuarios = User::all()->sortBy('name');
        return view('admin.usuarios.index', compact('usuarios'));
    }
    public function cadastrar()
    { 
        return view('admin.usuarios.cadastrar');
    }
    public function salvar(Request $request)
    {
        $dados = $request->all();
    
        $usuario = new user();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password =  Hash::make($dados['password']);
        $usuario->save();

        $request->session()->flash('mensagem', 
        ['msg' =>'Usuario cadastrado com sucesso!', 'class'=>'orange black-text']);
        return redirect()->route('admin.usuarios');
    }

public function Alterar($id)
{
    $usuario = User::find($id);
    return view('admin.usuarios.alterar', compact('usuario'));
}
public function atualizar(Request $request, $id)
{
    $dados = $request->all();
    if (isset($dados['password']) && strlen($dados['password']) > 8)
        $dados['password'] = Hash::make($dados['password']);
    else
        unset($dados['password']);

    $usuario = User::find($id);
    $usuario->update($dados);
    
    $usuario->save();

    $request->session()->flash('mensagem', 
    ['msg' =>'Usuario atualizado com sucesso!', 'class'=>'orange black-text']);
    return redirect()->route('admin.usuarios');
}

public function remover(Request $request, $id)
{
   
    User::find($id)-> delete();
    
    $request->session()->flash('mensagem', 
       ['msg' =>'Usuario removido com sucesso!', 'class'=>'orange black-text']);
    return redirect()->route('admin.usuarios');
}
}