@extends('layouts.app')

@section('content')

@include('slider')

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section_title text-center">Popular on Epitome</div>
            </div>
        </div>
        <div class="row page_nav_row">
            <div class="col">
                <div class="page_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-center">
                        <li class="active"><a href="category.html">Clothing</a></li>
                        <li><a href="category.html">Electronics</a></li>
                        <li><a href="category.html">Home and Kitchen</a></li>
                        <li><a href="category.html">Beauty</a></li>
                    </ul>
                </div>
            </div>
        </div>

        


{{-- Display Product --}}

	<div class="row products_row">

        @foreach ($products as $product)
             @include('product')
        @endforeach
       
    </div>
    
        <div class="row justify-content-center">
            
            {{ $products->links() }}
            
        </div>
    </div>
</div>

@endsection