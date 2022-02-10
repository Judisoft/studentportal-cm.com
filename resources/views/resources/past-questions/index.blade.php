@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="top-area bluesh high-opacity">
			<div class="bg-image" style="background-image: url(../images/resources/top-bg.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="post-subject">
							<div class="university-tag">
								<div class="Search-result">
									<h4><strong>{{Sentinel::getUser()->institution}} > {{Sentinel::getUser()->department}}</strong></h4>
								</div>
							</div>
							
							<ul class="nav nav-tabs post-detail-btn">
                            	<li class="nav-item"><a class="active" href="#allquests" data-toggle="tab">All Past Questions</a></li>
                                <li class="nav-item"><a class="" href="#normal" data-toggle="tab">Normal Session</a></li>
                                <li class="nav-item"><a class="" href="#ca" data-toggle="tab">Continuos assessment</a></li>
								<li class="nav-item"><a class="" href="#tuts" data-toggle="tab">Tutorials</a></li>
								<li class="nav-item"><a class="" href="#sup" data-toggle="tab">Supplementary questions</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-8">
								<div class="tab-content">
								    <div class="tab-pane fade active show" id="allquests" >
										<div class="main-wraper">
											<h4 class="main-title">Department: {{Sentinel::getUser()->department}}</h4>
											<div class="dept-info">
												<ul>
                                                    @forelse($past_questions as $past_question)
                                                        <li>
                                                            <h6><a href="#" title="">{{$past_question->title}}</a></h6>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                        </li>
                                                    @empty
                                                        <h6>No past question available</h6>
                                                    @endforelse
												</ul>
											</div>
										</div><!-- departments -->
										
								    </div>
								  	<div class="tab-pane fade" id="normal">
								  		<div class="main-wraper">
											<h4 class="main-title">Normal session</h4>
											<div class="dept-info">
												<ul>
                                                    @forelse($normal_sessions as $past_question)
                                                        <li>
                                                            <h6><a href="#" title="">{{$past_question->title}}</a></h6>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                        </li>
                                                    @empty
                                                        <h6>No past question available</h6>
                                                    @endforelse
												</ul>
											</div>
										</div>
									</div>
								  	<div class="tab-pane fade" id="ca">
										
										<div class="main-wraper">
											<h4 class="main-title">Continuose assessment</h4>
											<div class="dept-info">
												<ul>
                                                    @forelse($continuose_assessments as $past_question)
                                                        <li>
                                                            <h6><a href="#" title="">{{$past_question->title}}</a></h6>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                        </li>
                                                    @empty
                                                        <h6>No past continuose assessment questions available</h6>
                                                    @endforelse
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tuts">
										<div class="main-wraper">
											<h4 class="main-title">Tutorials</h4>
											<div class="dept-info">
												<ul>
                                                    @forelse($tutorials as $past_question)
                                                        <li>
                                                            <h6><a href="#" title="">{{$past_question->title}}</a></h6>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                        </li>
                                                    @empty
                                                        <h6>No tutorial questions available</h6>
                                                    @endforelse
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="sup">
										<div class="main-wraper">
											<h4 class="main-title">Supplementary questions</h4>
											<div class="dept-info">
												<ul>
                                                    @forelse($supplementary_questions as $past_question)
                                                        <li>
                                                            <h6><a href="#" title="">{{$past_question->title}}</a></h6>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                            <span>Instructor <i>{{$past_question->instructor}}</i></span>
                                                        </li>
                                                    @empty
                                                        <h6>No past question available</h6>
                                                    @endforelse
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="main-title text-primary">All Questions <span class="float-right pr-3 text-bold">{{$past_questions->count()}}</span></h4><hr>
										<ul class="widget-analytics">
											<li>Normal Sessions <span>{{$normal_sessions->count()}}</span></li>
											<li>Continuose Assessments <span>{{$continuose_assessments->count()}}</span></li>
											<li>Tutorials <span>{{$tutorials->count()}}</span></li>
                                            <li>Supplementary Questions <span>{{$supplementary_questions->count()}}</span></li>
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