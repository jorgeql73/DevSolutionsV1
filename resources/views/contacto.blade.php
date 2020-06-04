@extends ('layout')
@section('title','Contacto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4"
                method="POST"action="{{route('formContacto.store')}}">
                    @csrf
                    <h2 class= "display-5 text-primary">Enviame tu mensaje</h2>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('name') is-invalid @else border-0 @enderror "
                            
                            id="name" name="name"  placeholder="Nombre..." value="{{ old('name')}}">
                            @error('name')
                                <span class="invalid-feedback" roll="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('email') is-invalid @else border-0 @enderror "
                            
                            id="email" name="email"  placeholder="Email..." value="{{ old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" roll="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <!-- <input type="email" name="email" placeholder="Email..." value="{{ old('email')}}"><br>
                    {!! $errors->first('email', '<small>::message</small><br>')!!} -->
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('subject') is-invalid @else border-0 @enderror "
                            
                            id="subject" name="subject"  placeholder="Asunto..." value="{{ old('subject')}}">
                            @error('subject')
                                <span class="invalid-feedback" roll="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <!-- <input name="subject"  placeholder="Asunto..." value="{{ old('subject')}}"><br>
                    {!! $errors->first('subject', '<small>::message</small><br>')!!} -->
                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <textarea class="form-control bg-light shadow-sm 
                            @error('subject') is-invalid @else border-0 @enderror "
                            
                            id="content" name="content"  placeholder="Contenido..." >{{ old('content')}}
                        </textarea>
                        @error('content')
                            <span class="invalid-feedback" roll="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <!-- <textarea name="content"  placeholder="Mensaje..." value="{{ old('content')}}"></textarea><br>
                    {!! $errors->first('content', '<small>::message</small><br>')!!} -->
                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>
            <div class="col-lg-6 mx-auto py-3 px-4"> 
                <h2 class= "display-5 text-primary">Contacto</h2>
                <hr>
                <h4 class="lead text-secondary mb-4"><br>

                     Si estas interesado en mi trabajo no dudes en contactarme. 
                    Completa el formulario y te contactare a la brebedad o comunicate a los siguientes medios de contacto<br><br><br>
                    Telefono: +54(011)1561985920<br><br>
                    E-Mail: jorgeql@hotmail.es<br><br>
                    Facebook: JQDeveloper<br><br>
                    
                </h4>
            </div>
        </div>
    </div>
    
    
@endsection