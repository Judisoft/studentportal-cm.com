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
							<div class="col-lg-8">
								<div class="main-wraper">
									<h3 class="main-title">All Notifications</h3>
									<div class="editing-interest">
										<div class="notification-box">
											<ul>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span><i class="fa fa-thumbs-up"></i> 30 mints ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled" title="Remove"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar2.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Sarah Hetfield commented on your photo. </p>
														<span><i class="fa fa-comment"></i> 1 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar3.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span><i class="fa fa-comment"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar4.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Motel Pitnik invited you to attend to his event Goo & Gotham Bar. </p>
														<span><i class="fa fa-address-card"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar5.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Chris Greyson liked your profile status. </p>
														<span><i class="fa fa-thumbs-up"></i> 1 day ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>You and Nicholas Grissom just became friends. Write on his wall. </p>
														<span><i class="fa fa-user"></i> 2 days ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar3.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span><i class="fa fa-comment"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar4.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>Motel Pitnik invited you to attend to his event Goo & Gotham Bar. </p>
														<span><i class="fa fa-address-card"></i> 2 hours ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled"></i>
												</li>
												<li>
													<figure><img src="{{asset('images/resources/friend-avatar.jpg')}}" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span><i class="fa fa-thumbs-up"></i> 30 mints ago</span>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-caret-down"></i>
															<ul>
																<li><i class="icofont-volume-mute"></i> Mute</li>
																<li><i class="icofont-flag"></i> Report</li>
																<li><i class="icofont-ban"></i> Block</li>
															</ul>
														</div>
													</div>
													<i class="del icofont-close-circled" title="Remove"></i>
												</li>
											</ul>
										</div>
										<div class="sp sp-bars"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<aside class="sidebar static right">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('footer_scripts')
@stop