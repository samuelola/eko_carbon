<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="#">

    <title>Eko Carbon @yield('title')</title>
    
	<!-- Vendors Style-->

  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/vendors_css.css') }}">

<!--switch-->

  <link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/vendors_css.css') }}"> 
<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/skin_color.css') }}">

<!--end switch-->
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/htmly/template/vertical-light/src/css/skin_color.css') }}">
  <link rel="stylesheet" href="{{ asset('file.css') }}">  
  <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
  <link rel="stylesheet" href="{{ asset('animate.css') }}">
  <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('gyrocode.css') }}">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> --}}

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('eko/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('eko/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eko/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('eko/site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('eko/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<style>
.tooltip {
  position: relative;
  display: inline-block;
  opacity: 1
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  /* bottom: 150%; */
  top:-90px;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
  font-size: 10px;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}


.box {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
    background-color: #fff;
    border-radius: 5px;
    padding: 0px;
    -webkit-transition: .5s;
    transition: .5s;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
    box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
}

input:focus{
  background-color: transparent !important;
  border-color: #c3c9cd !important;
}


/* .badge {
    display: inline-block;
    padding: 0.35em 0.65em;
    font-size: 0.75em;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    background: #e61212;
    text-decoration: none;
} */

table.dataTable tbody td.select-checkbox:before, table.dataTable tbody th.select-checkbox:before {
    content: " ";
    margin-top: -6px;
    margin-left: -6px;
    border: 1px solid transparent !important;
    border-radius: 3px;
}

table.dataTable tr th.select-checkbox.selected::after {
    
}


table.dataTable tr th.select-checkbox.selected::after {
    content: "✔";
    margin-top: -11px;
    margin-left: -4px;
    text-align: center;
    text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
}
</style>

  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	{{-- <div id="loader"></div> --}}
	
  @include('includes.adminheader')
  
  @include('includes.adminsidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
	
  @include('includes.adminfooter')


  <!-- Side panel -->   
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script src="{{ asset('/htmly/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('/htmly/assets/icons/feather-icons/feather.min.js') }}"></script>
		
	<script src="{{ asset('/htmly/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	
	<script src="{{ asset('/htmly/template/vertical-light/src/js/vendors.min.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/chat-popup.js') }}"></script>
  <script src="{{ asset('/htmly/assets/icons/feather-icons/feather.min.js') }}"></script>	
  <script src="{{ asset('/htmly/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/htmly/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>

  <!--switch-->

  <script src="/htmly/template/vertical-light/src/js/vendors.min.js"></script>
	<script src="/htmly/template/vertical-light/src/js/pages/chat-popup.js"></script>
    <script src="/htmly/assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="/htmly/template/vertical-light/src/js/demo.js"></script>
	<script src="/htmly/template/vertical-light/src/js/template.js"></script>

  <!--end switch-->

	<script src="{{ asset('/htmly/template/vertical-light/src/js/demo.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/template.js') }}"></script>
	<script src="{{ asset('/htmly/template/vertical-light/src/js/pages/dashboard.js') }}"></script>

  <script src="sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="{{ asset('/htmly/assets/vendor_components/datatable/datatables.min.js') }}"></script>

  <script src="{{ asset('/htmly/template/vertical-light/src/js/pages/data-table.js') }}"></script>
  
  <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
  <!--datatable-->
  <script src="{{ asset('gyrocode.js') }}"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  

  <!-- Long Content Scroll Modal -->
  

@yield('script')


</body>


</html>
