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
                        <li class="{{Request::is('clothing*') ? 'active' : '' }}"><a href="clothing">Clothing</a></li>
                        <li class="{{Request::is('electronics*') ? 'active' : '' }}" ><a href="electronics">Electronics</a></li>
                        <li class="{{Request::is('home&kitchen*') ? 'active' : '' }}"><a href="home&kitchen">Home and Kitchen</a></li>
                        <li class="{{Request::is('beauty*') ? 'active' : '' }}"><a href="beauty">Beauty</a></li>
                        <li class="{{Request::is('toys*') ? 'active' : ''}}"><a href="toys">Toys</a></li>
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