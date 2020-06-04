@csrf
<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input class="form-control bg-light shadow-sm 
        @error('title') is-invalid @else border-0 @enderror "
                            
        id="title" name="title" value="{{ old('title')}}">
    @error('title')
        <span class="invalid-feedback" roll="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!-- <label>
    Titulo del proyecto <br>
    <input type="text" name="title" value="{{old('title',$project->title)}}">
    {!! $errors->first('title', '<small><br>:message</small><br>')!!}
</label>
<br> -->
<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control bg-light shadow-sm 
        @error('url') is-invalid @else border-0 @enderror "
                            
        id="url" name="url" value="{{ old('url')}}">
    @error('url')
        <span class="invalid-feedback" roll="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!-- <label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{old('url',$project->url)}}">
    {!! $errors->first('url', '<small><br>:message</small><br>')!!}
</label>
<br> -->
<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control bg-light shadow-sm 
        @error('description') is-invalid @else border-0 @enderror "
                            
        id="description" name="description"  value="{{ old('description')}}">
    </textarea>
    @error('description')
        <span class="invalid-feedback" roll="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!-- <label>
    Descripción del proyecto <br>
    <textarea name="description" value="{{old('description',$project->descripton)}}"></textarea>
    {!! $errors->first('description', '<small><br>:message</small><br>')!!}
</label>
<br> -->
<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{ route('Projects.index')}}">Cancelar</a>