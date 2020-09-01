<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Epitome</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css')}}">

{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/login.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/sourcesanspro-font.css')}}">

@yield('page_css')
</head>
<body>
    
<!-- Menu -->


<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="/">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="{{asset('assets/images/logo_1.png')}}" alt=""></div>
						<div>Epitome</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="{{Request::is('clothing*') ? 'active' : '' }}"><a href="clothing">Clothing</a></li>
					<li class="{{Request::is('electronics*') ? 'active' : '' }}" ><a href="electronics">Electronics</a></li>
					<li class="{{Request::is('home&kitchen*') ? 'active' : '' }}"><a href="home&kitchen">Home and Kitchen</a></li>
					<li class="{{Request::is('beauty*') ? 'active' : '' }}"><a href="beauty">Beauty</a></li>
					<li class="{{Request::is('toys*') ? 'active' : ''}}"><a href="toys">Toys</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="{{asset('assets/images/search.png')}}" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user">
				<a href="admin" style="font-weight: bolder ; font-size: 18px;">
					@if(Auth::user())
					@if(( session('role')=='Seller' || session('role')=='Admin') )
					Manage Stock
					@elseif(session('role')=='User')
					Manage Profile
					@endif
					@endif
				</a>
				</div>
				
				@if(!Auth::user())
				<div class="user"><a href="login"><div><img src="{{asset('assets/images/user.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				@else
				<div class="user"><a href="logout"><i class="fa fa-3x fa-sign-out" style="color: gray"></i></a></div>
				@endif
				<!-- Cart -->
				<div class="cart"><a href="{{url('cart')}}"><div><img class="svg" src="{{asset('assets/images/cart.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
			</div>
		</div>
	</header>
    










    <div class="super_container_inner">
    <div class="super_overlay">
			
    </div>

        
        <main class="py-4">
            @yield('content')
        </main>
    









        <!-- Footer -->

				<footer class="footer">
					<div class="footer_bar">
						<div class="container">
							<div class="row">
								<div class="col">
									<div
										class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
										<div class="copyright order-md-1 order-2">
											<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
											Copyright &copy;<script>
												document.write(new Date().getFullYear());
											</script> All rights reserved | This template is made with <i
												class="fa fa-heart-o" aria-hidden="true"></i> by <a
												href="https://colorlib.com" target="_blank">Colorlib</a>
											<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </footer>
            </div>

		</div>


                <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{ asset('assets/styles/bootstrap-4.1.2/popper.js')}}"></script>
		<script src="{{ asset('assets/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
		<script src="{{ asset('assets/plugins/easing/easing.js')}}"></script>
		<script src="{{ asset('assets/plugins/progressbar/progressbar.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
		<script src="{{ asset('assets/js/custom.js')}}"></script>
		<script src="{{ asset('assets/js/login.js')}}"></script>
</body>
</html>
