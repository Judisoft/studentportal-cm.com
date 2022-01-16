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
									<p>Your credits will be used to Purchase items from <b>StudentPortal CM</b></p>
									<h6>FCFA 00,00</h6>
								</div>
							</div>
							<div class="widget">
								<h4 class="widget-title">You can fund your account using MTN MoMo of Orange Money</h4>
								<div class="set-card">
									<div class="d-flex flex-row">
										<div class="p-0">
											<img src="{{asset('images/funding/momo.jpeg')}}" >
										</div>
										<div class="p-0">
											<img src="{{asset('images/funding/om.png')}}" >
										</div>
									</div>
								</div>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Add Credits using a Credit or Debit Card</h4>
							<h6 class="mb-4">You May add your payment method or credits By Credit Cards</h6>
							<div class="add-credits">
								<form>
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-12 col-md-12 col-sm-12">
											<input class="uk-input" type="number" min="500" placeholder="Amount">
										</div>
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