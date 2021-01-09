<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    
<!-- Mirrored from wowthemez.com/templates/bling/demos/video/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jul 2018 03:26:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
       
        <title>Weather</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="{{ url('public/img/favicon.ico') }}">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ url('public/css/font-awesome.min.css') }}">
        <!-- Line Icons CSS -->
        <link rel="stylesheet" href="{{ url('public/css/lineicons.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ url('public/css/venobox/venobox.css') }}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
        <!-- Slick CSS -->
		<link rel="stylesheet" href="{{ url('public/js/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ url('public/js/slick/slick-theme.css') }}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ url('public/css/responsive.css') }}">

        <script src="{{ url('public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
		
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="60">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id='preloader' >
            <div class='loader' >
                <img src="{{ url('public/img/preloader.gif') }}" width="60" alt="">
            </div>
        </div><!-- Preloader -->
        
		@include('header')
		
<section id="home" class="hero_section" data-property="{videoURL:'pvjQpxUwgRI',containment:'self',autoPlay:true, mute:true, startAt:7, opacity:1, showControls:false, ratio:'16/9', quality: 'hd720', showYTLogo: false }">
		    <!-- lOc_7RGoeEg -->
			<div class="hero_inner">
		        <div id="particles-js">
					<canvas class="particles-js-canvas-el" width="1349" height="397" style="width: 100%; height: 100%;"></canvas>
				</div>
				<div class="hero_content">
		            <h1 class="text-white">Weather Forecasting</h1>
		            <p class="mb-25 text-white">Know what the Weather will be</p>
		            <p class="mb-25 text-white" style="width: 50%;text-align: center;margin-left: 26%;">Accurate 10 Days Weather Forecast within India. We provide detailed Weather Forecast over a 10 days period. Our interactive weather maps can be customized to show forecasts of temperature, weather and wind.</p>
		        </div>
		        <!--<div class="hero_bottom hidden-xs">
		            <img src="img/hero-bottom.png" alt="Hero Banner">
		        </div>-->
		    </div>
		</section><!-- Hero Section -->
		
		<div>
			<!-- Promo Section -->
			<div class="dl_moc_2 wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
			<div class="subscribe_wrap">
				<!-- Search Location -->
				<form action="#" class="subscribe_form">
					<input type="text" name="location" id="subs-email" class="form_input" placeholder="Search Locaton...">
					<button type="submit" class="submit">Search</button>
					<div class="clearfix"></div>
				</form>
			</div>
			<div id="location"></div>
			</div>
			
			<!-- Map Div -->
			<section class="screenshot_section padding">
				<div class="map-div" id="map">
				</div>
			</section>
		</div>
		
		<section id="statistics" class="services_section padding">
           <!-- /.service_moc -->
            <div class="container" style="padding-right: 0px;padding-left: 0px; width: 100%;">
                <div class="section_heading align-center mb-40">
                    <h2>Know more about Weather</h2>
                    <p>Accurate 10 Days Weather Forecast within India. We provide detailed Weather Forecast over a 10 days period.</p>
                </div><!-- /.section_heading -->
                <div class="row" style="width: 100%;margin-right: 0px; margin-left: 0px;">
                    <div class="col-sm-12 col-xs-12 xs-padding">
						<div id="myChart" class="dl_moc_2 wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1000ms"></div>
                    </div>
                </div>
            </div>
        </section><!-- /.service_section -->
		<!-- Chart Description Section -->
		<section id="pricing" class="pricing_section padding">
            <div class="container">
                <!-- /.section_heading -->
                <ul class="pricing_tables">
                    <li class="col-md-3 col-xs-6">
                        <div class="pricing_content align-center">
                            <div class="pricing_head">
                                <h4 class="title">Sunny</h4>
                                <img src="{{ url('public/img/sunny.png') }}" height="60px">
                            </div>
                            <ul class="pricing_feature">
                                <li>Temprature 28<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                                <li>Wind 16.2km/h</li>
                                <li>24/7 Support NW</li>
                                <li>Real feel 26<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                            </ul>
                            <div class="pricing_footer">
                                <a href="#" class="lg_btn">Read More...</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-xs-6">
                        <div class="pricing_content align-center">
                            <div class="pricing_head">
                                <h4 class="title">Rainy</h4>
                                <img src="{{ url('public/img/rainy.png') }}" height="60px">
                            </div>
                            <ul class="pricing_feature">
                                <li>Temprature 10<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                                <li>Wind 16.2km/h</li>
                                <li>24/7 Support NW</li>
                                <li>Real feel 11<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                            </ul>
                            <div class="pricing_footer">
                                <a href="#" class="lg_btn">Read More...</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-xs-6">
                        <div class="pricing_content align-center">
                            <div class="pricing_head">
                                <h4 class="title">Snow</h4>
                                <img src="{{ url('public/img/snow.png') }}" height="60px">
                            </div>
                            <ul class="pricing_feature">
                                <li>Temprature 15<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                                <li>Wind 16.2km/h</li>
                                <li>24/7 Support NW</li>
                                <li>Real feel 16<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                            </ul>
                            <div class="pricing_footer">
                                <a href="#" class="lg_btn">Read More...</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3 col-xs-6">
                        <div class="pricing_content align-center">
                            <div class="pricing_head">
                                <h4 class="title">Storm</h4>
                                <img src="{{ url('public/img/thunderstorms.png') }}" height="60px">
                            </div>
                            <ul class="pricing_feature">
                                <li>Temprature 12<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                                <li>Wind 16.2km/h</li>
                                <li>24/7 Support NW</li>
                                <li>Real feel 11<span class="wob_t" style="display:inline" aria-label="°Celsius" aria-disabled="true" role="button">°C</span></li>
                            </ul>
                            <div class="pricing_footer">
                                <a href="#" class="lg_btn">Read More...</a>
                            </div>
                        </div>
                    </li>
                </ul><!-- /.pricing_tables -->
            </div>
        </section><!-- /.pricing_section -->
		<!-- / Chart Description Section -->
		<section id="testimonial" class="testimonial_section padding">
			<ul id="testimonial_carousel" class="testimonial_items">
				<li class="testimonial_item">
					<figure>
						<img src="{{ url('public/img/testimonial.jpg') }}" alt="Client">
					</figure>
					<h4>Jonathan Smith</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, tenetur ratione <br> asperiores voluptatibus in iste quam sed ex inventore omnis.</p>
				</li>
				<li class="testimonial_item">
					<figure>
						<img src="{{ url('public/img/testimonial.jpg') }}" alt="Client">
					</figure>
					<h4>Jonathan Smith</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, tenetur ratione <br> asperiores voluptatibus in iste quam sed ex inventore omnis.</p>
				</li>
				<li class="testimonial_item">
					<figure>
						<img src="{{ url('public/img/testimonial.jpg') }}" alt="Client">
					</figure>
					<h4>Jonathan Smith</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, tenetur ratione <br> asperiores voluptatibus in iste quam sed ex inventore omnis.</p>
				</li>
			</ul>
		</section><!-- Testimonial Section -->
		
		<section id="download" class="download_section padding">
			<div class="container">
				
				<div class="col-md-8">
					<div class="dl_content">
						<h2 class="text-white"></h2>
						<p style="height:100px;"></p>
						<!--<div class="btn_group">
							<a href="#" class="lg_btn wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"><i class="icon-apple"></i> App Store</a>
							<a href="#" class="lg_btn wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"><i class="icon-android"></i> Play Store</a>
						</div>-->
					</div>
				</div>
			</div>
		</section><!-- Download Section -->

		<section id="subscribe" class="subscribe_section padding">
            <div class="container">
                <div class="section_heading mb-40 align-center">
                   <h2>Subscribe To feature Updates</h2>
                   <p>Get up to date with the weather information anytime anywhere.</p>
               </div><!-- /.section_heading -->
               <div class="subscribe_wrap">
                    <form action="#" class="subscribe_form">
                        <input type="email" name="email" id="subs-email" class="form_input" placeholder="Enter Your Email Address...">
                        <button type="submit" class="submit">Subscribe</button>
                        <div class="clearfix"></div>
                        <div id="subscribe-result">
                            <p class="subscription-success"></p>
                            <p class="subscription-error"></p>
                        </div>
                    </form>
                </div><!-- /.subscribe_wrap -->
                <ul class="social_link">
                     <li><a href="#"><i class="icon-facebook"></i></a></li>
                     <li><a href="#"><i class="icon-twitter"></i></a></li>
                     <li><a href="#"><i class="icon-tumblr"></i></a></li>
                     <li><a href="#"><i class="icon-google-plus"></i></a></li>
                     <li><a href="#"><i class="icon-instagram"></i></a></li>
                     <li><a href="#"><i class="icon-pinterest"></i></a></li>
                </ul>
            </div>
        </section><!-- /.subscribe_section -->

        <footer class="footer_section">
            <p>&copy; 2019 Accurate Weather</p>
        </footer><!-- /.footer_section -->
        
        <a data-scroll href="#home" id="scroll-to-top"><i class="lnr lnr-chevron-up"></i></a>
	
		<!-- jQuery Lib -->
        <script src="{{ url('public/js/vendor/jquery-1.12.4.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ url('public/js/vendor/bootstrap.min.js') }}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{ url('public/js/vendor/owl.carousel.min.js') }}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{ url('public/js/vendor/smooth-scroll.min.js') }}"></script>
		<!-- SaseScroll JS -->
		<script src="{{ url('public/js/vendor/jquery.easeScroll.js') }}"></script>
		<!-- Slick -->
		<script type="text/javascript" src="{{ url('public/js/jquery-migrate-1.2.1.min.js') }}"></script>
		<script src="{{ url('public/js/slick/slick.min.js') }}"></script>
		<!-- Venobox JS -->
		<script src="{{ url('public/js/vendor/venobox.min.js') }}"></script>
        <!-- Ajaxchimp JS -->
        <script src="{{ url('public/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Particles JS -->
        <script src="{{ url('public/js/vendor/particles.min.js') }}"></script>
		<!-- wow JS -->
        <script src="{{ url('public/js/vendor/wow.min.js') }}"></script>
        
		<!-- App JS -->
        <script src="{{ url('public/js/vendor/app.js') }}"></script>
		<!-- YTPlayer JS -->
        <script src="{{ url('public/js/vendor/jquery.mb.YTPlayer.min.js') }}"></script>
		<!-- Main JS -->
		<script src="{{ url('public/js/main.js') }}"></script>
		<script src="{{ url('public/js/map.js') }}"></script>
		
		<script src="{{ url('public/js/chart.js') }}"></script>
		<script>
			zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
			ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
		</script>
		
		<script>
    zingchart.THEME = "classic";
    var myConfig = {
      "type": "line",
      "background-color": "#2C2C39",
      "utc": true,
      "title": {
        "y": "7px",
        "text": "Weather Forecasting",
        "background-color": "#2C2C39",
        "font-size": "24px",
        "font-color": "white",
        "height": "25px"
      },
      "plotarea": {
        "margin": "20% 8% 14% 12%",
        "background-color": "#2C2C39"
      },
      "legend": {
        "layout": "float",
        "background-color": "none",
        "border-width": 0,
        "shadow": 0,
        "text-align": "middle",
        "offsetY": 35,
        "align": "center",
        "item": {
          "font-color": "#f6f7f8",
          "font-size": "14px"
        }
      },
      "scale-x": {
        "min-value": 1383292800000,
        "shadow": 0,
        "step": 3600000,
        "line-color": "#f6f7f8",
        "tick": {
          "line-color": "#f6f7f8"
        },
        "guide": {
          "line-color": "#f6f7f8"
        },
        "item": {
          "font-color": "#f6f7f8"
        },
        "transform": {
          "type": "date",
          "all": "%D, %d %M<br />%h:%i %A",
          "guide": {
            "visible": false
          },
          "item": {
            "visible": false
          }
        },
        "label": {
          "visible": false
        },
        "minor-ticks": 0
      },
      "scale-y": {
        "values": "0:70:10",
        "line-color": "#f6f7f8",
        "shadow": 0,
        "tick": {
          "line-color": "#f6f7f8"
        },
        "guide": {
          "line-color": "#f6f7f8",
          "line-style": "dashed"
        },
        "item": {
          "font-color": "#f6f7f8"
        },
        "label": {
          "text": "Page Views",
          "font-color": "#f6f7f8"
        },
        "minor-ticks": 0,
        "thousands-separator": ","
      },
      "crosshair-x": {
        "line-color": "#f6f7f8",
        "plot-label": {
          "border-radius": "5px",
          "border-width": "1px",
          "border-color": "#f6f7f8",
          "padding": "10px",
          "font-weight": "bold"
        },
        "scale-label": {
          "font-color": "#00baf0",
          "background-color": "#f6f7f8",
          "border-radius": "5px"
        }
      },
      "tooltip": {
        "visible": false
      },
      "plot": {
        "tooltip-text": "%t views: %v<br>%k",
        "shadow": 0,
        "line-width": "3px",
        "marker": {
          "type": "circle",
          "size": 3
        },
        "hover-marker": {
          "type": "circle",
          "size": 4,
          "border-width": "1px"
        }
      },
      "series": [{
        "values": [
          35.2,37.3,38.7,34.1,32.6,38.6,33,36.5,30.7,33.4,39.5,30.1,39.4,35.4,40.8,42,39.9,31.3,38,31.2,37.5,32.2,30,34.1,34.7,37,38.3,39.4,40.1,43.2,41.1,44.6,40.5,28.9,38.9,40.4,29.7,30.8,35.4,37.4
        ],
        "text": "API Data",
        "line-color": "#ff0055",
        "legend-marker": {
          "type": "circle",
          "size": 5,
          "background-color": "#ff0055",
          "border-width": 1,
          "shadow": 0,
          "border-color": "#ff3377"
        },
        "marker": {
          "background-color": "#ff0055",
          "border-width": 1,
          "shadow": 0,
          "border-color": "#ff3377"
        }
      }, {
        "values": [
          34.2,34.3,39.7,35.1,36.6,36.6,35,36.5,33.7,32.4,40.5,32.1,31.4,39.4,44.8,45,39.9,37.3,39,35.2,31.5,30.2,36,37.1,36.7,39,45.3,42.4,41.1,39.2,40.1,43.6,39.5,29.9,35.9,42.4,33.7,35.8,34.4,39.4
        ],
        "text": "Prediction",
        "line-color": "#009872",
        "legend-marker": {
          "type": "circle",
          "size": 5,
          "background-color": "#009872",
          "border-width": 1,
          "shadow": 0,
          "border-color": "#69f2d0"
        },
        "marker": {
          "background-color": "#009872",
          "border-width": 1,
          "shadow": 0,
          "border-color": "#69f2d0"
        }
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig
    });
  </script>
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGD7bUo1x_GaaGg2kC1lacd5QHnoRHTS8&callback=initMap"
    async defer></script>
		</body>
</html>