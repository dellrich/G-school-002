
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>G-School </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
	<!-- icons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
    	<!-- steps -->
	<link rel="stylesheet" href="{{asset('assets/plugins/steps/steps.css')}}">
	<!-- inbox style -->
	<link href="{{asset('assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/js/pages/select2-4.1.0-rc.0/dist/css/select2.min.css')}}">
	<!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/login.css')}}">
	<link href="{{asset('assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />

	<!-- data tables -->
	<link rel="stylesheet" href="{{asset('assets/plugins/flatpicker/css/flatpickr.min.css')}}" />
	<link href="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css')}}" rel="stylesheet"
		type="text/css" />
	<!-- Theme Styles -->

	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />

    {{-- biem --}}
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('Dashbord/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('Dashbord/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Dashbord/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Dashbord/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Dashbord/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('Dashbord/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('Dashbord/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('Dashbord/css/style.css') }}" rel="stylesheet">
   {{-- notify Mycustom css file  --}}
 <link rel="stylesheet" href="{{ asset('ysnotify/toastr.min.css') }}">
    {{-- biem --}}

    @livewireStyles
</head>
<!-- END HEAD -->

<body>

   {{-- @yield('content') --}}
    <div class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
        <div class="page-wrapper">
            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner ">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="index.html">
                            <span class="logo-icon material-icons fa-rotate-45">school</span>
                            <span class="logo-default">G-school</span> </a>
                    </div>
                    <!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
                    </ul>
                    <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">

                        </div>
                    </form>
                    <!-- start mobile menu -->
                    <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- end mobile menu -->
                    <!-- start header menu -->
                    <x-top-menu/>

                </div>
            </div>
            <!-- end header -->
            <!-- start color quick setting -->

            <!-- end color quick setting -->
            <!-- start page container -->
            <div class="page-container">
                <!-- start sidebar menu -->
                <x-sidebar/>

                <!-- end sidebar menu -->
                <!-- start page content -->

                @yield('content')


                <!-- end page content -->
                <!-- start chat sidebar -->

                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <!-- start footer -->
            {{-- <div class="page-footer">
                <div class="page-footer-inner"> 2022 &copy; DWS
                  
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div> --}}
            <!-- end footer -->
        </div>
    </div>
  	<!-- start js include path -->
	<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/popper/popper.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/plugins/feather/feather.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}"></script>
    <!-- data tables -->
	<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('assets/js/pages/table/table_data.js')}}"></script>

	<script src="{{asset('assets/plugins/flatpicker/js/flatpicker.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/date-time/date-time.init.js')}}"></script>

	<!-- Common js-->
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('assets/js/layout.js')}}"></script>
	<script src="{{asset('assets/js/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
	<!--apex chart-->
	<script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/js/pages/chart/apex/home-data.js')}}"></script>
	<!-- summernote -->
	<script src="{{asset('assets/plugins/summernote/summernote.js')}}"></script>
	<script src="{{asset('assets/js/pages/summernote/summernote-data.js')}}"></script>
	<!-- end js include path -->

    <!-- start js include path -->
	<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/js/pages/validation/form-validation.js')}}"></script>
    <script src="{{asset('assets/js/pages/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/select2-4.1.0-rc.0/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/steps/jquery.steps.js')}}"></script>
	<script src="{{asset('assets/js/pages/steps/steps-data.js')}}"></script>
    <script src="{{ asset('Dashbord/js/jquery-3.6.min.js') }}"  type="text/javascript"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('Dashbord/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Dashbord/vendor/echarts/echarts.min.js') }}"></script>

    {{-- js for sweetallert --}}
    <script src="{{ asset('sweetal/sweetalert2@11.js') }}"></script>

    {{-- pour le dropdown --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('Dashbord/js/main.js') }}"></script>

    {{-- my jspour la validate --}}
    <script src="{{ asset('Dashbord/js/myjs.js') }}"></script>

    {{-- link tabledit --}}
  <script src="{{ asset('Dashbord/js/tabledit.min.js') }}"  type="text/javascript" defer></script>





    @yield('scripts')

    @livewireScripts

</body>

</html>
