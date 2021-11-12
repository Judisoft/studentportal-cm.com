@extends('layouts/default')

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="offset-lg-1 col-lg-10">
						<div class="blog-detail">
							<div class="blog-title">
								<h2>Compare Prices Find The Best Computer Accessory</h2>
							</div>
							<div class="blog-details-meta">
								<figure><img src="{{ URL::to('/uploads/blog/'.$blog->image) }}" alt=""></figure>
								<ul>
									<li><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i> {{$blog->views}}</li>
									<li><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>{{$blog->created_at->diffForHumans()}}</li>
								</ul>
								<p>{{$blog->content}}</p>
								<div class="tag-n-cat">
									<div class="tags">
										<span><i class=""><span><i class=""><svg class="feather feather-tag" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line y2="7" x2="7" y1="7" x1="7"/></svg></i></span></i> Post Tags:</span>
										<a title="" href="#">News</a>
										<a title="" href="#">ideas</a>
										<a title="" href="#">collection</a>
										<a title="" href="#">exclusive</a>
										<a title="" href="#">features</a>
									</div>
									<div class="tags">
										<span><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg></i> Post Categories:</span>
										<a title="" href="#">News</a>
										<a title="" href="#">ideas</a>
										<a title="" href="#">collection</a>
										<a title="" href="#">exclusive</a>
										<a title="" href="#">features</a>
									</div>
								</div>
							</div>
							<div class="next-prev-posts">
								<div class="prev">
									<a href="#" title="">
										<i class="icofont-curved-double-left"></i>
										<div class="translate">
											<span>previous</span>
											<p>Quisque et bibendum urna, eget consequat sapien.</p>
										</div>	
									</a>
								</div>
								<div class="next">
									<a href="#" title="">
										<i class="icofont-curved-double-right"></i>
										<div class="translate">
											<span>Next</span>
											<p>Quisque et bibendum urna, eget consequat sapien.</p>
										</div>	
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop