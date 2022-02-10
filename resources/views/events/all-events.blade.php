@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Popular Books</h4>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book10.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Vu.js 2 Basics</a></h6>
												<span>Richard Ali</span>
												<a href="#" title=""><i class="icofont-book-mark"></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book9.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Css3 for Bigners</a></h6>
												<span>Richard Ali</span>
												<a href="#" title=""><i class="icofont-book-mark"></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book5.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Technology Wants 2020</a></h6>
												<span>Richard Ali</span>
												<a href="#" title=""><i class="icofont-book-mark"></i></a>
											</div>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Ask Research Question?</h4>
										<div class="ask-question">
											<i class="icofont-question-circle"></i>
											<h6>Ask questions in Q&A to get help from experts in your field.</h6>
											<a class="ask-qst" href="#" title="">Ask a question</a>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
										<div class="rec-events bg-purple">
											<i class="icofont-gift"></i>
											<h6><a title="" href="#">BZ University good night event in columbia</a></h6>
											<img alt="" src="{{asset('images/clock.png')}}">
										</div>
										<div class="rec-events bg-blue">
											<i class="icofont-microphone"></i>
											<h6><a title="" href="#">The 3rd International Conference 2020</a></h6>
											<img alt="" src="{{asset('images/clock.png')}}">
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers" >
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar2.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar3.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar4.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="{{asset('images/resources/friend-avatar5.jpg')}}"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Allen</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
										</ul>	
									</div>
								</aside>
							</div>
							<div class="col-lg-9">
								<ul class="nav nav-tabs about-btn mb-4">
									<li class="nav-item"><a class="active" href="#posts" data-toggle="tab">All</a></li>
									<li class="nav-item"><a class="" href="#pictures" data-toggle="tab">Today</a></li>
									<li class="nav-item"><a class="" href="#videos" data-toggle="tab">Tomorrow</a></li>
									<li class="nav-item"><a class="" href="#videos" data-toggle="tab">This Week</a></li>
									<li class="nav-item"><a class="" href="#videos" data-toggle="tab">This weekend</a></li>
									<li class="nav-item"><a class="" href="#videos" data-toggle="tab">Next Week</a></li>
								</ul>
								<div class="main-wraper">
									<div class="main-title">Browse Events</div>
									<ul class="event-browse">
										<li class="red">
											<i class="icofont-artichoke"></i>
											<span>Arts</span>
										</li>
										<li class="blue">
											<i class="icofont-heart-beat"></i>
											<span>Causes</span>
										</li>
										<li class="yellow">
											<i class="icofont-film"></i>
											<span>Film</span>
										</li>
										<li class="green">
											<i class="icofont-video-cam"></i>
											<span>Entertainment</span>
										</li>
										<li class="purpal">
											<i class="icofont-fast-food"></i>
											<span>Food</span>
										</li>
										<li class="orang">
											<i class="icofont-kid"></i>
											<span>Children's</span>
										</li>
										<li class="pink">
											<i class="icofont-heart"></i>
											<span>Marriage</span>
										</li>
									</ul>
								</div>
								<div class="main-wraper">
									<div class="main-title">Daily Recommendations</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post1.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>Happening Now</span>
													<h6><a href="event-detail.html" title="">Exhibition of Music</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post2.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>July, 15 2021</span>
													<h6><a href="event-detail.html" title="">Defensive Driving</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post3.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>August, 10 2021</span>
													<h6><a href="event-detail.html" title="">Meetup for Covid-19</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post4.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>Sep, 10 2021</span>
													<h6><a href="event-detail.html" title="">Funda with Sunday</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post5.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>July, 10 2021</span>
													<h6><a href="event-detail.html" title="">First Women Day</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag')}}"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post6.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>Oct, 11 2021</span>
													<h6><a href="event-detail.html" title="">Tomotto Festival</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post7.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>jan, 11 2021</span>
													<h6><a href="event-detail.html" title="">Merathan Race 2021</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post4.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>Sep, 10 2021</span>
													<h6><a href="event-detail.html" title="">Funda with Sunday</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6">
											<div class="event-post mb-3">
												<figure><a href="event-detail.html" title=""><img src="{{asset('images/resources/event-post1.jpg')}}" alt=""></a></figure>
												<div class="event-meta">
													<span>Happening Now</span>
													<h6><a href="event-detail.html" title="">Exhibition of Music</a></h6>
													<p>Some description about the event write here.</p>
													<a class="classic-btn" href="#" title="">Interested</a>
													<div class="more">
														<div class="more-post-optns">
															<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
															<ul>
																<li>
																	<i class="icofont-share-alt"></i>Share to Feed
																	<span>Share This Post to Friends</span>
																</li>
																<li>
																	<i class="icofont-ui-text-chat"></i>Send Message
																	<span>Send This in messages, groups</span>
																</li>
																<li>
																	<i class="icofont-ui-delete"></i>Delete Post
																	<span>If inappropriate Post By Mistake</span>
																</li>
																<li>
																	<i class="icofont-flag"></i>Report
																	<span>Inappropriate content</span>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('foooter_styles')
@stop