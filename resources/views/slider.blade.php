
				<!-- Home -->

				<div class="home">
                    <!-- Home Slider -->
                    
					<div class="home_slider_container">
						<div class="owl-carousel owl-theme home_slider">
							@for($i=count($sliderProducts)-1;$i-2>=0;$i=$i-3)
							<!-- Slide 1-->
							<div class="owl-item">
								<div class="background_image" style="background-image:url({{asset('assets/images/home.jpg')}})"></div>
								<div class="container fill_height">
									<div class="row fill_height">
										<div class="col fill_height">
											<div
												class="home_container d-flex flex-column align-items-center justify-content-start">
												<div class="home_content">
													<div class="home_title">New Arrivals</div>
													<div class="home_subtitle">Clothing</div>
													<div class="home_items">
														<div class="row">
															<div class="col-sm-3 offset-lg-1">
																<div class="home_item_side"><a href="product.html"><img
																			src="{{asset('storage/uploads/products/'.$sliderProducts[$i]->image)}}"
																			alt="Product Image"></a></div>
															</div>
															<div
																class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
																<div class="product home_item_large">
																	<div
																		class="product_tag d-flex flex-column align-items-center justify-content-center">
																		<div>
																			<div>from</div>
																			<div>$5<span>.99</span></div>
																		</div>
																	</div>
																	<div class="product_image"><a
																			href="product.html"><img
																				src="{{asset('storage/uploads/products/'.$sliderProducts[$i-1]->image)}}" alt=""></div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="home_item_side"><a href="product.html"><img
																			src="{{asset('storage/uploads/products/'.$sliderProducts[$i-2]->image)}}" alt=""></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endfor
						

						</div>
						<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left"
								aria-hidden="true"></i></div>
						<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right"
								aria-hidden="true"></i></div>

						<!-- Home Slider Dots -->

						<div class="home_slider_dots_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_dots">
											<ul id="home_slider_custom_dots"
												class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
												<li class="home_slider_custom_dot active">01</li>
												<li class="home_slider_custom_dot">02</li>
												<li class="home_slider_custom_dot">03</li>
												<li class="home_slider_custom_dot">04</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>