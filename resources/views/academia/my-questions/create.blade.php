@extends('layouts/default')
@section('header_styles')
<link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
@stop

@section('content')
     <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<aside class="sidebar">
							<div class="widget">
								<h4 class="widget-title">Trending courses</h4>
								<div class="recent-media">
									<figure>
										<img src="{{asset('images/resources/course-6.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>Vue.Js Turorial</span>
									</figure>
									<figure>
										<img src="{{asset('images/resources/course-1.jpg')}}" alt="">
										<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=nOCXXHGMezU&amp;feature=emb_title"><i class="icofont-play"></i></a>
										<span>CSS 2020 Tutorials</span>
									</figure>
								</div>
							</div><!-- recent media -->
							<div class="widget">
								<h4 class="widget-title">Questions Analytics</h4>
								<ul class="widget-analytics">
									<li>Reads <span>56</span></li>
									<li>Recommendations <span>3</span></li>
									<li>Shares <span>22</span></li>
									<li>References <span>17</span></li>
								</ul>
							</div><!-- post analytics -->
							
							<div class="widget">
								<h4 class="widget-title">Add Credits</h4>
								<div class="set-card">
									<img src="{{asset('images/paypal.png')}}" alt="">
									<p>
										Add credits to your account
									</p>
									<a class="main-btn" href="#" title="">Set Card</a>
									<div class="added-complete">
										<h6>Added: <span>25 Mar 2020</span></h6>
									</div>
								</div>
							</div>
						</aside>
						
					</div>
					<div class="col-lg-8">
						<div class="main-wraper">
							<h4 class="main-title">Ask Question</h4>
							<h6 class="mb-4">Post a question and get answers</h6>
							<div class="add-credits">
								<form action="{{action('UserQuestionsController@store')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<fieldset class="row merged-10">
										<div class="mb-4 col-lg-6 col-md-6 col-sm-6">
											<input name="title" class="uk-input" type="text" placeholder="Enter question Title" value="{{old('title')}}">
                                            <small class="text-danger" id="title">{{ $errors->first('title', ':message') }}</small>
										</div>
										<div class="uk-margin col-lg-6 mb-4">
											{!! Form::select('question_category_id',$questioncategory ,null, ['class' => 'uk-select','placeholder' => 'select category', 'id'=>'blog_category']) !!}
                                            <small class="text-danger" id="category">{{ $errors->first('question_category_id', ':message') }}</small>
										</div>
										<div class="mb-4 col-lg-12">
											<textarea name="content"  rows="6" class="uk-textarea" id="edit">{{old('content')}}</textarea>
                                            <small class="text-danger" id="title">{{ $errors->first('content', ':message') }}</small>
										</div>
											<div class="mb-4 col-lg-12">
												<label for="tags">To enter multiple tags, press 'Enter' after each tag </label>
												<input name="tags"  class="form-control" placeholder="Tags" data-role="tagsinput" value="{{old('tags')}}">
											</div>
                                        <div class="mt-2 col-lg-12">
                                            <label for="image" class="text-danger">Upload an image? (*maximum file size: 2MB)</label>&nbsp;&nbsp;&nbsp; <input type="file" name="image">
                                            <small class="text-danger" id="image">{{ $errors->first('image', ':message') }}</small>
                                        </div>	
                                        <div class="mt-3 col-lg-12">
                                            <button type="submit" class="button primary circle">Post Question</button>
                                        </div>
									</fieldset>
								</form>
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
        placeholderText: 'Type question content here',
      })
  </script>
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
@stop