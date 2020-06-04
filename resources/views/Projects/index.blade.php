@extends ('layout')
@section('title','Portafolio')

@section('content')
    
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
           
            <h2 class= "display-5 text-primary">Portafolio</h2>
            <hr>
            
                
            
           @auth 
                @if(auth()->user()->role_id==1)
                    <a class="btn btn-primary" href="{{route('Projects.create')}}">Crear</a>
                @endif
            @endauth
            
            <!-- @auth
                {{$user=auth()->user()->id}}
                @if($user==1)
                    <a class="btn btn-primary" href="{{route('Projects.create')}}">Crear</a>
                @endif
                
                
                
            @endauth      -->
            
            
            <!-- $user=Auth::user()
            if($user->id==1){
                <a class="btn btn-primary" href="{{route('Projects.create')}}">Crear</a>
            } -->
        </div>
        <h4 class="lead text secondary mb-4">Proyectos realizados en el ámbito académico y personal</h4>

        <ul class="list-group">
            @forelse($projects as $Project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex justify-content-between align-items-center"
                        href="{{ route('Projects.show', $Project)}}">
                        <span class="text-secondary font-weight-bold">
                            {{$Project->title}}
                        </span>
                        <span class="text-black-50">
                            {{$Project->create_at}}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay elementos para mostrar
                </li>
            @endforelse
            {{$projects ->links()}}
        </ul>
    </div>
@endsection