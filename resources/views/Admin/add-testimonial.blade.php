@php
	if (Session::get('email')) {
		
@endphp
<!DOCTYPE html>
<html>
  <head>
    <title>Weather Forecasting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="{{ url('public/Admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ url('public/Admin/css/styles.css') }}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('public/Admin/vendors/form-helpers/css/bootstrap-formhelpers.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/vendors/select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/Admin/vendors/tags/css/bootstrap-tags.css') }}" rel="stylesheet">

    <link href="{{ url('public/Admin/css/forms.css') }}" rel="stylesheet">

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
	  			<div class="row">
	  				<div class="col-md-10 panel-info">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Add Testimonial</div>
					          
					            <!--<div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>-->
					        </div>
			  				<div class="panel-body">
			  					<form action="{{ route('add-testimonial') }}" method="post" name="testimonial-frm" id="testimonial-frm">
									{!! csrf_field() !!}
									<fieldset>
										<div class="form-group">
											<label>Full Name:</label>
											<input name="full_name" id="full_name" class="form-control" placeholder="Full Name" type="text">
										</div>
										<div class="form-group">
											<label>Email Address</label>
											<input name="email" id="email" class="form-control" placeholder="Email Address" type="email" value="">
										</div>
										<div class="form-group">
											<label>Content</label>
											<textarea name="content" id="content" class="form-control" placeholder="Enter your Testimonial Content" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label>Profile Image</label>
											<input name="image" id="image" type="file" class="btn btn-default" id="exampleInputFile1">
												<p class="help-block">
													This Image will display on website Homepage.
												</p>
										</div>
									</fieldset>
									<div>
										<div class="btn btn-primary">
											<input class="fa fa-save" type="submit" name="submit" id="submit">
										</div>
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>

	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('public/Admin/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/form-helpers/js/bootstrap-formhelpers.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/select/bootstrap-select.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/tags/js/bootstrap-tags.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/mask/jquery.maskedinput.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/moment/moment.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/wizard/jquery.bootstrap.wizard.min.js') }}"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="{{ url('public/Admin/vendors/bootstrap-datetimepicker/datetimepicker.css') }}" rel="stylesheet">
     <script src="{{ url('public/Admin/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="{{ url('public/Admin/js/custom.js') }}"></script>
    <script src="{{ url('public/Admin/js/forms.js') }}"></script>
  </body>
</html>
@php
	}else{
		return redirect('Admin/');
	}
@endphp