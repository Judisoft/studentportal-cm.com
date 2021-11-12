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
								<h4 class="widget-title">Your Next Payouts</h4>
								<div class="card-credit">
									<p>Your payout will be processed on every month of 15th</p>
									<h6>$605.90</h6>
									<span>Payment Method Paypal</span>
									<div class="happy-spend">
										<p><img src="{{asset('images/smiles/smiling.png')}}" alt=""> Happy spending for the Next Month</p>
									</div>
								</div>
							</div>
							<div class="widget">
								<h4 class="widget-title">Saved Cards</h4>
								<div class="set-card">
									<img src="{{asset('images/paypal.png')}}" alt="">
									<p>
										Get paid by credit or debit card
									</p>
									<a class="main-btn" href="#" title="">Set Payment Method</a>
									<div class="added-complete">
										<h6>Added: <span>25 Mar 2020</span></h6>
									</div>
								</div>
							</div>
							<div class="widget">
								<h4 class="widget-title">Payout History</h4>
								<table class="table table-default table-striped">
									<thead>
										<tr>
											<th>Date</th>
											<th>Method</th>
											<th>Amount</th>
										</tr>
									</thead>	
									<tbody>
										<tr>
											<td>Jan, 15</td>
											<td>Paypal</td>
											<td>$549</td>
										</tr>
										<tr>
											<td>Dec, 15</td>
											<td>Paypal</td>
											<td>$980</td>
										</tr>
										<tr>
											<td>Nov, 15</td>
											<td>Paypal</td>
											<td>$1632</td>
										</tr>
										<tr>
											<td>Oct, 15</td>
											<td>Paypal</td>
											<td>$1890</td>
										</tr>
									</tbody>
								</table>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Sales Statement</h4>
							<h6 class="mb-4">You May add your payment method or credits By Credit Cards</h6>
							<ul class="list-crumb">
								<li><a href="#" title="">All Times</a></li>
								<li><a href="#" title="">2020</a></li>
								<li><a href="#" title="">This Month</a></li>
							</ul>
							<table class="table table-default table-responsive-md table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Country</th>
										<th>Product</th>
										<th>item sales</th>
										<th>Earnings</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Thursday, 1</td>
										<td><img src="{{asset('images/flags/001-united-kingdom.png')}}" alt=""></td>
										<td><a href="#" title="">Basic PHP laravel Course</a></td>
										<td>1</td>
										<td>$20.40</td>
									</tr>
									<tr>
										<td>Firday, 2</td>
										<td><img src="{{asset('images/flags/002-united-states.png')}}" alt=""></td>
										<td><a href="#" title="">HTML5 Lates Book</a></td>
										<td>6</td>
										<td>$30.00</td>
									</tr>
									<tr>
										<td>Saturday, 3</td>
										<td><img src="{{asset('images/flags/003-france.png')}}" alt=""></td>
										<td><a href="#" title="">Vu.Js Book by Georg cane</a></td>
										<td>2</td>
										<td>$40.10</td>
									</tr>
									<tr>
										<td>Sunday, 4</td>
										<td><img src="{{asset('images/flags/003-france.png')}}" alt=""></td>
										<td><a href="#" title="">Css3 Advacne Book</a></td>
										<td>5</td>
										<td>$90.99</td>
									</tr>
									<tr>
										<td>Monday, 5</td>
										<td><img src="{{asset('images/flags/004-germany.png')}}" alt=""></td>
										<td><a href="#" title="">Laravel Advance Online</a></td>
										<td>10</td>
										<td>$101.55</td>
									</tr>
									<tr>
										<td>Tuesday, 6</td>
										<td><img src="{{asset('images/flags/005-spain.png')}}" alt=""></td>
										<td><a href="#" title="">Online React Course</a></td>
										<td>20</td>
										<td>$10.55</td>
									</tr>
									<tr>
										<td>Wednesday, 7</td>
										<td><img src="{{asset('images/flags/006-china.png')}}" alt=""></td>
										<td><a href="#" title="">Vu.Js Book by Georg canee</a></td>
										<td>6</td>
										<td>$15.67</td>
									</tr>
									<tr>
										<td>Thursday, 8</td>
										<td><img src="{{asset('images/flags/007-italy.png')}}" alt=""></td>
										<td><a href="#" title="">Laravel Advance Online</a></td>
										<td>10</td>
										<td>$15.67</td>
									</tr>
									<tr>
										<td>Friday, 9</td>
										<td><img src="{{asset('images/flags/008-japan.png')}}" alt=""></td>
										<td><a href="#" title="">Basic PHP laravel Course</a></td>
										<td>16</td>
										<td>$15.67</td>
									</tr>
									<tr>
										<td>Saturday, 10</td>
										<td><img src="{{asset('images/flags/009-brazil.png')}}" alt=""></td>
										<td><a href="#" title="">Laravel Advance Online</a></td>
										<td>13</td>
										<td>$15.67</td>
									</tr>
									<tr>
										<td>Sunday, 11</td>
										<td><img src="{{asset('images/flags/010-south-korea.png')}}" alt=""></td>
										<td><a href="#" title="">Css3 Advacne Book</a></td>
										<td>2</td>
										<td>$15.67</td>
									</tr>
									<tr>
										<td>Monday, 12</td>
										<td><img src="{{asset('images/flags/001-united-kingdom.png')}}" alt=""></td>
										<td><a href="#" title="">Laravel Advance Online</a></td>
										<td>7</td>
										<td>$15.67</td>
									</tr>
									<tr class="total-balnce">
										<td colspan="3">Total</td>
										<td>24</td>
										<td>$605.90</td>
									</tr>
								</tbody>
							</table>
							<p class="manage-payout">How to manage your payment and payouts <a href="#" title="">Click Here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('foooter_styles')
@stop