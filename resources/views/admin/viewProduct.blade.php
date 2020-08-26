@extends('adminHeader')
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
                                <p class="text-muted font-13 m-b-30">
                                    The Buttons extension for DataTables provides a common set of
                                    options, API
                                    methods and styling to display buttons on a page that will interact
                                    with a
                                    DataTable. The core library provides the based framework upon which
                                    plug-ins
                                    can built.
                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Discription</th>
                                            <th>Price</th>
                                            <th>Catagory</th>
                                            <th>Edit or Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>
                                                <div class="w3-padding">
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-search"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-pencil"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-trash"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>
                                                <div class="w3-padding">
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-search"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-pencil"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-trash"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>
                                                <div class="w3-padding">
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-search"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-pencil"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-trash"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <div class="w3-padding">
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-search"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-pencil"></i> </a>
                                                    <a href="#"> <i
                                                            class="glyphicon glyphicon-trash"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
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