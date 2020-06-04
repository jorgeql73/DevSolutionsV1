@extends ('layout')
@section('title','Portafolio')

@section('content') 
    @auth 
        @if(auth()->user()->role_id!=1)
            <div>
                <h1 >No cuenta con los permisos de usuario para acceder a esta ruta</h1>
            </div>
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                            <form class="bg-white shadow rounded py-3 px-4"
                                method="POST" action="{{ route('Projects.update',$project)}}">
                                @method('PATCH')
                                <h1 class="display-5">Editar un proyecto</h1>
                                <hr>
                                @include ('Projects._form',['btnText'=> 'Actualizar'])
                            
                            </form>
                        </div>
                    </div>
                </div>
        @endif
    @endauth

@endsection