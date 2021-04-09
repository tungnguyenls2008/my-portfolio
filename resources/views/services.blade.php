@extends('layouts.frontend.frontend')
@section('content')
	<div id="colorlib-page">
        <div id="colorlib-services">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-flex">
                            <div class="one-third">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 animate-box intro-heading">
                                        <span>My Services</span>
                                        <h2>Here Are Some of My Skills</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rotate">
                                            <h2 class="heading">Services</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($skillRepository->model()::all() as $key=>$item)
                                            <div class="services animate-box">
                                                <h3>{{($key+1).' - '.    $item->name}}</h3>
                                                <ul>
                                                    @foreach($skillDetailRepository->model()::all() as $detail)
                                                        @if($detail->skill_id==$item->id)
                                                            <li>{{$detail->detail}}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="one-forth services-img"
                                 style="background-image: url(images/services-img-1.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div id="colorlib-progress">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Skills</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span>Skills</span>
						<h2>My Skills</h2>
					</div>
				</div>
				<div class="row">
			      <div class="col-md-3 col-sm-6 text-center">
			      	<h2 class="progress-head">Graphic Design</h2>
		            <div class="progress blue">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">100%</div>
		            </div>
		         </div>

		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Illustration</h2>
		            <div class="progress yellow">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">85%</div>
		            </div>
		         </div>

		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Front-End Development</h2>
		            <div class="progress pink">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">75%</div>
		            </div>
		         </div>

		         <div class="col-md-3 col-sm-6 text-center">
		         	<h2 class="progress-head">Web Marketing</h2>
		            <div class="progress green">
		                <span class="progress-left">
		                    <span class="progress-bar"></span>
		                </span>
		                <span class="progress-right">
		                    <span class="progress-bar"></span>
		                </span>
		                <div class="progress-value">80%</div>
		            </div>
		         </div>
			   </div>
			</div>
		</div>
        @include('layouts.frontend.testimonies')


		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-pb-sm">
							<div class="row">
								<div class="col-md-10">
									<h2>Let's Talk</h2>
									<p>A small river named Duden flows by their place and supplies.</p>
									<p><a href="#">noah@info.com</a></p>
									<p class="colorlib-social-icons">
										<a href="#"><i class="icon-facebook4"></i></a>
										<a href="#"><i class="icon-twitter3"></i></a>
										<a href="#"><i class="icon-googleplus"></i></a>
										<a href="#"><i class="icon-dribbble2"></i></a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm">
							<h2>Latest Blog</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-1.jpg);"></a>
								<div class="desc">
									<span>February 15, 2018</span>
									<h3><a href="#">Art Gallery in Japan</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-2.jpg);"></a>
								<div class="desc">
									<span>February 9, 2018</span>
									<h3><a href="#">A Japanese Constellation</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-3.jpg);"></a>
								<div class="desc">
									<span>February 15, 2018</span>
									<h3><a href="#">Road Trip</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-pb-sm">
							<h2>Newsletter</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart4" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
@endsection
