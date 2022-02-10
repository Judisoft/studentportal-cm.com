@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <div class="theme-layout gray-bg">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
				<div class="invoice">
					<div class="invoice-head">
						<figure><img src="images/logo2.html" alt=""></figure>
						<h6>Invoice</h6>
					</div>
					<div class="invoice-meta">
						<div class="create-date">
							<div class="print-share">
								<a class="print_btn" href="javascript:window.print();"><i class="icofont-print"></i> Print</a>
								<a href="#" title=""><i class="icofont-share-alt"></i> Share</a>
							</div> 
							<ul>
								<li><span>Date :</span> 15 Jan, 2020</li>
								<li><span>Invoice # :</span> IVP54038927</li>
								<li><span>Order ID :</span> 99889900</li>
							</ul>
						</div>
						<div class="invoice-tofrom">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<span>From :</span>
									<ul>
										<li>Socimo(ltd)</li>
										<li>36B Street 45 Sydney, Australia</li>
										<li>Country: Australia</li>
										<li>Company No. 7680</li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<span>To :</span>
									<ul>
										<li>Jhon Doe</li>
										<li>36B Street 45 Newyork, USA</li>
										<li>City: New York</li>
										<li>Country: United States</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="invoice-item">
						<table class="item-tble table table-responsive-sm">
							<thead>
								<tr>
									<th>Item ID</th>
									<th>Qty</th>
									<th>Description</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2345356</td>
									<td>1</td>
									<td>Learn Basic Java Scripts video course online with (Extend Support)</td>
									<td>$26</td>
								</tr>
								<tr>
									<td>2345356</td>
									<td>1</td>
									<td>Html Brick Baker Book with (Extend Support)</td>
									<td>$20</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td>
										<div class="user-total">														
											<div class="totalinv2">Invoice Total : USD <span>$220.00</span></div>
											<p>Paid via Paypal</p>
										</div>
									</td>												
								</tr>
							</tbody>
						</table>
					</div>
					<div class="invoice-footer">
						<h5>Thanks for Buying from Socimo</h5>
						<h6>All amounts shown on this inovice are in US dollors</h6>
						<a href="#" title="">https://wpkixx.com/</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
    
@stop

@section('foooter_styles')
@stop