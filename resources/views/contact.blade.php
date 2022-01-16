@extends('layouts/default')
@section('header_styles')

@stop

@section('content')
<section>
    <div class="gap">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <div class="main-wraper">
                        <div class="feedback-form">
                            <h4 class="main-title">Contact Us</h4>
                            <form class="mt-4" action="{{action('ContactsController@storeContact')}}" method="POST">
                                    <!-- CSRF Token -->
                    				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <fieldset class="row">
                                    <div class="mb-4 col-lg-6">
                                        <input class="uk-input" type="text" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <input class="uk-input" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="mb-4 uk-margin col-lg-12">
                                       <input class="uk-input" type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="mb-4 uk-margin col-lg-12">
                                        <select class="uk-select" name="country">
                                            <option>Select Country</option>
                                            <option value="us">USA</option>
                                            <option>UK</option>
                                            <option>UAE</option>
                                        </select>
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <input class="uk-input" name="email" type="text" placeholder="Email Address">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <input class="uk-input" name="telephone" type="telephone" placeholder="Telephone">
                                    </div>
                                    <div class="mb-4 col-lg-12">
                                        <input class="uk-input" name="institution" type="text" placeholder="Institution">
                                    </div>
                                    
                                    <div class="mb-4 col-lg-12">
                                        <textarea class="uk-textarea" rows="4" name="message" placeholder="What can we help your with?"></textarea>
                                    </div>
                                    <div class="mb-0 col-lg-12 text-center">
                                        <button type="submit" class="main-btn">Send Message</button>
                                    </div>	
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <aside class="sidebar static right">
                        <div class="widget widget-stick">
                            <h4 class="widget-title">We are reachable via</h4>
                            <ul class="company-posts">
                                <li>
                                    <figure><h2><i class="icofont-phone-circle"></i></h2></figure>
                                    <div class="position-meta">
                                        <h6><a href="#" title="">Telephone</a></h6>
                                        <a href="#" title="">(+237) 672-076-995</a>
                                        <span>call us</span>
                                    </div>
                                </li>
                                <li>
                                    <figure><h2><i class="icofont-email"></i></h2></figure>
                                    <div class="position-meta">
                                        <h6><a href="#" title="">Email</a></h6>
                                        <a href="#" title="" class="text-lowercase">contact@studentportal-cm.com</a>
                                    </div>
                                </li>
                                <li>
                                    <figure><h2><i class="icofont-location-pin"></i></h2></figure>
                                    <div class="position-meta">
                                        <h6><a href="#" title="">Head Office</a></h6>
                                        <a href="#" title="" class="text-lowercase">Yaounde, Cameroon</a>
                                        <span>visit us</span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- contacts -->
                        <div class="widget">
                            <h4 class="widget-title">Social Media</h4>
                            <ul class="socials">
                                <li class="facebook">
                                    <i class="icofont-facebook"></i><a href="#" title=""><span>4.5k</span> Likes</a>
                                </li>
                                <li class="twitter">
                                    <i class="icofont-twitter"></i><a href="#" title=""><span>2.3M</span> Followers</a>
                                </li>
                                <li class="google">
                                    <i class="icofont-instagram"></i><a href="#" title=""><span>8.2M</span> Followers</a>
                                </li>
                            </ul>
                        </div><!-- socials-->
                    </aside>	
                </div>
            </div>  
	    </div>
	</div>
</section>
@stop

@section('footer_scripts')
@stop
