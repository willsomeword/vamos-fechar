@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="center">Alterar dados do Usuario</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper amber ">
                    <div class="col s12">
                        <a href="{{ route('admin.home')}}" class="breadcrumb">Inicio </a>
                        <a href="{{ route('admin.usuarios')}}" class="breadcrumb">Listagem de usuario </a>
                        <a class="breadcrumb">Alterar dados do usuarios</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <form action="{{ route('admin.usuarios.atualizar', $usuario->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.usuarios._form')
                <button class="btn orange accent-2">Atualizar</button>    
            </form>        
        </div>
    </div>

@endsection