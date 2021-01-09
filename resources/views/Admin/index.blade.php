@php
	if (Session::get('email')) {
		
@endphp
<!DOCTYPE html>
<html>
  <head>
    <title>Weather Forecasting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ url('public/Admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ url('public/Admin/css/styles.css') }}" rel="stylesheet">
	<link href="{{ url('public/Admin/css/stats.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	@include('Admin.header')
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
				@include('Admin.left')
             </div>
		  </div>
		  <div class="col-md-10">
			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Today's Forecast</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					</div>
				</div>
  				<div class="panel-body">
  					<div id="hero-area" style="height: 230px;"></div>
  				</div>
  			</div>

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">10 Days Forecast</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					</div>
				</div>
  				<div class="panel-body">
  					<div id="hero-graph" style="height: 230px;"></div>
  				</div>
  			</div>

  			<div class="content-box-large" style="display:none;">
  				<div class="panel-heading">
					<div class="panel-title">Morris.js Bar & Donut</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					</div>
				</div>
  				<div class="panel-body">
  					<div class="row">
  						<div class="col-md-6">
  							<div id="hero-bar" style="height: 230px;"></div>
  						</div>
  						<div class="col-md-3">
  							<div id="hero-donut" style="height: 230px;"></div>
  						</div>
  						<div class="col-md-3">
  							<div id="hero-donut2" style="height: 230px;"></div>
  						</div>
  					</div>
  				</div>
  			</div>
			
		  </div>
		</div>
    </div>

    <footer>
        <div class="container">
         
            <div class="copy text-center">
               Copyright 2019 <a href='#'>Website</a>
            </div>
            
        </div>
    </footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('public/Admin/bootstrap/js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ url('public/Admin/vendors/morris/morris.css') }}">
	

    <!--<script src="{{ url('public/Admin/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/flot/jquery.flot.resize.js') }}"></script>-->

    <script src="{{ url('public/Admin/vendors/jquery.knob.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/raphael-min.js') }}"></script>
    <script src="{{ url('public/Admin/vendors/morris/morris.min.js') }}"></script>
	<script src="{{ url('public/Admin/js/custom.js') }}"></script>
	<script src="{{ url('public/Admin/js/stats.js') }}"></script>
	
  </body>
</html>
@php
	}else{
		return redirect('Admin/');
	}
@endphp