
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/favicon.png')}}">
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}"> </head>
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<body>
    @yield('content')
	<script src="{{url('assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{url('assets/js/popper.min.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>