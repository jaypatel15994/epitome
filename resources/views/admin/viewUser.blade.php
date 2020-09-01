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
                                            <th>User Name</th>
                                            <th>User E-mail</th>
                                            <th>Mobile</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($users as $user)
                                            
                                        <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                            <td>{{$user->mobile}}</td>
                                            <td>
                                                <?php $i=0; ?>
                                                @foreach ($user->roles as $role)
                                                    {{ $role->name }}
                                                    @if($i != (count($user->roles)-1) )
                                                        {{ ", "}}
                                                    @endif

                                                    <?php $i++?>
                                                @endforeach
                                            </td>
                                            <td>
                                            @if($user->status==0)
                                            {{'Inactive'}}
                                            @elseif($user->status==1) 
                                            {{'Active'}}
                                            @else 
                                            {{'Deleted'}}
                                            @endif
                                            </td>
                                            
                                            <td>
                                                <div class="w3-padding">
                                                   
                                                   
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