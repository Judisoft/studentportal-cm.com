@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
    <section>
		<div class="gap no-gap">
			<div class="container-fluid no-pad">
				<div class="row no-gutters">
					<div class="col-lg-2">
						<div class="side-area">
							<ul class="side-links">
								<li><a class="active" href="#" title=""><i class="icofont-video-cam"></i> Live Stream</a></li>
								<li><a href="#" title=""><i class="icofont-calendar"></i> Manage</a></li>
								<li><a href="#" title=""><i class="icofont-camera-alt"></i> Webcam</a></li>
								<li><a href="#" title=""><i class="icofont-gears"></i> Settings</a></li>
								<li><a href="#" title=""><i class="icofont-comment"></i> Feedback</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="screen-area mt-3 pd-20">
							<div id="my_camera"></div>
							<div class="stream-controls">
								<ul>
									<li><i class="icofont-users-alt-3"></i> Participants <span>2</span></li>
									<li><i class="icofont-record"></i> Mute</li>
									<li><i class="icofont-video"></i> Stop video</li>
									<li><i class="icofont-dotcms"></i> Record Video</li>
									<li><i class="icofont-comment"></i> Chat</li>
									<li><i class="icofont-slidshare"></i> Share Screen</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="livestream-chat">
							<div class="livechat-head">
								<h5><i class="icofont-live-support"></i> Live Chat</h5>
								<div class="more">
									<div class="more-post-optns">
										<i class="">
	<svg class="feather feather-more-horizontal" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><circle r="1" cy="12" cx="12"/><circle r="1" cy="12" cx="19"/><circle r="1" cy="12" cx="5"/></svg></i>
										<ul>
											<li>
												<i class="icofont-user-alt-3"></i> Participants
												<span>How many user are live with you</span>
											</li>
											<li>
												<i class="icofont-external-link"></i> Popout chat
												<span>Open chat in new tab</span>
											</li>
											<li>
												<i class="icofont-ban"></i> Hide Chat
												<span>Hide chat from Your side</span>
											</li>
										</ul>
									</div>
								</div>
							</div>	
							<div class="chat-content">
								<div class="date">Wednesday 25, March</div>
								<ul class="chatting-area max-height">
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p>what's liz short for? :)</p>
									</li>
									<li class="me">
										<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
										<p>Elizabeth lol</p>
									</li>
									<li class="me">
										<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
										<p>wanna know whats my second guess was?</p>
									</li>
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p>yes</p>
									</li>
									<li class="me">
										<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
										<p>Disney's the lizard king</p>
									</li>
									<li class="me">
										<figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
										<p>i know him 5 years ago</p>
									</li>
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p>coooooooooool dude ;)</p>
									</li>
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p><img src="images/smiles/heart.png" alt=""></p>
									</li>
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p><img src="images/smiles/smiling.png" alt=""></p>
									</li>
									<li class="you">
										<figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
										<p>hahaahhhahah</p>
									</li>
								</ul>
							</div>
							<form method="post" class="text-bottom">
								<textarea id="emojionearea2" placeholder="wirte someting"></textarea>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="auto-popup">
		<div class="wizard-wrapper">
			<form method="post" id="wizard">
				<!-- SECTION 1 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="images/resources/form-wizard-1.jpg" alt="">
						</div>
						<div class="popup-content">
							<h2>Welcome to Socimo Live Room</h2>
							<span>When do You Want To Go Live</span>
							<div class="box-data">
								<div class="starting-ask selected">
									<i>
<svg height="18px" width="18px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#f00"><path d="M 6.1015625 6.1015625 C 3.5675625 8.6345625 2 12.134 2 16 C 2 19.866 3.5675625 23.365437 6.1015625 25.898438 L 7.5195312 24.480469 C 5.3465312 22.307469 4 19.308 4 16 C 4 12.692 5.3465312 9.6925313 7.5195312 7.5195312 L 6.1015625 6.1015625 z M 25.898438 6.1015625 L 24.480469 7.5195312 C 26.653469 9.6925312 28 12.692 28 16 C 28 19.308 26.653469 22.307469 24.480469 24.480469 L 25.898438 25.898438 C 28.432437 23.365437 30 19.866 30 16 C 30 12.134 28.432437 8.6345625 25.898438 6.1015625 z M 9.6367188 9.6367188 C 8.0077188 11.265719 7 13.515 7 16 C 7 18.485 8.0077187 20.734281 9.6367188 22.363281 L 11.052734 20.947266 C 9.7847344 19.680266 9 17.93 9 16 C 9 14.07 9.7847344 12.319734 11.052734 11.052734 L 9.6367188 9.6367188 z M 22.363281 9.6367188 L 20.947266 11.052734 C 22.215266 12.319734 23 14.07 23 16 C 23 17.93 22.215266 19.680266 20.947266 20.947266 L 22.363281 22.363281 C 23.992281 20.734281 25 18.485 25 16 C 25 13.515 23.992281 11.265719 22.363281 9.6367188 z M 16 12 A 4 4 0 0 0 16 20 A 4 4 0 0 0 16 12 z"/></svg></i>
									<h6>Right Now</h6>
									<p>Get up to live stream now, Don't worry, You have a chance to review setting before live. <a href="#" title="">get help about this</a> </p>
								</div>
								<div class="starting-ask">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
									<h6>Live Later</h6>
									<p>Schedule a stream for a later time. You can even set it up ahead of time. <a href="#" title="">get help about this</a> </p>
								</div>
							</div>
						</div>
					</div>
				</article>

				<!-- SECTION 2 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="images/resources/form-wizard-1.jpg" alt="">
						</div>
						<div class="popup-content">
							<h2>Go live and pick the stream</h2>
							<span>Pick the type of stream for begin</span>
							<div class="box-data">
								<div class="starting-ask selected">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></i>
									<h6>Check Video Came</h6>
									<p>Chek your video came is activated or connect with your computer or not. <a href="#" title="">get help about this</a> </p>
								</div>
								<div class="starting-ask">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg></i>
									<h6>Check Audio & Mic</h6>
									<p>Chek your Audio and microphone is activated or connect with your computer or not. <a href="#" title="">get help about this</a> </p>
								</div>
							</div>
						</div>
					</div>
				</article>

				<!-- SECTION 3 -->
				<h2></h2>
				<article>
					<div class="inner">
						<div class="image-holder">
							<img src="images/resources/form-wizard-1.jpg" alt="">
						</div>
						<div class="popup-content">
							<h2>Go live and pick the stream</h2>
							<span>Pick the type of stream for begin</span>
							<div class="box-data">
								<input type="text" placeholder="Create a title">
								<select>
									<option>Public</option>
									<option>Private</option>
									<option>only friends</option>
								</select>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="chat-live">
									<label for="chat-live" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Allow live Chat</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="commets">
									<label for="commets" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Allow Comments</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
								<div class="seting-mode">
									<input type="checkbox" hidden="hidden" id="schedule">
									<label for="schedule" class="switch"></label>
									<i class="icofont-substitute"></i> <span>Schedule for Later</span>
									<p>Notify me about activity from the profiles I'm subscribed to</p>
								</div>
							</div>
						</div>	
					</div>
				</article>
			</form>
		</div>
	</div><!-- wizard form -->	
	
	<div class="wraper-invite">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></i> Invite Colleagues</h5>
				</div>
				<div class="invitation-meta">
					<p>
						Enter an email address to invite a colleague or co-author to join you on socimo. They will receive an email and, in some cases, up to two reminders.
					</p>
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Email">
						<button type="submit" class="main-btn">Invite</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- invite colleague popup -->
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	<div class="side-slide">
		<span class="popup-closed"><i class="icofont-close"></i></span>
		<div class="slide-meta">
			<ul class="nav nav-tabs slide-btns">
				 <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
				 <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active fade show" id="messages" >
					<h4><i class="icofont-envelope"></i> messages</h4>
					<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
					<ul class="new-messages">
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
				<div class="tab-pane fade" id="notifications">
					<h4><i class="icofont-bell-alt"></i> notifications</h4>
					<ul class="notificationz">
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
			</div>
		</div>
	</div><!-- side slide message & popup -->
	
	<div class="post-new-popup">
		<div class="popup" style="width: 800px;">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>Create New Post</h5>
				</div>
				<div class="post-new">
					<div class="post-newmeta">
						<ul class="post-categoroes">
							<li><i class="icofont-camera"></i> Photo / Video</li>
							<li><i class="icofont-google-map"></i> Post Location</li>
							<li><i class="icofont-file-gif"></i> Post Gif</li>
							<li><i class="icofont-ui-tag"></i> Tag to Friend</li>
							<li><i class="icofont-users"></i> Share in Group</li>
							<li><i class="icofont-link"></i> Share Link</li>
							<li><i class="icofont-video-cam"></i> Go Live</li>
							<li><i class="icofont-sale-discount"></i> Post Online Course</li>
							<li><i class="icofont-read-book"></i> Post A Book</li>
							<li><i class="icofont-globe"></i> Post an Ad</li>
						</ul>
						<form method="post" class="dropzone" action="http://wpkixx.com/upload-target">
							<div class="fallback">
								<input name="file" type="file" multiple />
							</div>
						</form>
					</div>	
					<form method="post" class="c-form">
						<textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
						<div class="activity-post">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>Activity Feed</span></label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="checkbox2" checked>
								<label for="checkbox2"><span>My Story</span></label>
							</div>
						</div>
						<div class="select-box">
							<div class="select-box__current" tabindex="1">
								<div class="select-box__value"><input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
								</div>
								<div class="select-box__value"><input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked" />
									<p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined Groups</p>
								</div>
								<img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon" aria-hidden="true" />
							</div>
							<ul class="select-box__list">
								<li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i> Public</label></li>
								<li><label class="select-box__option" for="1"><i class="icofont-lock"></i> Private</label></li>
								<li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific Friend</label></li>
								<li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only Friends</label></li>
								<li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i> Joined Groups</label></li>
							</ul>
						</div>
						<input class="schedule-btn" type="text" id="datetimepicker" readonly>
						<input type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&amp;t=56s">
						<button type="submit" class="main-btn">Publish</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- New post popup -->
	
	<div class="new-question-popup">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></i> Ask Question</h5>
				</div>
				<div class="post-new">
					<form method="post" class="c-form">
						
						<input type="text" placeholder="Question Title">
						<textarea placeholder="Write Question"></textarea>
						
						<select>
							<option>Select Your Question Type</option>
							<option>Article</option>
							<option>Book</option>
							<option>Chapter</option>
							<option>Code</option>
							<option>conference Paper</option>
							<option>Cover Page</option>
							<option>Data</option>
							<option>Exprement Finding</option>
							<option>Method</option>
							<option>Poster</option>
							<option>Preprint</option>
							<option>Technicial Report</option>
							<option>Thesis</option>
							<option>Research</option>
						</select>
						<div class="uploadimage">
							<i class="icofont-eye-alt-alt"></i>
							<label class="fileContainer">
								<input type="file">Upload File
							</label>
						</div>
						
						<button type="submit" class="main-btn">Post</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- ask question -->
	
	<div class="share-wraper">
		<div class="share-options">
			<span class="close-btn"><i class="icofont-close-circled"></i></span>
			<h5><i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></i>Share To!</h5>
			<form method="post">
				<textarea placeholder="Write Something"></textarea>
			</form>
			<ul>
				<li><a title="" href="#">Your Timeline</a></li>
				<li class="friends"><a title="" href="#">To Friends</a></li>
				<li class="socialz"><a class="active" title="" href="#">Social Media</a></li>
			</ul>
			<div style="display: block;" class="social-media">
				<ul>
					<li><a title="" href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
					<li><a title="" href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
					<li><a title="" href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
					<li><a title="" href="#" class="pinterest"><i class="icofont-pinterest"></i></a></li>
					<li><a title="" href="#" class="youtube"><i class="icofont-youtube"></i></a></li>
					<li><a title="" href="#" class="dribble"><i class="icofont-dribbble"></i></a></li>
					<li><a title="" href="#" class="behance"><i class="icofont-behance-original"></i></a></li>
				</ul>
			</div>
			<div style="display: none;" class="friends-to">
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user1.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Jack Carter</a></h5>
						<span>family member</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user2.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Xang Ching</a></h5>
						<span>Close Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
				<div class="follow-men">
					<figure><img class="mCS_img_loaded" src="images/resources/user3.jpg" alt=""></figure>
					<div class="follow-meta">
						<h5><a href="#" title="">Emma Watson</a></h5>
						<span>Matul Friend</span>
					</div>
					<a href="#" title="">Share</a>
				</div>
			</div>
			<button type="submit" class="main-btn">Publish</button>
		</div>
	</div><!-- share post -->
@stop

@section('foooter_styles')
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
	<script src="{{asset('js/jquery.wizard-init.js')}}"></script>
	<script src="{{asset('js/webcam.min.js')}}"></script>
@stop