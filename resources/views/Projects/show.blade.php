@extends ('layout')
@section('title', 'Portfolio | '. $project->title)
@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1>{{$project -> title}}</h1>
       
        <p class="text-secondary">{{$project -> description}}</p>
        
        @switch($project->url)
            @case("junados")
                <a href="https://junados.com">{{$project -> url}}</a>
            @break
            @case("google")
                <a href="https://google.com">{{$project -> url}}</a>
            @break
            
        @endswitch
        <p class="text-black-50">{{$project -> created_at -> diffForHumans()}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('Projects.index')}}">Volver</a>
            @auth
                @if(auth()->user()->role_id==1)
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary" href="{{route('Projects.edit', $project)}}">Editar</a>
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                    
                        <form class="d-none" id="delete-project" method="POST" action="{{route('Projects.destroy', $project)}}" >
                            @csrf @method('DELETE')
                            
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</div>
@endsection