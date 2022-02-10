@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="no-gap">
			<div class="container">
				<div class="search-question">
					<div class="restop-search">
						<span class="hide-search"><i class="icofont-close-circled"></i></span>
						<form method="post">
							<input type="text" placeholder="Search...">
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-9">
								<h4 class="p-3"><a title="" href="{{URL::to('academia/my-questions/create')}}" class="button primary" style="text-decoration:none;">Ask Question</a></h4>
								<div class="main-wraper">
									<div class="friend-info border-bottom">
										<h2 class="question-title"><a href="{{ URL::to('questionitem/'.$question->slug) }}" title="">{{$question->title}}</a></h2>
											<div class="more">
												<div class="more-post-optns">
													<i class=""><svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
													<ul>
                                                        @if(Sentinel::getUser()->id == $question->author->id)
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
											<h5 class="p-3">
                                                {!! $question->content !!}
											</h5>
											<ul class="tags">
                                                @forelse($question->tags as $tag)
                                                    <li><a href="{{ URL::to('question/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a></li>
                                                @empty
                                                    <small>No Tags available for this question</small>
                                                @endforelse
											</ul>
										</div>	
									</div>
									<div class="anser ">
										<i class="icofont-check-circled" title="Best Answer"></i>
										@foreach ($question->answers as $answer)
											<div class="friend-info border-bottom">
												<div class="more">
													<div class="more-post-optns">
														<i class=""><svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
														<ul>
															<li>
																<i class="icofont-pen-alt-1"></i>Edit Answer
																<span>Edit this answer</span>
															</li>
															<li>
																<i class="icofont-ui-delete"></i>Delete Answer
																<span>Delete this answer</span>
															</li>
															<li>
																<i class="icofont-flag"></i>Report
																<span>Inappropriate content</span>
															</li>
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
													<ins><a href="{{URL::to('user/{user_id}/profile')}}" title="">@if(Sentinel::getUser()->full_name == $answer->name) You  @else {{$answer->name}} @endif</a> answered this question</ins>
													<span><i class="icofont-globe"></i> published: {{date("F j, Y, g:i a", strtotime($answer->created_at))}}</span>
												</div>
												<div class="question-meta">
													<div class="alert alert-primary border-5 border-primary">
														<h4 class="text-dark"><b>{!! $answer->answer !!}</b></h4>
													</div>
													<div class="stat-tools">
													@if(!$answer->likedBy(Sentinel::getUser()))
														<div class="box">
															<form action="{{route('answers.vote', $answer)}}" method="post">
																@csrf
																<div class="Like">
																	<button type="submit"><i class="icofont-like"></i> Like </button>
																</div>
															</form>
														</div>
													@else
														<div class="box">
															<form action="{{route('answers.vote', $answer)}}" method="post">
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
															<a href="#" title="" class="main-btn"><i class="icofont-arrow-up"></i>&nbsp;{{$answer->vote_answers->count()}}</a>
															<a href="#" title="" class="main-btn"><i class="icofont-arrow-down"></i> 0</a>
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
											</div>
										@endforeach
										
                                        <h4>Your Answer</h4>
                                        <form action="{{action('QuestionController@storeAnswer', $question)}}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <fieldset class="row merged-10">
                                                <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
                                                    <input name="name" class="uk-input" type="hidden" value="{{Sentinel::getUser()->full_name}}">
                                                </div>
                                                <div class="uk-margin col-lg-6 mb-4">
                                                    <input name="email" class="uk-input" type="hidden" value="{{Sentinel::getUser()->email}}">
                                                </div>
                                                <div class="mb-4 col-lg-12">
                                                    <textarea name="answer"  rows="6" class="uk-textarea" id="edit">{{old('content')}}</textarea>
                                                    <small class="text-danger" id="title">{{ $errors->first('answer', ':message') }}</small>
                                                </div>
                                                <div class="mt-2 col-lg-12">
                                                    <label for="answer_image" class="text-danger">Upload an image? (*maximum file size: 2MB)</label>&nbsp;&nbsp;&nbsp; <input type="file" name="answer_image">
                                                    <small class="text-danger" id="image">{{ $errors->first('image', ':message') }}</small>
                                                </div>	
                                                <div class="mt-3 col-lg-12">
                                                    <button type="submit" class="button primary circle">Post Answer</button>
                                                </div>
                                            </fieldset>
                                        </form>
									</div>	
								</div>
								<div class="main-wraper">
									<h4 class="main-title">How to answer questions</h4>
									<ul class="related-qst">
                                        
									</ul>
								</div>
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget stick-widget">
										<h4 class="widget-title"><strong>Related Questions</strong> <a title="" href="#" class="see-all">See All</a></h4>
										<hr>
										@foreach ($related_questions as $question)
											<a href="{{ URL::to('questionitem/'.$question->slug) }}" title=""><i class="icofont-question-circle"></i> {{ $question->title }}</a><br />
										@endforeach
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
<script>
      new FroalaEditor("textarea#edit", {
        toolbarButtons: [ ['bold', 'italic', 'underline', 'fontSize', 'fontFamily'], ['paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent'], ['insertLink', 'insertImage', 'undo', 'redo', 'html'] ],
        placeholderText: 'Type answer here',
      })
  </script>
@stop