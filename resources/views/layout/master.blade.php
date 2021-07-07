<!DOCTYPE html>


<html lang="en" data-textdirection="ltr" class="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="w2ekg1rMy1taJtk7O4c7wZ3jVrYJBNs99tMJVrud">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('vendors')}}images/logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('vendors')}}/css/vendors.min.css" />
<link rel="stylesheet" href="{{asset('vendors')}}/css/ui/prism.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="{{asset('vendors')}}/css/charts/apexcharts.css">
  <link rel="stylesheet" href="{{asset('vendors')}}/css/extensions/toastr.min.css">
  <link rel="stylesheet" href="{{asset('vendors')}}/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" href="{{asset('vendors')}}/css/tables/datatable/responsive.bootstrap.min.css">


<link rel="stylesheet" href="{{asset('css')}}/core.css" />




<link rel="stylesheet" href="{{asset('/css')}}/base/core/menu/menu-types/vertical-menu.css" />
<!-- <link rel="stylesheet" href="{{asset('vendors')}}css/base/core/colors/palette-gradient.css"> -->


  <!-- Page css files -->
  <link rel="stylesheet" href="{{asset('css')}}/base/plugins/charts/chart-apex.css">
  <link rel="stylesheet" href="{{asset('css')}}/base/plugins/extensions/ext-component-toastr.css">
  <link rel="stylesheet" href="{{asset('css')}}/base/pages/app-invoice-list.css">


<link rel="stylesheet" href="{{asset('css')}}/overrides.css" />

<link rel="stylesheet" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}" />
<link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-pickadate.css')}}" />
@yield('css')
<link rel="stylesheet" href="{{asset('css')}}/style.css" />

<title>@yield('title')</title>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating menu-expanded footer-static" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="" style="" data-framework="laravel" data-asset-path="{{asset('vendors')}}">
@include('admin.layout.partials.sidebar')
@include('admin.layout.partials.navBar')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

<!-- BEGIN: Footer-->
@include('admin.layout.partials.footer')


<script src="{{asset('vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
  <!-- vendor files -->
{{--  <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>--}}
  <script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
  <script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/responsive.bootstrap.min.js')}}"></script>

<script src="{{asset('js/core/app-menu.js')}}"></script>
<script src="{{asset('js/core/app.js')}}"></script>
<script src="{{asset('js/core/axios.min.js')}}"></script>
<script src="{{asset('js/scripts/customizer.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>

  <!-- Page js files -->
{{--  <script src="{{asset('js/scripts/pages/dashboard-analytics.js')}}"></script>--}}
@yield('script')

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 16
          , height: 16
        });
      }
    })

  </script>
</body>

</html>
