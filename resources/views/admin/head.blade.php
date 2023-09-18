<!doctype html>
<html lang="en" dir="ltr">
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="dashboard, admin, bootstrap admin template, codeigniter, php, php framework, codeigniter 4, php mvc, php codeigniter, best php framework, codeigniter admin, codeigniter dashboard, admin panel template, bootstrap 4 admin template, bootstrap dashboard template"/>

                <!-- Title -->
        <title> {{$page_title}}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('backend/img/brand/favicon.png') }}" type="image/x-icon"/>

        <!-- Bootstrap css-->
        <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

        <!-- Icons css -->
        <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{ asset('backend/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

        <!-- P-scroll bar css-->
        <link href="{{ asset('backend/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

        <!--  Left-Sidebar css -->
        <link rel="stylesheet" href="{{ asset('backend/css/sidemenu.css') }}">

        <!-- Style css -->
        <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/style-dark.css') }}" rel="stylesheet">

        
		<!-- Maps css -->
		<link href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

	
        <!-- Skinmodes css -->
        <link href="{{ asset('backend/css/skin-modes.css') }}" rel="stylesheet" />

        <!-- Animations css -->
        <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">

        <!---Switcher css-->
        <link href="{{ asset('backend/switcher/css/switcher.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/switcher/demo.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
		<link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}{{url('/')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>


</head>