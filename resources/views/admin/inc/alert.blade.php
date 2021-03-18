@if(session()->has('danger'))
    <div class="alert alert-danger">
        <p class="text-danger">{{session()->get('danger')}}</p>
    </div>
    @endif

@if(session()->has('info'))
    <div class="alert alert-info">
        <p>{{session()->get('info')}}</p>
    </div>
@endif
