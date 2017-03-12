<head>
    <meta charset="UTF-8">
    <title> ERP | @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.6 -->
  	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  	<!-- Pace style -->
 	<link rel="stylesheet" href="{{ asset('/plugins/pace/pace.min.css') }}">
 	<!-- daterange picker -->
	<link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="{{ asset('/plugins/datepicker/datepicker3.css') }}">
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="{{ asset('/plugins/iCheck/all.css') }}">
	<!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('./plugins/select2/select2.min.css') }}">
  
	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/DataTables/datatables.min.css') }}"/>	  
	
<!-- 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.css"/> -->
 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
	  <!-- Theme style -->
	  <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">
	  
	  
	 <!-- Custom Styling  -->
	 <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
	 

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
