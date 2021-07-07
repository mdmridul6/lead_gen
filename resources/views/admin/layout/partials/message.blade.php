@if ($errors->any())
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session()->has('message'))
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <div class="alert-body">
                    {{session('message')}}
                </div>
            </div>
        </div>

@endif
