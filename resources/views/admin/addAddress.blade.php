@extends('layouts/adminHeader')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Address</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Please enter details</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(session()->has('message_primary'))
                    <div class="alert alert-danger">
                        {{ session()->get('message_primary') }}
                    </div>
                @endif
                    <br />
                    <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="admin/addAddress">
                        @csrf
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Address Line 1</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="line1" class="form-control" placeholder="Address Line 1" required>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Address Line 2</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="line2" class="form-control" placeholder="Address Line 2">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">City</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="city" class="form-control" placeholder="City" required>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">State</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="state" class="form-control" placeholder="State" required>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Country</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="country" class="form-control" placeholder="Country" required>
                            </div>
                        </div>


                        
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Postal Code</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="postalcode"  class="form-control"
                                    placeholder="Postal Code" required>
                            </div>
                        </div>
                        
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Contact Number</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" name="mobile"  class="form-control"
                                    placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Primary Address</label>
                            <div class="col-md-9 ">
                                <input type="checkbox" class="col-sm-2"  name="primary" class="form-control" >
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection