@extends('layouts/adminHeader')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Add Category</h3>
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
                    <br />
                    <form method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" action="admin/storeCategory">
                        @csrf
                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Category Name</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="name" class="form-control" placeholder="Category Name">
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


<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
               
                <table id="datatable-buttons" class="table table-striped table-bordered"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            
                            <th>Edit or Delete</th>
                        </tr>
                    </thead>


                    <tbody>
                        {{-- @foreach ($categories as $category)
                            
                        <tr>
                             <td>{{$category->name}}</td>   
                            </td>
                            <td>
                                <div class="w3-padding">
                                    
                                    <a href="#"> <i
                                            class="glyphicon glyphicon-pencil"></i> </a>
                                    <a href="#"> <i
                                            class="glyphicon glyphicon-trash"></i> </a>
                                </div>
                            </td>
                        </tr> 

                        @endforeach --}}
                        
                     
                       
                      
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
   
</div>



@endsection