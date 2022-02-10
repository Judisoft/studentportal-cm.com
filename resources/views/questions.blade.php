@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="no-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<h4 class="p-3"><a title="" href="{{URL::to('academia/my-questions/create')}}" class="button primary" style="text-decoration:none;">Ask Question</a></h4>
								@forelse($questions as $question)
									<div class="main-wraper">
										<div class="friend-info">
											<h2 class="question-title"><a href="{{ URL::to('questionitem/'.$question->slug) }}" title=""><strong>{{$question->title}}</strong></a></h2>
											<div class="more">
												<div class="more-post-optns">
													<i class=""><svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
													<ul>
														@if(Sentinel::check() && Sentinel::getUser()->id == $question->author->id)
															<li>
																<a href="{{ URL::to('academia/my-questions/' . $question->id . '/edit' ) }}">
																<i class="icofont-pen-alt-1"></i>Edit Question
																<span>Edit this question</span>
																</a>
															</li>
															<li>
																<a class="ask-qst">
																	<i class="icofont-ui-delete"></i>Delete Question
																	<span>Delete this question</span>
																</a>
															</li>
														@else
															<li>
																<i class="icofont-flag"></i>Report
																<span>Inappropriate content</span>
															</li>
														@endif
													</ul>
												</div>
											</div>
											<figure>
												@if(Sentinel::getUser()->pic)
													<img src="{{Sentinel::getUser()->pic}}" alt="">
												@else
													<img src="{{asset('images/no_avatar.png')}}" alt="">
												@endif
											</figure>
											<div class="friend-name">
												<ins><a href="{{URL::to('user/{user_id}/profile')}}" title="">@if(Sentinel::getUser()->full_name == $question->author->full_name) You  @else {{$question->author->full_name}} @endif</a> asked this question</ins>
												<span><i class="icofont-globe"></i> published: {{date("F j, Y, g:i a", strtotime($question->created_at))}}</span>
											</div>
											<div class="question-meta">
												<h5 class="font-weight-normal">{!! $question->content !!}</h5>
												<div class="stat-tools">
													@if(!$question->likedBy(Sentinel::getUser()))
														<div class="box">
															<form action="{{route('questions.likes', $question)}}" method="post">
																@csrf
																<div class="Like">
																	<button type="submit"><i class="icofont-like"></i> Like </button>
																</div>
															</form>
														</div>
													@else
														<div class="box">
															<form action="{{route('questions.likes', $question)}}" method="post">
																@csrf
																@method('DELETE')
																<div class="Unlike">
																	<button type="submit"><i class="icofont-thumbs-down"></i> Unlike</button>
																</div>
															</form>
														</div>
													@endif
													<a title="" href="#" class="comment-to"><i class="icofont-comment"></i> Comment</a>
													<a title="" href="#" class="share-to"><i class="icofont-share-alt"></i> Share</a><br />
													<div class="emoji-state">
														<div class="popover_wrapper">
															<a href="#" title="" class="main-btn"><i class="icofont-thumbs-up"></i> {{$question->likes->count()}}</a>
														</div>
													</div>
													<div class="new-comment" style="display: none;">
														<form method="post">
															<input type="text" placeholder="write comment">
															<button type="submit"><i class="icofont-paper-plane"></i></button>
														</form>
													</div>
												</div>
											</div>	
											<div class="we-video-info">
												<ul>
													<li>
														<span title="views" class="views">
															<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></i>
															<ins>{{$question->views}}</ins>
														</span>
													</li>
													<li>
														<span title="Comments" class="Recommend">
															<i><svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i>
															<ins>{{$question->answers->count()}}</ins>
														</span>

													</li>
													<li>
														<span class="share-pst" title="Share">
															<i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></i>
														<ins>0</ins>
														</span>	
													</li>
												</ul>
												<a href="{{ URL::to('questionitem/'.$question->slug) }}" title="" class="reply"> 
												@if($question->answers->count() > 0)
													<small>{{$question->answers->count()}} {{Str::plural('answer', $question->answers->count())}}</small>
												@else
													<small>Answer this question <i class="icofont-reply"></i></small>
												@endif
												</a>
											</div>
										</div>
									</div>
									@empty
									<h5 class="p-3">No question has been asked yet</h5>
								@endforelse
								<div class="float-right">
									{{$questions->links()}}
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right mt-5">
									<div class="widget">
										<h4 class="widget-title">Recent Questions <a title="" href="#" class="see-all">See All</a></h4>
										@forelse ($latest_questions as $l_question)
											<a href="{{ URL::to('questionitem/'.$question->slug) }}" title=""><i class="icofont-question-circle"></i> {{ $l_question->title }}</a><br />
											@empty
											<small>No recent question</small>
										@endforelse
									</div><!-- recent links -->
									<div class="widget">
										<h4 class="widget-title">Questions Analytics</h4>
										<ul class="widget-analytics">
											<li>Questions asked <span>56</span></li>
											<li>Questions answered <span>3</span></li>
											<li>Categories <span>17</span></li>
										</ul>
									</div><!-- questions analytics -->
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