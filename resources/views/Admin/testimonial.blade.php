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
					<div class="panel-title">Manage Testimonial</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Email Address</th>
								<th>Content</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
							</tr>
							<tr class="odd gradeX">
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
							</tr>
							<tr class="odd gradeX">
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
							</tr>
							
						</tbody>
					</table>
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
	
    <link href="{{ url('public/Admin/vendors/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('public/Admin/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/datatables/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('public/Admin/vendors/datatables/dataTables.bootstrap.js') }}"></script>

    <script src="{{ url('public/Admin/js/custom.js') }}"></script>
    <script src="{{ url('public/Admin/js/tables.js') }}"></script>
	
  </body>
</html>
@php
	}else{
		return redirect('Admin/');
	}
@endphp