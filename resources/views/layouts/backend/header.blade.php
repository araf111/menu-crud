<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Dashboard - Ace Admin</title>
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
	<!-- text fonts -->
	<link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/sweetalert2.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}" />
	<!-- ace styles -->
	<link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
	<style>
		span.frequired{
			color: red;
		}
		.modal-dialog{
			width: 700px !important;
			margin: 30px auto;
		}
		/* .common_class{
			padding:8px;
			display: inline-block;
		} */
		.valid {
			color: green;
		}

		/* Style for invalid input */
		.danger, .error {
			color: red;
		}

		/* Style for error messages */
		.error-message {
			color: red;
			font-size: 0.8em;
		}
		#modal-table .table-header, #modal-menu .table-header, 
		#modal-menu-update .table-header, #modal-update .table-header, #modal-view .table-header{
			padding:15px;
		}

		form.common_class{
			margin:15px !important;
		}
		label{
			font-weight: 600 !important;
		}
		i.ace-icon.fci{
			color:#307ecc !important;
		}

		.nav-list li.active > a {
			background-color: #337ab7;
			color: #fff;
		}
	</style>
	@stack('page-css')
	</head>

	<body class="no-skin">