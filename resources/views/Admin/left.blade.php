<ul class="nav">
	<!-- Main menu -->
	<li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
	<!--<li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
	<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>-->
	<li class="submenu">
		 <a href="#">
			<i class="glyphicon glyphicon-list"></i> Testimonial
			<span class="caret pull-right"></span>
		 </a>
		 <!-- Sub menu -->
		 <ul>
			<li><a href="{{ route('manage-testimonial') }}">Manage</a></li>
			<li><a href="{{ route('add-testimonial') }}">Add New</a></li>
		</ul>
	</li>
	<li><a href="buttons.html"><i class="glyphicon glyphicon-phone"></i>Contact Enquiry</a></li>
	<!--<li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
	<li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>-->
	
</ul>