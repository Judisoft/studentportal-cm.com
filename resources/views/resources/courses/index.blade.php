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
							<div class="search-question">
								<form method="post">
									<input type="text" placeholder="Search Course">
									<button type="submit"><i class="icofont-search-1"></i></button>
								</form>
							</div>
							<div class="col-lg-9">
								<div class="main-wraper">
									<h4 class="main-title">Courses</h4>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-5.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/user1.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Sarah K</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $29</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Wordpress Advanced</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 20 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-2.png')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/user2.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Tania Saed</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $29</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">HTML5 Advanced Lectures</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-3.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>tranding</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/user3.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Fahad Jhon</span>
															<a href="#" title="">Javascript</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $19</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Basic Java Tutorial</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 32 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 26Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-4.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/userlist-1.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Andrew</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $39</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Css3 full video Lectures</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-6.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>Best seller</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/user4.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Bob-Frank</span>
															<a href="#" title="">HTML5</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $49</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">VuJs first learning</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 30 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 20Hrs</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="course">
												<figure>
													<img src="{{asset('images/resources/course-1.jpg')}}" alt="">
													<i class="icofont-book-mark" title="bookmark"></i>
													<em>tranding</em>
													<span class="rate-result"><i class="icofont-star"></i> 4.5</span>
												</figure>
												<div class="course-meta">
													<div class="post-by">
														<figure><img src="{{asset('images/resources/user5.jpg')}}" alt=""></figure>
														<div class="course-cat">
															<span>By: Ahmad</span>
															<a href="#" title="">Javascript</a>
														</div>
													</div>
													<div class="prise">
														<span><i class="icofont-cart-alt"></i> $19</span>
													</div>
													<h5 class="course-title"><a href="course-detail.html" title="">Basic Java Tutorial</a></h5>
													<div class="course-info">
														<span class="lecturez"><i class="icofont-film"></i> 32 Lectures</span>
														<span class="time"><i class="icofont-clock-time"></i> 26Hrs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- courses posts -->
								<div class="load mt-0 mb-5">
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
								</div><!-- pagination -->
								<div class="main-wraper">
									<h4 class="main-title">Categories <a title="" href="#" class="view-all">view all</a></h4>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('images/brand1.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>6 courses<span> 5 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('images/brand5.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>5 courses<span> 3 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('images/brand3.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>2 courses<span> 3 bundles</span></p>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6">
											<div class="categ-card">
												<i><img src="{{asset('images/brand4.png')}}" alt=""></i>
												<div>
													<h6>Html5 Courses</h6>
													<p>4 courses<span> 9 bundles</span></p>
												</div>
											</div>
										</div>
									</div>
								</div><!-- categories -->
								<div class="main-wraper">
									<h4 class="main-title">Recommended Books <a class="view-all" href="#" title="">view all</a></h4>
									
									<div class="books-caro">
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('images/resources/book1.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Html5 Brick Breaker</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('images/resources/book3.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Python Tricks</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('images/resources/book5.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Technology Wants</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('images/resources/book2.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">The Aesthetic Ideology</a>
										</div>
										<div class="book-post">
											<figure><a href="book-detail.html" title=""><img src="{{asset('images/resources/book4.jpg')}}" alt=""></a></figure>
											<a href="book-detail.html" title="">Holy Bible Old</a>
										</div>
									</div>
								</div><!-- books carousel -->
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title"><i class="icofont-flame-torch"></i> Popular Courses</h4>
										<ul class="premium-course">
											<li>
												<figure>
													<img src="{{asset('images/resources/course-5.jpg')}}" alt="">
													<span class="tag">Free</span>
												</figure>
												<div class="vid-course">
													<h5><a href="course-detail.html" title="">Wordpress Online video course</a></h5>
													<ins class="price">$19/M</ins>
												</div>
											</li>
											<li>
												<figure>
													<img src="{{asset('images/resources/course-3.jpg')}}" alt="">
													<span class="tag">Premium</span>
												</figure>
												<div class="vid-course">
													<h5><a href="course-detail.html" title="">Node JS Online video course</a></h5>
													<ins class="price">$29/M</ins>
												</div>
											</li>
										</ul>
									</div><!-- popular courses -->
									<div class="widget">
										<h4 class="widget-title">Popular Books</h4>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book10.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Vu.js 2 Basics</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book9.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Css3 for Bigners</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
										<div class="popular-book">
											<figure><img src="{{asset('images/resources/book5.jpg')}}" alt=""></figure>
											<div class="book-about">
												<h6><a href="#" title="">Technology Wants 2020</a></h6>
												<span>Richard Ali</span>
												<a href="#" title="Book Mark"><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg></i></a>
											</div>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Suggested Communities</h4>
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
										<h4 class="widget-title">Course Contributors</h4>
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
									<div class="widget stick-widget">
										<h4 class="widget-title">Course Statics</h4>
										<div class="statics-event">
											<ol>
												<li><span>125</span><i>Courses</i></li>
												<li><span>536</span><i>Students</i></li>
												<li><span>478</span><i>Teachers</i></li>
											</ol>
										</div>	
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