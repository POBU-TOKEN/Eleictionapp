<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BB Eskebra | @yield('title')</title>

    <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("assets/vendors/typicons/typicons.css") }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
    <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset("assets/vendors/mdi/css/materialdesignicons.min.css") }}"/>
    <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
  
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow"  style=" max: width 400px;">
        @yield('content')
    </div>
      <!-- base:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset("assets/js/off-canvas.js")}}"></script>
  <script src="{{ asset("assets/js/hoverable-collapse.js") }}"></script>
  <script src="{{ asset("assets/js/template.js") }}"></script>
  <script src="{{ asset("assets/js/settings.js") }}"></script>
  <script src="{{ asset("assets/js/todolist.js") }}"></script>
  <!-- endinject -->
</body>
</html>