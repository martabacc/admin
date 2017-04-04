<!DOCTYPE html>
<html>
<head>

	  @include('includes.header')
		@yield('custom-head')

		<style>
			#pamer{
				height:50%;
			}
		</style>
</head>
<body id="top" class="scrollspy">

	@include('includes.preloader')

	@include('includes.navigation')

		<div class="section no-pad">
		    <div class="fluid-container pamer">
						<div class="center slider">
							<ul class='slides no-pad' style='height:100%!important'>
								<li>
									<img src='{{ url("karya/faisal/Poster/tes.png")}}'>
								</li>
								<li>
									<img src='{{ url("karya/faisal/Poster/Poster.jpg")}}'>
								</li>
							</ul>
					</div>
		    </div>
		</div>
		<!--Perkenalan intro, visi misi -->
		<div id="intro" class="section scrollspy">
		    <div class="container">
		        <div class="row">
		            <div  class="col s12">
		                <h2 class="center header text_h2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem <span class="span_h2"> laoreet quis.</span> </h2>
		            </div>

		            <div  class="col s12 m4 l4">
		                <div class="center promo promo-example">
		                    <i class="mdi-image-flash-on"></i>
		                    <h5 class="promo-caption">Speeds up development</h5>
		                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
		                </div>
		            </div>
		            <div class="col s12 m4 l4">
		                <div class="center promo promo-example">
		                    <i class="mdi-social-group"></i>
		                    <h5 class="promo-caption">User Experience Focused</h5>
		                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		                </div>
		            </div>
		            <div class="col s12 m4 l4">
		                <div class="center promo promo-example">
		                    <i class="mdi-hardware-desktop-windows"></i>
		                    <h5 class="promo-caption">Fully responsive</h5>
		                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<!--Portofolio , contohnya -->
		<div class="section scrollspy" id="work">
		    <div class="container">
		        <div class="row s12 m12 l12">
				        <h2 class="header text_b"> What We Do </h2>
		            <div class="col s12 m4 l4">
		                <div class="card">
		                    <div class="card-image waves-effect waves-block waves-light">
		                        <img class="activator" src="{{ url('assets/material')}}/img/project1.jpg">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">Desain Poster <i class="mdi-navigation-more-vert right"></i></span>
		                        <p><a href="#">Lihat kreasi desain poster kami disini</a></p>
		                    </div>
		                    <div class="card-reveal">
		                        <span class="card-title grey-text text-darken-4">Poster Design <i class="mdi-navigation-close right"></i></span>
		                        <p>Poster yang <i>eye-catchy</i> untuk publikasi acara/<i>event</i>. Lihat poster-poster kreasi kami <a>disini</a>.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col s12 m4 l4">
		                <div class="card">
		                    <div class="card-image waves-effect waves-block waves-light">
		                        <img class="activator" src="{{ url('assets/material')}}/img/project2.jpeg">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">3D Modelling <i class="mdi-navigation-more-vert right"></i></span>
		                        <p><a href="#">Lihat kreasi 3D Modelling kami disini </a></p>
		                    </div>
		                    <div class="card-reveal">
		                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
		                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col s12 m4 l4">
		                <div class="card">
		                    <div class="card-image waves-effect waves-block waves-light">
		                        <img class="activator" src="{{ url('assets/material')}}/img/project6.jpeg">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">Video <i class="mdi-navigation-more-vert right"></i></span>
		                        <p><a href="#">Lihat video buatan kami <a>disini</a></p>
		                    </div>
		                    <div class="card-reveal">
		                        <span class="card-title grey-text text-darken-4">Video <i class="mdi-navigation-close right"></i></span>
		                        <p>Kami melayani jasa pembuatan video untuk berbagai kepentingan, misalnya publikasi acara, promosi, kepentingan lomba, dll. Lihat kreasi video buatan kami <a href="">disini</a></p>
		                    </div>
		                </div>
		            </div>``
		        </div>
		    </div>
		</div>

		<div class="section scrollspy" id="team">
		    <div class="container">
		        <h2 class="header text_b"> Our Team </h2>
		        <div class="row">
		            <div class="col s12 m3">
		                <div class="card card-avatar">
		                    <div class="waves-effect waves-block waves-light">
		                        <img class="activator" src="{{url('owner/safi.png')}}">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">Flash <br/>
		                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
		                        <p>
		                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
		                                <i class="fa fa-facebook-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
		                                <i class="fa fa-twitter-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
		                                <i class="fa fa-google-plus-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
		                                <i class="fa fa-linkedin-square"></i>
		                            </a>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <div class="col s12 m3">
		                <div class="card card-avatar">
		                    <div class="waves-effect waves-block waves-light">
		                        <img class="activator" src="{{url('owner/gali.jpg')}}">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">Cat Woman<br/>
		                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
		                        </span>
		                        <p>
		                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
		                                <i class="fa fa-facebook-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
		                                <i class="fa fa-twitter-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
		                                <i class="fa fa-google-plus-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
		                                <i class="fa fa-linkedin-square"></i>
		                            </a>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <div class="col s12 m3">
		                <div class="card card-avatar">
		                    <div class="waves-effect waves-block waves-light">
		                        <img class="activator" src="{{url('owner/rona.jpg')}}">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">
		                            Ronauli S <br/>
		                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
		                        <p>
		                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
		                                <i class="fa fa-facebook-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
		                                <i class="fa fa-twitter-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
		                                <i class="fa fa-google-plus-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
		                                <i class="fa fa-linkedin-square"></i>
		                            </a>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <div class="col s12 m3">
		                <div class="card card-avatar">
		                    <div class="waves-effect waves-block waves-light">
		                        <img class="activator" src="img/avatar4.png">
		                    </div>
		                    <div class="card-content">
		                        <span class="card-title activator grey-text text-darken-4">CMO<br/>
		                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
		                        <p>
		                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
		                                <i class="fa fa-facebook-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
		                                <i class="fa fa-twitter-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
		                                <i class="fa fa-google-plus-square"></i>
		                            </a>
		                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
		                                <i class="fa fa-linkedin-square"></i>
		                            </a>
		                        </p>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		<!--Footer-->

				@include('includes.footer')
    <!--  Scripts-->
    <script src="{{ url('assets/material')}}/min/plugin-min.js"></script>
    <script src="{{ url('assets/material')}}/min/custom-min.js"></script>
    <!-- <script src="{{ url('assets/js/jquery.fullpage.min.js')}}"></script> -->


			<script type="text/javascript">
					$(document).ready(function() {
						$('.slider').slider({
							indicators: false,

							});

						 $('.modal-trigger').leanModal();
					});
			</script>
    </body>
</html>
