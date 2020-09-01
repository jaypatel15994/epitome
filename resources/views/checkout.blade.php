@extends('layouts.app')

@section('page_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/checkout.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/checkout_responsive.css')}}">
@endsection

@section('content')	
		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form">
									
										<div >
											<!-- Name -->
										<input type="text" id="checkout_name" class="checkout_input" value="{{$primaryAddress->user->name}}" placeholder="Full Name" required="required" disabled>
										</div>
										
									
									
									<div>
										<input type="text" id="checkout_country" class="checkout_input" value="{{$primaryAddress->country}}" placeholder="Country" required="required" disabled>
										<!-- Country -->
										
									</div>
									<div>
										<!-- Address -->
									<input type="text" id="checkout_address" class="checkout_input" placeholder="Address Line 1" value="{{$primaryAddress->line1}}" required="required" disabled>
										<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" value="{{$primaryAddress->line2}}" placeholder="Address Line 2" required="required" disabled>
									</div>
									<div>
										
										<!-- Zipcode -->
										<input type="text" id="checkout_zipcode" class="checkout_input" value="{{$primaryAddress->postalcode}}" placeholder="Zip Code" required="required" disabled>
									</div>
									<div>
										<!-- City / Town -->
										<input type="phone" id="checkout_city"  value="{{$primaryAddress->city}}"class="checkout_input" placeholder="City" required="required" disabled>
										
									</div>
									<div>
										<!-- Province -->
										<input type="phone" id="checkout_province"  value="{{$primaryAddress->state}}"class="checkout_input" placeholder="province" required="required" disabled>
										
									</div>
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone"  value="{{$primaryAddress->contact_number}}"class="checkout_input" placeholder="Phone No." required="required" disabled>
									</div>
									<div>
										<!-- Email -->
										<input type="phone" id="checkout_email" value="{{$primaryAddress->user->email}}" class="checkout_input" placeholder="Email" required="required" disabled>
									</div>
									
                                </form>


                                
                                <div class="checkout_button trans_200"><a href="checkout.html">Manage Address</a></div>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
									<div class="cart_extra_total_value ml-auto">{{Session::get('totalPrice')}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">{{Session::get('totalPrice')}}</div>
									</li>
								</ul>


								<form action="placeOrder" method="post">
									@csrf
									<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
									<input type="hidden" name="address_id" value="{{$primaryAddress->id}}">
										@foreach ($paymentMethod as $method)
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
											<input type="radio" id="radio_1" value="{{$method->id}}" name="payment" class="payment_radio" {{$method->id==3?'checked':''}}>
												<span class="radio_mark"></span>
											<span class="radio_text">{{$method->method}}</span>
											</label>
										</li>
										@endforeach
										



										
									</ul>
								</div>
								<div class="cart_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
								</div>
								<input type="submit" name="placeorder" value="Place Order" class="checkout_button trans_200">
						
							</form>

							</div>
						</div>
					</div>
				</div>
            </div>
@endsection            
		