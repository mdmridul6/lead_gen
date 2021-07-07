@extends('layout.master')
@section('content')

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Project</h3>
                        <a href="{{route('project.create')}}" class="btn btn-primary">New Project</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless" id="project_list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Notes</th>
                                <th class="text-center">Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($data as $project)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->sku}}</td>
                                    <td>{{$project->notes}}</td>
                                    <td class="d-flex flex-wrap justify-content-around">
                                        <a class="btn btn-sm btn-primary" href="{{route('project.edit',['id'=>$project->id])}}">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="{{route('project.delete',['id'=>$project->id])}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div
@endsection
@section('script')
@endsection
