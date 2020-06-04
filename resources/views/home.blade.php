@extends('layout')
@section('title', 'home')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div id="carousel">
                </div>
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
        
            
        <div class="col-12 col-lg-6">
            <h1 class="display-5 text-primary" align="center">Quiroga Jorge Luis</h1>
            <h3 class="display-5 text-secondary" align="center">Desarrollador Web</h3>
            <p class="lead text-secondary">
               Hola!! Soy estudiante de ingeniería en informática en la Universidad Nacional Arturo Jauretche en la Provincia de Buenos Aires Argentina,
               también soy técnico en Informática Profesional y Personal. Dicha preparación académica me ha brindado los conocimientos necesarios para comenzar mi camino como desarrollador web.
               Te invito a acompañar mi crecimiento depositando tu confianza para que con mi trabajo pueda satisfacer tus necesidades con soluciones profesionales y personalizadas.   

            
            </p>

            @auth
                {{auth()->user()->name}}
            @endauth
         
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto')}}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary mb-5" href="{{ route('Projects.index')}}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6  my-5 ">
            <!-- <img class="img-circle" src="/img/Perfil.jpeg" alt="Desarrollo web"> -->
            <!-- <img src="/img/Perfil.jpeg" class="img-fluid width: lg-300 height: auto"  alt="Responsive image" > -->
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
            
        </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
        
            
        <div align="center" class="col-12 col-lg-6 ">
            <svg class="bi bi-tools my-5" width="8em" height="8em"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
            </svg>
            <h4 class="lead text-primary mb-4">Metodologia de Trabajo </h4>

            <p class="lead text-secondary mb-4">La atención personalizada, el cumplimiento con los tiempos requeridos por el cliente y la perseverancia para sobrellevar cualquier obstaculo que se presente es mi principal metodología para lograr cumplir con los objetivos, con soluciones eficientes profesionales. </p>

        </div>
        <div align="center" class="col-12 col-lg-6">
            <svg class="bi bi-code-slash my-5" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0zm-.999-3.124a.5.5 0 0 1 .33.625l-4 13a.5.5 0 0 1-.955-.294l4-13a.5.5 0 0 1 .625-.33z"/>
            </svg>
            <h4 class="lead text-primary mb-4">Lenguajes, bibliotecas y herramientas de programación </h4>

            <p class="lead text-secondary mb-4">PHP, Laravel, Java, Sping Boot, JavaScript, CSS, HTML, Bootstrap, MySQL</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div align="center" class="col-12">
            <img class="img-fluid mb-4" width="400em" height="400em" src="/img/Moviles.svg" alt="">
            <h4 class="lead text-primary mb-4">Diseño Responsive </h4>
            <p class="lead text-secondary mb-4">Aplicaciones web completamente adaptable a cualquier tipo de dispositivo <br> para que puedan disfrutar del contenido en todos los tamaños de pantalla ya sea smartphone, tablet o pc </p>

        </div>
    </div>
</div>

@endsection
