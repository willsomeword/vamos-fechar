@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="center">Cadastrar Novo Usuario</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper amber ">
                    <div class="col s12">
                        <a href="{{ route('admin.home')}}" class="breadcrumb">Inicio </a>
                        <a href="{{ route('admin.usuarios')}}" class="breadcrumb">Listagem de Usuarios </a>
                        <a class="breadcrumb">cadastrar novo usuario</a>
                    </div>
                </div>
            </nav>
      </div>
  </nav>
        </div>
        <div class="row">
            <form action="{{ route('admin.usuarios')}}" method="post">
                @csrf
                @include('admin.usuarios._form')
                <button class="btn orange accent-2">Cadastrar</button>    
            </form>        
        </div>
    </div>

@endsection

