@extends ('layout')
@section('title','Portafolio')

@section('content')
    @auth 
        @if(auth()->user()->role_id!=1)
            
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                        <h2 class="permisos">No cuenta con los permisos de usuario para acceder a esta ruta.</h2> 
                    </div>
                </div>
            </div>
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                    
                            <form class="bg-white py-3 px-4 shadow rounded"
                                method="POST" action="{{ route('Projects.store')}}">
                                <h1 class="display-5">Nuevo proyecto</h1>
                                <hr>
                                @include ('Projects._form', ['btnText'=> 'Guardar'])
                    
                            </form>
                        </div>
                    </div>
                </div>
         @endif
    @endauth
@endsection