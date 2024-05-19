<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php
    $template = App\Models\Template::where('id','<>','~')->first();
  @endphp
  <title>{{$template->nama}}</title>
  <meta name="description" content="{{ asset($template->meta_desc) }}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('layout/skydash/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('layout/skydash/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset($template->logo_kecil) }}" />
  <link rel="stylesheet" href="{{ asset('layout/skydash/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/skydash.css') }}">

</head>
<body>
@section('content')        

@show
  <!-- container-scroller -->
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- plugins:js -->
  <script src="{{ asset('layout/skydash/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('layout/skydash/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('layout/skydash/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('layout/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('layout/skydash/js/off-canvas.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/template.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/settings.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('layout/skydash/js/dashboard.js') }}"></script>
  <script src="{{ asset('layout/skydash/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ asset('js/global.js') }}"></script>
  <script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js'></script>
  <script>
      $(document).ready(function(){
      
      });

      function modalImage(titlemodal,link) {
          $('#modal-title-image').html(titlemodal);
          $('#modal-body-image').attr('src',link);
          $('#modal-body-href').attr('href',link);
          $('#modal-image').modal('show');
      }
  </script>
  <!-- End custom js for this page-->
  @section('footer')        

  @show
</body>

</html>

