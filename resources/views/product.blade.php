

							<!-- Product 1-->
							<div class="col-xl-4 col-md-6">
								<div class="product">
									<div class="product_image"><img src="{{asset('storage/uploads/products/'.$product->image)}}" alt=""></div>
									<div class="product_content">
										<div
											class="product_info d-flex flex-row align-items-start justify-content-start">
											<div>
												<div>
													<div class="product_name"><a href="product.html">{{$product->name}}</a></div>
													<div class="product_category">In <a
															href="category.html">Category</a></div>
												</div>
											</div>
											<div class="ml-auto text-right">
												<div class="rating_r rating_r_4 home_item_rating">
													<i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="product_price text-right">{{$product->price}}</div>
											</div>
										</div>

										<div class="product_buttons">
											<div
												class="text-right d-flex flex-row align-items-start justify-content-start">
												<div
													class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
													<div>
														<div><img src="{{asset('assets/images/heart_2.svg')}}" class="svg" alt=""></div>
													</div>
												</div>
												<div
													class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
													<div>
														
													<div>
														<a href="{{ route('addItem', ['product_id' => $product->id ])}}">
															<img src="{{asset('assets/images/cart.svg')}}" class="svg" alt="">
															{{-- <div>+</div>--}}	</a> 
														</div>
													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						
						
						