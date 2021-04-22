<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <form action="/search" class="site-block-top-search" method="GET">
              <span class="icon fas fa-search"></span>
              <input type="text" class="form-control border-0" placeholder="Search" name="q">
            </form>
          </div>
          <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
            <div class="site-logo">
              <a href="Inicio" class="border-none"><img class="text-center" id="colorlib-logo" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/logos%2FLOGO%20FSW%20negro.png?alt=media&token=ffaba445-0383-4b10-a893-b87897658fc9" height="auto" width="250"></a>
            </div>
          </div>

          <div class="col-6 col-md-4 order-3 order-md-3 text-right">
            <div class="site-top-icons">
              <ul><!--<a href="Session">  <span class="fas fa-sign-out-alt"></span>-->
                <li>
                  <div class="dropdown">
                    <span class="far fa-user" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      @if(!Request::session()->has('login') && !Request::session()->get('login'))
                      <a class="dropdown-item" href="/signin">Iniciar Session</a>
                      <a class="dropdown-item" href="/signup">Registrarse</a>
                      @else
                      <a class="dropdown-item" href="/profile">Perfil <span class="fas fa-user"></span></a>
                      <a class="dropdown-item" href="/signoff">Cerrar Session <span class="fas fa-sign-out-alt"></span></a>
                      @endif
                    </div>
                  </div>
                </li>
                <li>
                    <a href="/cart" class="site-cart">
                        <span class="fas fa-shopping-bag"></span>
                        <span class="block-black count">
                          @if( Request::session()->has('cartCant') )
                          {{ Request::session()->get('cartCant') }}
                        @else
                          0
                        @endif
                      
                        </span>
                    </a>
                </li> 
                <li class="d-inline-block d-md-none ml-md-0"><span id="btn-menu" class="fas fa-bars"></span></li>
              </ul>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <nav class="main-nav" role="navigation" id="main-nav">
      <div class="container">
        <ul class="menu text-center">
          <li class="menu_item"><a class="menu__link" href="/">INICIO</a></li>
          <li class="menu_item"><a class="menu__link" href="/shop">TIENDA</a></li>
          <li class="menu_item"><a class="menu__link" href="/about">MARCA</a></li>
          <li class="menu_item"><a class="menu__link" href="/tallas">TALLAS</a></li>
        </ul>
      </div>
    </nav>
    <div class="space"></div>
  </header>