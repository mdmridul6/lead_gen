@extends('layout.master')
@section('content')

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            @include('admin.layout.partials.message')
            <div class="card-header">
                <h3>Lead Update</h3>
            </div>
            <div class="card-body">
                <form action="{{route('leads.edit',['id'=>$data['leadsData']->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="businessName">Business Name</label>
                                    <input type="text" name="businessName" id="businessName" class="form-control" value="{{$data['leadsData']->businessName}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="customerName">Customer Name</label>
                                    <input type="text" name="customerName" id="customerName" class="form-control" value="{{$data['leadsData']->customerName}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="customerPhone1">Customer Phone (Primary)</label>
                                    <input type="tel" name="customerPhone1" id="customerPhone1" class="form-control" value="{{$data['leadsData']->phoneNumber1}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="form-group">
                                    <label for="customerPhone2">Customer Phone (Secondary)</label>
                                    <input type="tel" name="customerPhone2" id="customerPhone2" class="form-control" value="{{$data['leadsData']->phoneNumber2}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="contactName">Contact Name</label>
                                    <input type="text" name="contactName" id="contactName" class="form-control" value="{{$data['leadsData']->contactName}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="contactNumber">Contact Number</label>
                                    <input type="tel" name="contactNumber" id="contactNumber" class="form-control" value="{{$data['leadsData']->contactNumber}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea type="text" name="address" id="address" class="form-control">{{$data['leadsData']->address}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea type="text" name="notes" id="notes" class="form-control" >{{$data['leadsData']->note}}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="interest">Customer Interest</label>
                                    <select name="interest" id="interest" class="form-control basicSelect">
                                        <option value="0" disabled>Select interest level</option>
                                        <option value="1" @if($data['leadsData']->interestLevel==1) selected @endif>1</option>
                                        <option value="2" @if($data['leadsData']->interestLevel==2) selected @endif>2</option>
                                        <option value="3" @if($data['leadsData']->interestLevel==3) selected @endif>3</option>
                                        <option value="4" @if($data['leadsData']->interestLevel==4) selected @endif>4</option>
                                        <option value="5" @if($data['leadsData']->interestLevel==5) selected @endif>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="fp-default">Reminder Date</label>
                                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input active" name="reminderDate" placeholder="YYYY-MM-DD" value="{{date('Y/m/d',strtotime($data['leadsData']->reminderDate))}}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="amountInstallation">Amount Installation</label>
                                    <input type="number" name="amountInstallation" id="amountInstallation" class="form-control" value="{{$data['leadsData']->amountInstallation}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="amountMonthly">Amount Monthly</label>
                                    <input type="number" name="amountMonthly" id="amountMonthly" class="form-control" value="{{$data['leadsData']->amountMonthly}}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label for="productId basicSelect">Product</label>
                                <select name="productId" id="productId basicSelect" class="form-control">
                                    <option value="0" disabled>Select Project</option>
                                    @foreach($data['projects'] as $product)
                                        @if($product->id == $data['leadsData']->productId)
                                            <option value="{{$product->id}}" selected>{{$product->name}}</option>
                                        @else
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label for="customFile">Images</label>
                                    <div class="custom-file">
                                        <input type="file" multiple class="custom-file-input" id="customFile" name="images">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group mt-1">
                                    <input class="btn btn-success" type="submit" name="submit" id="submit" value="Save">
                                </div>
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
