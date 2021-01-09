<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ url('public/Admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ url('public/Admin/css/styles.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Wheather Forecast Admin</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
						<form name="login-form" id="login-form" action="Admin/Dashboard" method="post">
			                <h6>Login</h6>
			                <input class="form-control" name="email" id="email" type="text" placeholder="E-mail address">
			                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
							{!! csrf_field() !!}
			                <div class="action">
								<input class="btn btn-primary signup" type="submit" name="submit" id="submit" value="Login">
			                    <!--<a  href="index.html"></a>-->
			                </div>
						</form>
			            </div>
			        </div>
			        <div class="already">
			            <a href="signup.html">Forgot Password?</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('public/Admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/Admin/js/custom.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> 
	<style>
	.error {
      color: red;
	  width: 100%;
	  float: left;
	}
	</style>
	<script>
	jQuery('#login-form').validate({
	  rules: {
		email: {
		  required: true,
		  email: true,
		},
		password: {
		  required: true,
		}
	  },
	  messages: {
		email: 'Enter a valid Email !',
		password: 'This field is required !'
	  }
	});
	</script>
  </body>
</html>