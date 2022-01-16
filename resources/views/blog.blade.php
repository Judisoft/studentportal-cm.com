@extends('layouts/default')

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<div class="main-wraper">
									<div class="main-title">Blog Posts</div>
                                    @foreach($blogs as $blog)
                                        <div class="blog-posts">
                                            <figure><img src="{{ URL::to('/uploads/blog/'.$blog->image) }}" alt=""></figure>
                                            <div class="blog-post-meta">
                                                <ul>
                                                    <li><i class="icofont-read-book"></i><a title="Reads" href="#">{{$blog->views}}</a></li>
                                                    <li><i class="icofont-comment"></i><a title="comments" href="#">{{$blog->comments->count()}}</a></li>
                                                </ul>
                                                
                                                <h4><a href="{{ URL::to('blogitem/'.$blog->slug) }}">{{$blog->title}}</a></h4>
                                                <p>
                                                    @php echo substr($blog->content, 0, 122); @endphp
                                                </p>
                                                <span><i class="icofont-clock-time"></i> {{$blog->created_at->diffForHumans()}}</span>
                                                <a href="{{ URL::to('blogitem/'.$blog->slug) }}" title="" class="button primary circle">read more</a>
                                            </div>
                                        </div>
                                    @endforeach
									<div class="load mt-5 mb-4">
										<ul class="pagination">
											<li><a href="#" title=""><i class="icofont-arrow-left"></i></a></li>
											<li><a class="active" href="#" title="">1</a></li>
											<li><a href="#" title="">2</a></li>
											<li><a href="#" title="">3</a></li>
											<li><a href="#" title="">4</a></li>
											<li><a href="#" title="">5</a></li>
											<li>....</li>
											<li><a href="#" title="">10</a></li>
											<li><a href="#" title=""><i class="icofont-arrow-right"></i></a></li>
										</ul>
									</div>
								</div>	
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Recent Blogs <a title="" href="#" class="see-all">See All</a></h4>
										<ul class="recent-links">
											<li>
												<figure><img src="images/resources/recentlink-1.jpg" alt=""></figure>
												<div class="re-links-meta">
													<h6><a href="#" title="">Moira's fade reach much farther...</a></h6>
													<span>2 weeks ago </span>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/recentlink-2.jpg" alt=""></figure>
												<div class="re-links-meta">
													<h6><a href="#" title="">Daniel asks The voice of doomfist...</a></h6>
													<span>3 months ago </span>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/recentlink-3.jpg" alt=""></figure>
												<div class="re-links-meta">
													<h6><a href="#" title="">The Socimo over watch scandals.</a></h6>
													<span>1 day before</span>
												</div>
											</li>
										</ul>
									</div><!-- recent links -->
									<div class="widget">
										<h4 class="widget-title">Recent Activity <a class="see-all" href="#" title="">see all</a></h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<span><a href="#" title="">Commented on Your's post </a></span>
													<h6>by <a href="time-line.html">black demon.</a></h6>
													<i>10 hours Ago</i>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<span>
													<a href="#" title="">Adam Gill Like your Post</a></span>
													<i>Yesterday</i>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<span><a href="#" title="">Share a video on Your's timeline.</a></span>
													<h6>"<a href="#">How to Write Content.</a>"</h6>
													<i>2 days Ago</i>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->
									<div class="widget">
										<h4 class="widget-title">Explor Events <a class="see-all" href="#" title="">See All</a></h4>
										<div class="rec-events bg-purple">
											<i class="icofont-gift"></i>
											<h6><a title="" href="#">BZ University good night event in columbia</a></h6>
											<img alt="" src="images/clock.png">
										</div>
										<div class="rec-events bg-blue">
											<i class="icofont-microphone"></i>
											<h6><a title="" href="#">The 3rd International Conference 2020</a></h6>
											<img alt="" src="images/clock.png">
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers" >
											<li>
												<figure><img alt="" src="images/resources/friend-avatar.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar2.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar3.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar4.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar5.jpg"></figure>
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