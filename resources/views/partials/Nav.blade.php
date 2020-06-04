<nav class="navbar navbar-light navbar-expand-lg bg-white shadows-sm">
    <div class="container">
        <a class= "navbar-brand"href="{{ route('home')}}">
            <!-- {{ config('app.name')}} -->
            <img class="img-fluid " width="80em" src="/img/Logo.png" alt="Quiroga Jorge">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('home')}}"
                        href="{{ route('home')}}">Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('Projects.*')}}" 
                        href="{{ route('Projects.index')}}">Proyectos
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ setActive('#')}}"
                        href="{{ route('home')}}">Cursos
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contacto')}}"
                        href="{{ route('contacto')}}">Contacto
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('register')}}"
                            href="{{ route('register')}}">Registro
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login')}}"
                            href="{{ route('login')}}">Login
                        </a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
                @endguest
            </ul> 
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>