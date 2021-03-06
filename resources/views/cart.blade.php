@extends('layouts.app')
@section('page_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/cart.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/cart_responsive.css')}}">
@endsection
@section('content')


    	<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
        
        <!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row  ">
					@if(session()->has('order_message'))
                    <div class="alert alert-success col-md-12">
                        {{ session()->get('order_message') }}
                    </div>
                   @endif
				</div>
				<div class="row">
               
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Product</li>
									<li>Price</li>
									<li>Quantity</li>
									<li>Total</li>
									<li>Action</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<?php $count=0; 
										  $totalPrice=0;
									?>
									@foreach ($cartItems as $cartItem)
										
									<?php $totalPrice+=$cartItem->quantity * $cartItem->product->price; 
											Session::put('totalPrice',$totalPrice);
									?>
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<div><div class="product_number">{{++$count}}</div></div>
											<div><div class="cart_image"><img src="{{asset('storage/uploads/products/'.$cartItem->product->image)}}" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.html">{{$cartItem->product->name}}</a></div>
												
											</div>
										</div>
										
									<div class="product_price product_text"><span>Price: </span>${{$cartItem->product->price}}</div>
										<div class="product_quantity_container">
											<div class=" product_text"><span>Quantity: </span>
											{{$cartItem->quantity}}
										</div>
												
											
										</div>
									<div class="product_total product_text"><span>Total: </span>${{$cartItem->quantity * $cartItem->product->price}}</div>
									<div class="product_total product_text"><span>Total: </span><a href="deleteCartItem/{{$cartItem->id}}" class=""> <i class="fa fa-trash"></i> </a></div>
									
									</li>
									


									@endforeach
									

								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="clearCart">clear cart</a></div>
									<div class="button button_continue trans_200"><a href="/">continue shopping</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>


				@if($count>0)
					<div class="row cart_extra_row">



						<div class="col-lg-6 cart_extra_col">
							<div class="cart_extra cart_extra_2">
								<div class="cart_extra_content cart_extra_total">
									<div class="cart_extra_title">Cart Total</div>
									<ul class="cart_extra_total_list">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Subtotal</div>
											<div class="cart_extra_total_value ml-auto">{{$totalPrice}}</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Shipping</div>
											<div class="cart_extra_total_value ml-auto">Free</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Total</div>
											<div class="cart_extra_total_value ml-auto">{{$totalPrice}}</div>
										</li>
									</ul>
									<div class="checkout_button trans_200"><a href="checkout">proceed to checkout</a></div>
								</div>
							</div>
						</div>
					</div>
				@endif

				
			</div>
		</div>


@endsection