<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    $template = App\Models\Template::where('id','<>','~')->first();
  ?>
  <title><?php echo e($template->nama); ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('layout/skydash/vendors/feather/feather.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('layout/skydash/vendors/ti-icons/css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('layout/skydash/vendors/css/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('layout/skydash/css/vertical-layout-light/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset($template->logo_kecil)); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/skydash.css')); ?>">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset($template->logo_besar)); ?>" alt="logo"></a>
              </div>
              <h4>Login Administrator</h4>
              <!-- <h6 class="font-weight-light">Login untuk melanjutkan.</h6> -->
              <form class="pt-3" method="post" id="formLogin">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg username" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">MASUK</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <!-- <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label> -->
                  </div>
                  <!-- <a href="<?php echo e(url('lupapassword')); ?>" class="auth-link text-black">Lupa password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <!-- <div class="text-center mt-4 font-weight-light">
                  Belum punya akun? <a href="<?php echo e(url('buatakun')); ?>" class="text-primary">Buat Akun</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('layout/skydash/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('layout/skydash/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('layout/skydash/js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('layout/skydash/js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('layout/skydash/js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('layout/skydash/js/todolist.js')); ?>"></script>
  <!-- endinject -->

  <!-- jQuery -->
<script src="<?php echo e(asset('layout/adminlte3/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('layout/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- jquery-validation -->
<script src="<?php echo e(asset('layout/adminlte3/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('layout/adminlte3/plugins/jquery-validation/additional-methods.min.js')); ?>"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo e(asset('layout/adminlte3/dist/js/adminlte.min.js')); ?>"></script> -->

<!-- Loading Overlay -->
<script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js'></script>
<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/themes@5.0.11/minimal/minimal.css"> -->
<!-- Global -->
<script src="<?php echo e(asset('js/global.js')); ?>"></script>
<script>
    $(document).ready(function(){
        $(".username").on('input paste', function () {
          this.value=this.value.replace(/[^a-zA-Z0-9]/g,'');
        });
        $('#formLogin').validate({
            rules: {
            username: {
                required: true
            },
            password: {
                required: true
            },
            },
            messages: {
            username: {
                required: "Username tidak boleh kosong"
            },
            password: {
                required: "Password tidak boleh kosong"
            },
        
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            },

            submitHandler: function () {
              var formData = new FormData($('#formLogin')[0]);

              var url = "<?php echo e(url('userauth')); ?>";
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: "JSON",
                  data: formData,
                  contentType: false,
                  processData: false,
                  beforeSend: function () {
                      // $.LoadingOverlay("show");
                      $.LoadingOverlay("show", {
                          image       : "<?php echo e(asset('/image/global/loading.gif')); ?>"
                      });
                  },
                  success: function (response) {
                      if (response.status === true) {
                      Swal.fire({
                          title: response.message,
                          icon: 'success',
                          showConfirmButton: false
                          });
                              reload_url(1000,response.link);
                      }else{
                      Swal.fire({
                          title: response.message,
                          icon: 'error',
                          confirmButtonText: 'Ok',
                          showCloseButton: true,
                      });
                      }
                  },
                  error: function (xhr, status) {
                      alert('Error! Please Try Again');
                  },
                  complete: function () {
                      $.LoadingOverlay("hide");
                  }
              });   
            }
        });
    });
</script>

</body>

</html>
<?php /**PATH /home/u726706882/domains/brainsculptorbook.id/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>