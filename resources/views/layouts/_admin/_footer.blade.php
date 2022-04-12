
        <footer class="page-footer orange">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">vamosfechar</h5>
                <p class="grey-text text-lighten-3" >Modulo administrativo do site de anuncio</p>
            </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{{ route('site.home') }}"target="_blank">site</a></li>
                    @if(Auth::guest())
                    <li><a class="grey-text text-lighten-3" href="{{ route('admin.login') }}">Entrar</a></li>
                    @else 
                    <li><a class="grey-text text-lighten-3" href="{{ route('admin.home') }}">Inicio</a></li>
                    <li><a class="grey-text text-lighten-3" href="{{ route('admin.logout') }}">sair</a></li>
                    @endif
                  </ul>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="container">
            © 2022 vamosfechar.com.br
            <a class="grey-text text-lighten-4 right" href="#!">Mais link</a>
            </div>
          </div>
        </footer>