
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yak - Simple Bill Forecaste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bulma.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<script src="https://code.highcharts.com/highcharts.src.js"></script>
	
</head>
<body>
	
	@include('layouts.navigation')

	@yield('content')

	@include('layouts.footer')
	
	<script type="text/javascript" src="js/app.js"></script>
	

</body>
</html>