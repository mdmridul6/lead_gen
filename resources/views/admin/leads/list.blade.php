@extends('layout.master')
@section('content')

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                @include('admin.layout.partials.message')
                <div class="card">
                    <div class="card-header">
                        <h3>New Lead</h3>
                        <a href="{{route('leads.create')}}" class="btn btn-primary">New Leads</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless" id="project_list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Business Name</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Reminder Date</th>
                                <th>Product</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Activity</th>
                            </tr>

                            </thead>
                            <tbody>

                            @foreach($data as $lead)


                                <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>

                                    <div class="avatar avatar-lg">
                                        <img src="{{$lead->images}}" alt="avatar">
                                    </div>

                                </td>
                                <td>{{$lead->businessName}}</td>
                                <td>{{$lead->customerName}}</td>
                                <td>{{$lead->contactNumber}}</td>
                                <td>{{date('d-M-Y',strtotime($lead->reminderDate))}}</td>
                                <td>{{$lead->project->name}}</td>
                                    <td>
                                        <a href="{{route('leads.edit',['id'=>$lead->id])}}" class="btn btn-primary btn-sm"><i data-feather='edit'></i></a>
                                        <a href="#" class="btn btn-warning btn-sm"><i data-feather='trash-2'></i></a>

                                    </td>

                                    <td>
                                        @if($lead->activities == false)
                                            <a href="#" disabled="true" class="btn btn-danger btn-sm"><i data-feather='x-square'></i></a>
                                        @else
                                            <a href="{{route('leads.deactivate',['id'=>$lead->id])}}" class="btn btn-success btn-sm"><i data-feather='check-square'></i></a>
                                        @endif
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
