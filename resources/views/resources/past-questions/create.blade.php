@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-wraper">
							<h4 class="main-title">Upload Past Question</h4>
							<div class="add-credits">
								<form action="{{action('PastQuestionsController@store')}}" method="POST">
									<fieldset class="row merged-10">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
										<div class="uk-margin mb-4 col-lg-6 col-md-6 col-sm-6">
											<select class="uk-select" name="institution">
												<option value="">select institution</option>
                                                @foreach ($institutions as $institution)
                                                    <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                                                @endforeach
											</select>
                                            <small class="text-danger">{{ $errors->first('institution', 'Select an institution') }}</small>
										</div>
										<div class="uk-margin mb-4 col-lg-6 col-md-6 col-sm-6">
											<select class="uk-select" name="department">
												<option value="">select department</option>
                                                @foreach ($user_departments as $user_department)
                                                    <option value="{{$user_department->department}}">{{$user_department->department}}</option>
                                                @endforeach
											</select>
                                            <small class="text-danger">{{ $errors->first('department', 'Select a department') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<input class="uk-input" type="text" name="title" placeholder="Course Title" value="{{old('title')}}">
                                            <small class="text-danger">{{ $errors->first('title', 'Enter course title') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<input class="uk-input" type="text" name="instructor" placeholder="Course Instructor" value="{{old('instructor')}}">
                                            <small class="text-danger">{{ $errors->first('instructor', 'This is a required field') }}</small>
										</div>
										<div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select" name="type">
												<option value="">select question type</option>
												<option value="normal session">Normal Session</option>
												<option value="continuose assessment">Continuose Assessment</option>
												<option value="tutorial">Tutorial</option>
												<option value="supplentary question">Supplemntary Question</option>
											</select>
                                            <small class="text-danger">{{ $errors->first('type', 'Select question type') }}</small>
										</div>
                                        <div class="uk-margin col-lg-4 mb-4">
											<select class="uk-select" name="year">
												<option value="">select year</option>
												<option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
											</select>
                                            <small class="text-danger">{{ $errors->first('year', 'Select year') }}</small>
										</div>
										<div class="mb-4 col-lg-8 col-md-8 col-sm-8">
											<input class="uk-file" type="file" name="question_file" placeholder="Upload file">
                                            <small class="text-danger">{{ $errors->first('question_file', 'Upload question file') }}</small>
										</div>	
                                        <div class="mt-3 col-lg-12">
                                            <button type="submit" class="button primary circle">Upload</button>
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
@stop