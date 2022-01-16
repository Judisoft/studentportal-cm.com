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
							<div class="col-lg-9">
								<div class="main-wraper">
									<h4 class="main-title">
										<i class="">
											<svg class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg')}}"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
										</i> Groups
										<a title="" href="#" class="button success ask-qst" style="text-decoration:none;"><i class="icofont-plus"></i> Create New Group</a>
									</h4>
									<div class="row col-xs-6">
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img alt="" src="{{asset('images/resources/group1.jpg')}}"></figure>
												<a title="" href="#">Sports Punch</a>
												<span>125M Members</span>
												<button>join group</button>F
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group2.jpg')}}" alt=""></figure>
												<a href="#" title="">Asian Girls</a>
												<span>12k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group3.jpg')}}" alt=""></figure>
												<a href="#" title="">Graphic Design</a>
												<span>125M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group4.jpg')}}" alt=""></figure>
												<a href="#" title="">Family Lovers</a>
												<span>1M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group5.jpg')}}" alt=""></figure>
												<a href="#" title="">School Mates</a>
												<span>22M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group6.jpg')}}" alt=""></figure>
												<a href="#" title="">Panama Beach</a>
												<span>5M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group7.jpg')}}" alt=""></figure>
												<a href="#" title="">Online Teching</a>
												<span>52k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group8.jpg')}}" alt=""></figure>
												<a href="#" title="">Child Cares</a>
												<span>1M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group9.jpg')}}" alt=""></figure>
												<a href="#" title="">Fun Art</a>
												<span>35k Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group10.jpg')}}" alt=""></figure>
												<a href="#" title="">Kids Players</a>
												<span>10M Members</span>
												<button>join group</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-4">
											<div class="group-box">
												<figure><img src="{{asset('images/resources/group11.jpg')}}" alt=""></figure>
												<a href="#" title="">Goldi Friends</a>
												<span>14M Members</span>
												<button>join group</button>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="load mb-4">
											<ul class="pagination">
												<li><a title="" href="#"><i class="icofont-arrow-left"></i></a></li>
												<li><a title="" href="#" class="active">1</a></li>
												<li><a title="" href="#">2</a></li>
												<li><a title="" href="#">3</a></li>
												<li><a title="" href="#">4</a></li>
												<li><a title="" href="#">5</a></li>
												<li>....</li>
												<li><a title="" href="#">10</a></li>
												<li><a title="" href="#"><i class="icofont-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-wraper">
									<h4 class="main-title">Recommended</h4>
									<div class="rec-grp-caro">
										<div class="row remove-ext-30">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background2.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar2.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background3.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar3.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background4.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar4.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row remove-ext-30">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background4.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar4.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background2.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar2.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="rec-group">
													<span>Free</span>
													<div class="rec-groupbox">
														<figure><img src="{{asset('images/resources/group-background3.jpg')}}" alt=""></figure>
														<div class="grp-dp"><img src="{{asset('images/resources/group-avatar3.jpg')}}" alt=""></div>
													</div>
													<div class="grp-name">
														<h5><a href="group-detail.html"><i class="icofont-diamond"></i> Jessica Killing <i class="icofont-tick-boxed"></i></a></h5>
														<span>@jessicakilling</span>
														<a href="#" title="Join Group" data-toggle="tooltip"><i class="icofont-star"></i></a>
													</div>
													<div class="more">
														<div class="more-post-optns"><i class="icofont-dotted-down"></i>
															<ul>
																<li><i class="icofont-pen-alt-1"></i>Show Only Free</li>
																<li><i class="icofont-ban"></i>Premium</li>
																<li><i class="icofont-ui-delete"></i>Hide From List</li>
															</ul>
														</div>
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
										<h4 class="widget-title">Your Groups</h4>
										<ul class="ak-groups">
											@foreach ($my_groups as $group)
												<li>
													<figure><img src="{{asset('images/resources/your-group1.jpg')}}" alt=""></figure>
													<div class="your-grp">
														<h5><a href="group-detail.html" title="">{{$group->title}}</a></h5>
														<a href="#" title=""><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
														<a href="group-feed.html" title="" class="promote">view feed</a>
													</div>
												</li>
											@endforeach
										</ul>
									</div><!-- Your groups -->
									<div class="widget">
										<h4 class="widget-title">Suggested Group</h4>
										<div class="sug-caro">
											<div class="friend-box">
												<figure>
													<img alt="" src="{{asset('images/resources/sidebar-info.jpg')}}">
													<span>Members: 505K</span>
												</figure>
												<div class="frnd-meta">
													<img alt="" src="{{asset('images/resources/frnd-figure2.jpg')}}">
													<div class="frnd-name">
														<a title="" href="#">Social Research</a>
														<span>@biolabest</span>

													</div>
													<a class="main-btn2" href="#" title="">Join Community</a>
												</div>
											</div>
											<div class="friend-box">
												<figure>
													<img alt="" src="{{asset('images/resources/sidebar-info2.jpg')}}">
													<span>Members: 505K</span>
												</figure>
												<div class="frnd-meta">
													<img alt="" src="{{asset('images/resources/frnd-figure3.jpg')}}">
													<div class="frnd-name">
														<a title="" href="#">Bio Labest Group</a>
														<span>@biolabest</span>

													</div>
													<a class="main-btn2" href="#" title="">Join Community</a>
												</div>
											</div>
										</div>	
									</div><!-- suggested group -->
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

@section('foooter_styles')
@stop