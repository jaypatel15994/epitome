@extends('layouts/adminHeader')
@section('content')


<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>View Products</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                               
                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Primary</th>
                                            <th>Line 1</th>
                                            <th>Line 2</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Postal Code</th>
                                            <th>Contact Number</th>
                                            <th>Edit or Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($addresses as $address)
                                            
                                        <tr>
                                            <td>{{$address->is_primary==1?'primary':''}}</td>
                                            <td>{{$address->line1}}</td>
                                            <td>{{$address->line2}}</td>
                                            <td>{{$address->city}}</td>
                                            <td>{{$address->state}}</td>
                                            <td>{{$address->country}}</td>
                                            <td>{{$address->postalcode}}</td>
                                            <td>{{$address->contact_number}}</td>
                                            <td>
                                                <div class="w3-padding">
                                                    
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-pencil"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-trash"></i> </a>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                     
                                       
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection