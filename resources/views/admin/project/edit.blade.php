@extends('layout.master')
@section('content')

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3>Project Update</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('project.edit',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="projectName">Project Name</label>
                                    <input type="text" name="projectName" id="projectName" class="form-control" value="{{$data->name}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="projectSku">SKU</label>
                                    <input type="text" name="projectSku" id="projectSku" class="form-control" value="{{$data->sku}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="projectsDesc">Project Notes</label>
                                    <textarea name="projectsDesc" id="projectsDesc" cols="30" rows="10" class="form-control">{{$data->notes}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <input class="btn btn-success" type="submit" name="submit" id="submit" value="Save">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div
@endsection
@section('script')
@endsection
