@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 class= "center">Detalhes do Anuncio</h3>
        /div>     
    <div class="row section">
        <div class="col s12 m5">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/slider_1.png') }}"> 
                            <div class="caption center-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">descrição da imagem.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/slider_2.png') }}"> 
                            <div class="caption center-right">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">descrição da imagem.</h5>
                            </div>
                        </li>
                        <li>    
                            <img src="{{ asset('img/slider_3.png') }}"> 
                            <div class="caption center-left">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">descrição da imagem.</h5>
                            </div>
                        </li>
                        <li>    
                            <img src="{{ asset('img/slider_4.png') }}"> 
                            <div class="caption right-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">descrição da imagem.</h5>
                            </div>
                        <li>
                            <img src="{{ asset('img/slider_5.png') }}"> 
                            <div class="caption left-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">descrição da imagem.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
            <div class= "row center ">
                <button class="orange"onclick="sliderprev()">Anterior</button>
                <button class ="orange"onclick="slidernext()">Próximo</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>titulo do anuncio</h4>
            <blockquote>Descrição do anuncio.</blockquote>
            <p><b>Codigo:</b>1731</p>
            <p><b>Finalida:</b>Venda</p>
            <p><b>Categoria:</b>Automóvel</p>
            <p><b>Endereço:</b>Rua das baneiras, 1650, Quitanda</p>
            <p><b>Cep:</b>12.345-656</p>
            <p><b>Cidade</b>Rolandia - PR</p>
            <p><b>Valor:</b> R$ 50,00</p>
            <a href="{{ route('site.contato') }}" class="btn deep-orange darken-1">Entrar em contato,</a>
        </div>
    </div>
</div>
    
@endsection
