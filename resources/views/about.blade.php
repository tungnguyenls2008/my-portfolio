@extends('layouts.frontend.frontend')

@section('content')

	<div id="colorlib-page">
        <div id="colorlib-about">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">About</h2>
                </div>
                <div class="row">
                    <div class="col-md-5 animate-box">
                        <div class="owl-carousel3">
                            <?php
                            $activated=$aboutMeV2Repository->model()::where('activated',1)->get()->toArray();
                            $image_about=$uploadRepository->model()::where('belongs_to_id',$activated[0]['id'])->get()->toArray();
                            ?>
                            @foreach($image_about as $item)
                                <div class="item">
                                    <img class="img-responsive about-img" src="{{asset($item['uri'])}}"
                                         alt="html5 bootstrap template by colorlib.com">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1 animate-box">
                        <div class="about-desc">
                            <div class="owl-carousel3">
                                <div class="item">
                                    <h2>
                                        <span>{{$aboutMeV2Repository->model()::where('activated',1)->value('first_name')}}</span><span>{{$aboutMeV2Repository->model()::where('activated',1)->value('last_name')}}</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>I'm</span><span>A {{$aboutMeV2Repository->model()::where('activated',1)->value('occupation')}}</span></h2>
                                </div>
                            </div>
                            <div class="desc">
                                <div class="rotate">
                                    <h2 class="heading">About</h2>
                                </div>
                                <p>{{$aboutMeV2Repository->model()::where('activated',1)->value('description')}}</p>
                                <p class="colorlib-social-icons">
                                    <a href="#"><i class="icon-facebook4"></i></a>
                                    <a href="#"><i class="icon-twitter3"></i></a>
                                    <a href="#"><i class="icon-googleplus"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                </p>
                                <p><a href="#" class="btn btn-primary btn-outline">Contact Me!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-services">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Goals</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="services-flex">
							<div class="one-third">
								<div class="row">
									<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
										<span>Target</span>
										<h2>Goals</h2>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="rotate">
											<h2 class="heading">Goals</h2>
										</div>
									</div>
									<div class="col-md-12">
										<div class="services animate-box">
											<h3>1 - High Quality Theme</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
										<div class="services animate-box">
											<h3>2 - Customer Satisfaction</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
										<div class="services animate-box">
											<h3>3 - Well Mentained Sites</h3>
											<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="one-forth services-img" style="background-image: url(images/services-img-1.jpg);">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('layouts.frontend.testimonies')

	</div>
@endsection

