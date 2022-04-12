@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row section">
       <h3 class= "center">Sobre</h3>
       <div class="divider"></div>
    </div>     
    <div class="row section">
        <div class="col s12 m6">
           <img src="{{ asset('img/anuncio_.jpg') }}" alt="" class="responsive-img">
        </div>
            <div class="col s12 m6">
            <h4>Empresa</h4>
            <blockquote>Breve apresentação da empresa.</blockquote>
            <p>texto de apresentação detalhada da empresa.</p>
        </div>
    </div>
</div>  
</div>
@endsection
