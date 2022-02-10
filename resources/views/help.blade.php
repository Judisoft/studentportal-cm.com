@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap no-bottom help-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="search-section">
							<a href="#" title=""><i class="icofont-home"></i> Back to Home</a>
							<h1>How can we help you?</h1>
							<form method="post">
								<input type="text" placeholder="Describe Your Issue">
								<button><i class="icofont-search"></i></button>
							</form>
							<p>
								The effortless support team is available for you 24/7.
							</p>
						</div>
					</div>
				</div>
			</div>
			<figure class="bottom-image"><img src="images/bg-4.png" alt=""></figure>
		</div>
	</section>
	
	<section>
		<div class="gap">
			<div class="container">
				<div class="row" id="page-contents">
					<div class="col-lg-9">
						<div class="main-wraper">
							<h4 class="main-title">Brows Help Topics</h4>
							<div class="row col-xs-6">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-gears"></i></span>
										<a href="#" title="">Your Account Settings</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-legal"></i></span>
										<a href="#" title="">Legal & Privacy</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-building"></i></span>
										<a href="#" title="">Business & Websites</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-fix-tools"></i></span>
										<a href="#" title="">Fix a Problem</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-safety"></i></span>
										<a href="#" title="">Safety & Standards</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="help-topic">
										<span><i class="icofont-shopify"></i></span>
										<a href="#" title="">Shopping on Socimo</a>
									</div>
								</div>
							</div>
						</div>
						<div class="main-wraper">
							<h4 class="main-title">FAQ'S</h4>
							<p>
								<i class="icofont-question-circle"></i> What are you struggling right now, what we can help with?
							</p>
							<div class="question-collaps">
								<div id="accordion">
								  <div class="card">
									<div class="card-header" id="headingOne">
									  <h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										  Collapsible Group Item #1
										</button>
									  </h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									  <div class="card-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
										<ul class="help-qst">
											<li><a href="#" title="">Can't login to Socimo</a></li>
											<li><a href="#" title="">Account settings</a></li>
											<li><a href="#" title="">Edit Account Name</a></li>
											<li><a href="#" title="">Following and unfollowing</a></li>
											<li><a href="#" title="">Logout from Socimo</a></li>
											<li><a href="#" title="">Deactive or close your account</a></li>
										</ul>
									  </div>
									</div>
								  </div>
								  <div class="card">
									<div class="card-header" id="headingTwo">
									  <h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										  Collapsible Group Item #2
										</button>
									  </h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									  <div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									  </div>
									</div>
								  </div>
								  <div class="card">
									<div class="card-header" id="headingThree">
									  <h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										  Collapsible Group Item #3
										</button>
									  </h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									  <div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar static right">
							<div class="widget">
								<h4 class="widget-title">Ask Research Question?</h4>
								<div class="ask-question">
									<i class="icofont-question-circle"></i>
									<h6>Ask questions in Q&amp;A to get help from experts in your field.</h6>
									<a title="" href="#" class="ask-qst">Ask a question</a>
								</div>
							</div>
							<div class="widget stick-widget">
								<h4 class="widget-title">Popular Articles</h4>
								<ul class="pop-articles">
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Can't login to Socimo</a></li>
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Account settings</a></li>
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Edit Account Name</a></li>
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Following and unfollowing</a></li>
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Logout from Socimo</a></li>
									<li><i class="icofont-dotted-right"></i><a href="#" title="">Deactive/close your account</a></li>
								</ul>
							</div>
						</aside>	
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('foooter_styles')
@stop