<nav>
            <div class="nav-wrapper orange">
                 <div class="container">
                    <a href="{{ asset('site.home') }}" class="brand-logo">Vamosfechar</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href= "{{ route('site.home') }}">Inicio</a></li>
                        <li><a href="{{ route('site.sobre') }}">sobre</a></li>
                        <li><a href="{{ route('site.contato') }}">contato</a></li>
                   </ul>
                 </div> 
             </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
              <li><a href= "{{ route('site.home') }}">Inicio</a></li>
              <li><a href="{{ route('site.sobre') }}">sobre</a></li>
              <li><a href="{{ route('site.contato') }}">contato</a></li>
            
        </ul>
        