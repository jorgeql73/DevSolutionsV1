@if(session('status'))
    <div class="alert alert-primary" rol="alert">
        {{session('status')}}
        <button type="button"
            class="close"
            data-dismiss="alert"
            area-label="close">
            <span area-hidden="true">&times</span>

        </button>

    </div>

@endif