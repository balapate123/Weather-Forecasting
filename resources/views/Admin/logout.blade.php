@php
	Session::get('email')
	$request->session()->flush();
	return redirect('Admin/');
@endphp