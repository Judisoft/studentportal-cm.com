@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<aside class="sidebar">
							<div class="widget">
								<h4 class="widget-title">Credit Balance</h4>
								<div class="card-credit">
									<p>Your credits will be using on Purchasing items from <b>Sociomo</b></p>
									<h6>$500</h6>
									<span>added via Paypal</span>
									
								</div>
							</div>
							<div class="widget">
								<h4 class="widget-title">Saved Cards</h4>
								<div class="set-card">
									<img src="{{asset('images/paypal.png')}}" alt="">
									<p>
										Get paid by credit or debit card
									</p>
									<a class="main-btn" href="#" title="">Edit Card</a>
									<div class="added-complete">
										<h6>Added: <span>25 Mar 2020</span></h6>
									</div>
								</div>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Add Credits</h4>
							<h6 class="mb-4">You May add your payment method or credits By Credit Cards</h6>
							<div class="add-credits">
								<form>
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Holder Name">
										</div>
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Card Number">
										</div>
										<div class="mb-4 uk-margin col-lg-4">
											<select class="uk-select">
												<option>Expiration Month</option>
												<option>January</option>
												<option>February</option>
												<option>March</option>
											</select>
										</div>
										<div class="mb-4 col-lg-4 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="Expiration Year">
										</div>
										<div class="mb-4 col-lg-4 col-md-6 col-sm-6">
											<input class="uk-input" type="text" placeholder="CVC Number">
										</div>
										<div class="mt-3 col-lg-12">
											<button type="submit" class="button primary circle">Save Changes</button>
										</div>	
									</fieldset>
								</form>
								<p>
									<b>Special Note:</b>
									"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,
								</p>
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