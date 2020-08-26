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
                                            <th>Product Name</th>
                                            <th>Discription</th>
                                            <th>Price</th>
                                            <th>Catagory</th>
                                            <th>Edit or Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($products as $product)
                                            
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <?php $i=0; ?>
                                                @foreach ($product->categories as $category)
                                                    {{ $category->name }}
                                                    @if($i != (count($product->categories)-1) )
                                                        {{ ", "}}
                                                    @endif

                                                    <?php $i++?>
                                                @endforeach
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