@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row">
							<div class="col-lg-8">
								<div class="main-wraper">
									<h4 class="main-title"><i class="icofont-bill"></i> Billing Detail</h4>
									<div class="billing">
										<form>
										    <div class="row">
										        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										            <input class="uk-input" type="text" placeholder="First Name">
										        </div>
										        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										            <input class="uk-input" type="text" placeholder="Last Name">
										        </div>
										        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										            <input class="uk-input" type="text" placeholder="Email">
										        </div>
										        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										            <select class="uk-select">
										                <option>United States</option>
										                <option>United Kingdom</option>
										                <option>United Arab</option>
										                <option>Russia</option>
										                <option>China</option>
										                <option>Pakistan</option>
										            </select>
										        </div>
										        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										            <input class="uk-input" type="text" placeholder="State">
										        </div>
										        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										            <input class="uk-input" type="text" placeholder="Zip/Postal Code">
										        </div>
										        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										            <textarea class="uk-textarea" rows="5" placeholder="Special Note"></textarea>
										        </div>
										    </div>
										</form>
										<div class="payment-methods">
											<h4>Select Payment Method</h4>
											<div class="light-bg pd-20">
												<ul class="uk-tab uk-light nav nav-tabs">
													<li class="nav-item"><a class="active" href="#visa" data-toggle="tab"><img src="{{asset('images/visa-master.png')}}" alt=""></a></li>
													<li class="nav-item"><a class="" href="#paypal" data-toggle="tab"><img src="{{asset('images/paypal.png')}}" alt=""></a></li>
													<li class="nav-item"><a class="" href="#bitcoin" data-toggle="tab"><img src="{{asset('images/bitcoin.png')}}" alt=""></a></li>
												</ul>

												<div class="tab-content">
													<!-- tab 1 -->
													<div class="tab-pane active fade show" id="visa">
														<div class="credit-card billing">
															<h6><i class="icofont-check-circled"></i> Credit Cards</h6>
															<figure><img src="{{asset('images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
															<form>
																<div class="row merged20">
																	<div class="col-lg-12 mb-4">
																		<input class="uk-input" type="text" placeholder="Card Number">
																	</div>

																	<div class="col-lg-4 mb-4">
																		<select class="uk-select ">
																			<option>Month</option>
																			<option>January</option>
																			<option>February</option>
																			<option>March</option>
																			<option>April</option>
																			<option>May</option>
																			<option>June</option>
																			<option>July</option>
																			<option>August</option>
																			<option>September</option>
																			<option>October</option>
																			<option>November</option>
																			<option>December</option>
																		</select>
																	</div>
																	<div class="col-lg-4 mb-4">
																		<select class="uk-select">
																			<option>Year</option>
																			<option>2020</option>
																			<option>2021</option>
																			<option>2022</option>
																			<option>2023</option>
																			<option>2024</option>
																			<option>2025</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<a class="number-demo" data-toggle="tooltip" title="Aenean ac suscipit nibh. Sed tristique, mauris id venenatis faucibus, mi risus suscipit tortor, eleifend dignissim dolor enim in eros. Etiam finibus dui lectus" href="#" aria-expanded="false">
																			<i class="icofont-question-circle"></i>
																		</a>
																		<input class="uk-input" type="text" placeholder="Security Code">
																	</div>
																	<div class="mt-1">
																		<button class="button primary circle">Save Card</button>
																	</div>
																</div>
															</form>
														</div>
													</div>

													<!-- tab 2 -->
													<div class="tab-pane fade" id="paypal">
														<div class="paypal-card">
															<p>After payment via PayPal's secure checkout, we will send you a link to download your files.
															</p>
															<form>
																<div class="uk-fieldset">
																	<div class="uk-margin">
																		<label>Insert Your Email</label>
																		<input class="uk-input" type="text" placeholder="Your Email">
																	</div>
																	<div class="mt-4">
																		<button class="button primary circle">Save Card</button>
																	</div>	
																</div>	
															</form>
															<p>Paypal also accept the Payment Methods</p>
															<figure><img src="{{asset('images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
														</div>
													</div>

													<!-- tab 3 -->
													<div class="tab-pane fade" id="bitcoin">
														<div class="paypal-card">
															<p>After payment via bitcoin secure checkout, we will send you a link to download your files.
															</p>
															<form>
																<div class="uk-fieldset">
																	<div class="uk-margin">
																		<label>Insert Your Email</label>
																		<input class="uk-input" type="text" placeholder="Your Email">
																	</div>
																	<div class="mt-4">
																		<button class="button primary circle">Save Card</button>
																	</div>	
																</div>	
															</form>
															<p>Bitcoin also accept the Payment Methods</p>
															<figure><img src="{{asset('images/resources/Credit-Card-Logos.jpg')}}" alt=""></figure>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="courier-option">
											<h4>Choose Your Courier</h4>
											<div class="courier-box">
												<input type="radio" name="courier">
												<img src="{{asset('images/fedex.png')}}" alt="">
												<p>
													you can still count on the days and time, your's shipment arrive in 2-3 days shipping.
												</p>
											</div>	
											<div class="courier-box">
												<input type="radio" name="courier">
												<img src="{{asset('images/dhl.png')}}" alt="">
												<p>
													you can still count on the days and time, your's shipment arrive in 2-3 days shipping.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="main-wraper stick-widget">
									<div class="cart-summary">
										<h4 class="main-title"><i class="icofont-cart-alt"></i> Cart Summary</h4>
										<ul>
											<li>
												<div>
													<h5>1x Basic Java online Course </h5>
													<p>
														Amazing basic tuts plus course online purchase
													</p>
												</div>
												<span>$29.99</span>
											</li>
											<li>
												<div>
													<h5>1x Basic Java online Course </h5>
													<p>
														Amazing basic tuts plus course online purchase
													</p>
												</div>
												<span>$29.99</span>
											</li>
											<li>
												<div>
													<h5>1x Basic Java online Course </h5>
													<p>
														Amazing basic tuts plus course online purchase
													</p>
												</div>
												<span>$29.99</span>
											</li>
											<li class="grand-total">
												<span>Grand Total</span>
												<i>$102.44</i>
											</li>
										</ul>
										<a href="#" title=""><em>have a discount code?</em></a>
										<a class="main-btn purchase-btn" href="#" title="">Place Order</a>
									</div>
									<div class="useful-info">
										<ul>
											<li>
												<figure><img src="{{asset('images/box-icon1.png')}}" alt=""></figure>
												<div class="info-tag">
													<h4>Streaming box shipping information</h4>
													<p>
														box shipping is the best way for protuct the item and safe reach the destination.
													</p>
												</div>
											</li>
											<li>
												<figure><img src="{{asset('images/box-icon2.png')}}" alt=""></figure>
												<div class="info-tag">
													<h4>Faulty Product, Money Back Gurantee.</h4>
													<p>
														box shipping is the best way for protuct the item and safe reach the destination.
													</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('foooter_styles')
@stop