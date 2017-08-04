
<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Laravel 5</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
              <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
              <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tickets<span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <li class="dropdown-header">Ticket</li>
                  <li><a href="/create">Crear</a></li>
                  <li><a href="/">Actualizar</a></li>
                  <li><a href="/">Borrar</a></li>
                  <li><a href="/tickets">Mostrar Todos</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
</nav>
