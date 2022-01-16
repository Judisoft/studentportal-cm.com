@extends('layouts/default')
@section('header_styles')
<style>
#mainWrapper a{
    text-decoration: none;
}
</style>
@stop

@section('content')
      <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-10">
								<div class="main-wraper" id="mainWrapper">
									<h3 class="main-title">My Questions <a class="button primary text-light" href="{{URL::to('academia/my-questions/create')}}">Ask question</a></h3>
									<div class="editing-interest">
										<div class="notification-box">
											<ul>
                                                @forelse($my_questions as $question)
                                                    <li>
                                                        <a href="{{ URL::to('questionitem/'.$question->slug) }}">
                                                            <figure><img src="{{asset('images/question-circle.svg')}}" alt=""></figure>
                                                            <div class="notifi-meta">
                                                                <p>{{$question->title}}</p>
                                                                <span><i class="fa fa-thumbs-up"></i> {{$question->created_at->diffForHumans()}}</span>
                                                            </div>
                                                            <div class="more">
                                                                <div class="more-post-optns"><i class="icofont-caret-down"></i>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="{{ URL::to('academia/my-questions/' . $question->id . '/edit' ) }}">
                                                                            <i class="icofont-pen-alt-1"></i>Edit Post
                                                                            <span>Edit this question</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="ask-qst">
                                                                                <i class="icofont-ui-delete"></i>Delete Post
                                                                                <span>Delete this question</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @empty
                                                    <h5 class="text-center">You've asked no question yet <br> <a class="button primarytext-center mt-4" href="{{URL::to('academia/my-questions/create')}}">Ask question</a></h5>
                                                @endforelse
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
	</section>
    	
	<div class="new-question-popup">
		<div class="popup" style="width: 500px;">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h4><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 19c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5-17v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712zm-3 4v16h-14v-16h-2v18h18v-18h-2z"/></svg></i> Confirm Delete</h4>
				</div>
				<p class="text-center">Are your sure you want to delete this question? <br> This process is irreversible <br>
					<a class="button danger mt-3" href="{{route('question.delete', $question->id)}}">Delete</a>
				</p>
			</div>
		</div>
	</div><!-- confirm delete question -->
@stop

@section('footer_scripts')
@stop