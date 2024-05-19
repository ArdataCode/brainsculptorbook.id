<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $template = App\Models\Template::where('id','<>','~')->first();
  ?>
  <title><?php echo e($template->nama); ?></title>
  <link href="<?php echo e(asset($template->logo_kecil)); ?>" rel="icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <style type="text/css">
  @font-face {
      font-family: Gotham-Book;
      src: url('<?php echo e(asset("font/Gotham-Book.otf")); ?>');
  }
   @font-face {
      font-family: Gotham-Bold;
      src: url('<?php echo e(asset("font/Gotham-Bold.otf")); ?>');
  }
  @font-face {
      font-family: Gotham-Medium;
      src: url('<?php echo e(asset("font/Gotham-Medium.otf")); ?>');
  }
  </style>
</head>
<body>
<section id="sec1">
  <div class="float">
    <a href="#sec4"><img src="<?php echo e(asset('image/global/section1/float.png')); ?>" alt=""></a>
  </div>
  <div>
    <img src="<?php echo e(asset('image/global/section1/bg.jpg')); ?>" alt="" width="100%">
  </div>
</section>
<section id="sec2">
<nav class="navbar navbar-expand-sm bg-utama navbar-dark">
  <div class="container-fluid">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse show" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalSinopsis">SINOPSIS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">ISI BUKU</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalDaftar">DAFTAR ISI</a></li>
            <li style="padding: 0.25rem 1rem;"><div style="border-bottom: 2px solid white;"></div></li>
            <li><a class="dropdown-item" href="#sec5">5 BAGIAN</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sec6">KONTAK</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>

<!-- The Modal -->
<div class="modal" id="modalSinopsis">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">SINOPSIS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="z-index:2"></button>
      </div>
      <img src="<?php echo e(asset('image/global/section2/sinopsis.jpg')); ?>" alt="" style="margin-top: -70px;width:100%">
      <!-- Modal body -->
    </div>
  </div>
</div>

<div class="modal" id="modalDaftar">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">DAFTAR ISI</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="z-index:2"></button>
      </div>
      <img src="<?php echo e(asset('image/global/section2/daftar_isi.jpg')); ?>" alt="" style="margin-top: -70px;width:100%">
      <!-- Modal body -->
    </div>
  </div>
</div>

</section>
<section id="sec3">
  <div class="sec3-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo e(asset('image/global/section3/3-1.png')); ?>" alt="" width="100%">
        </div>
        <div class="col-sm-6 isi">
          <p class="isi-x"><b>Disadari atau tidak, <span class="orange">orang tua dan guru adalah pemahat otak</span>.
          Jika dilakukan dengan kesadaran dan misi ingin membuat
          sebuah mahakarya, sang pemahat pasti berhati-hati dan
          penuh perencanaan yang matang.</b></p>
          <br>
          <p class="m-center">~ Irene Phiter, Brain Sculptor –<br>Seni Membentuk dan Melatih Otak Anak, halaman 10</p>
        </div>
      </div>
    </div>
  </div>
  <div class="sec3-2">
    <div class="container">
      <div class="d-none d-md-block d-lg-block">
        <div class="row">
          <div class="col-sm-6 isi">
            <p class="isi-x"><b>
            Belajarlah untuk menciptakan kebahagiaanmu sendiri dalam ritual <span class="orange">Tea for Mom</span>. Bereksplorasilah dengan ritualmu dan jadikan momen ini sebagai pengingat bahwa di tengah kesibukan, kita perlu meluangkan waktu untuk berhenti sejenak dan menemani diri kita sendiri.</b></p>
            <br>
            <p class="m-center">~ Irene Phiter, Brain Sculptor –<br>Seni Membentuk dan Melatih Otak Anak</p>
          </div>
          <div class="col-sm-6">
            <img src="<?php echo e(asset('image/global/section3/3-2.png')); ?>" alt="" width="100%">
          </div>
        </div>
      </div>
      <div class="d-block d-md-none d-lg-none">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo e(asset('image/global/section3/3-2.png')); ?>" alt="" width="100%">
          </div>
          <div class="col-sm-6 isi">
            <p class="isi-x"><b>
            Belajarlah untuk menciptakan kebahagiaanmu sendiri dalam ritual <span class="orange">Tea for Mom</span>. Bereksplorasilah dengan ritualmu dan jadikan momen ini sebagai pengingat bahwa di tengah kesibukan, kita perlu meluangkan waktu untuk berhenti sejenak dan menemani diri kita sendiri.</b></p>
            <br>
            <p class="m-center">~ Irene Phiter, Brain Sculptor –<br>Seni Membentuk dan Melatih Otak Anak</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec3-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="<?php echo e(asset('image/global/section3/3-3.png')); ?>" alt="" width="100%">
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-7 isi">
          <h1 class="orange d-none d-md-block d-lg-block"><b>Join our<br>TEA FOR MOM<br>community now!</b></h1>
          <h4 class="orange j-m d-block d-md-none d-lg-none"><b>Join our TEA FOR MOM<br>community now!</b></h4>
          <br>
          <div class="d-none d-md-block d-lg-block">
            <div class="row">
              <div class="col-4 isi1">
                <div>
                Always bring<br>
                along your<br>
                TEA!
                </div>
              </div>
              <div class="col-8 isi2">
                Our events:
                <ul>
                  <li>Parents webinar</li>
                  <li>Book discussion</li>
                  <li>Group practice session</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-block d-md-none d-lg-none">
            <div class="row">
              <div class="col-5 isi1">
                <div>
                Always bring<br>
                along your<br>
                TEA!
                </div>
              </div>
              <div class="col-7 isi2">
                Our events:
                <ul>
                  <li>Parents webinar</li>
                  <li>Book discussion</li>
                  <li>Group practice session</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sec4">
  <div class="container">
    <div class="header">
        <h5>Daftarkan E-mail dan nomor WhatsApp Anda untuk menerima update mengenai event kami:</h5>
    </div>
    <div class="content bg-utama">
          <br>
          <form method="post" id="_formData" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Nama" id="username" name="username">
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Kota" id="kabupaten" name="kabupaten">
                  </div>
              </div>
              <br>
              <br>
              <br>
              <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email" id="email" name="email">
                  </div>
              </div>
              <br>
              <br>
              <br>
              <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input class="form-control int" type="text" placeholder="WhatsApp" id="no_wa" name="no_wa">
                  </div>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="col-lg-12 col-md-12 btn-yay">
                <button type="submit" class="btn btn-danger btn-lg">YAY!</button>
              </div>
            </div>
          </form>
    </div>
  </div>
</section>
<section id="sec5">
  <img src="<?php echo e(asset('image/global/section5/klik.png')); ?>" alt="" class="img-klik d-none d-md-block d-lg-block">
  <div class="container">
    <div class="header">
      <h2>Setiap bab terdiri dari 5 bagian</h2>
    </div>
    <br>
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item" style="z-index:1">
        <a class="x nav-link active" data-bs-toggle="pill" href="#tab1" id="btn-tab1">
          <div class="div-btn">
            <img class="img-btn img1" src="<?php echo e(asset('image/global/section5/tab1-on.png')); ?>" alt="">
            <div class="ket-btn">
              <span>KOMIK</span>
            </div>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="x nav-link" data-bs-toggle="pill" href="#tab2" id="btn-tab2">
          <div class="div-btn">
            <img class="img-btn" src="<?php echo e(asset('image/global/section5/tab2-on.png')); ?>" alt="">
            <div class="ket-btn">
            <span>ULASAN</span>
            </div>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="x nav-link" data-bs-toggle="pill" href="#tab3" id="btn-tab3">
          <div class="div-btn">
            <img class="img-btn img1" src="<?php echo e(asset('image/global/section5/tab1-on.png')); ?>" alt="">
            <div class="ket-btn">
            <span>CATATAN</span>
            <span>UNTUK</span>
            <span>MOMS</span>
            </div>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="x nav-link" data-bs-toggle="pill" href="#tab4" id="btn-tab4">
          <div class="div-btn">
            <img class="img-btn" src="<?php echo e(asset('image/global/section5/tab2-on.png')); ?>" alt="">
            <div class="ket-btn">
            <span>BRAIN</span>
            <span>SCULPTOR'S</span>
            <span>GUIDE</span>
            </div>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="x nav-link" data-bs-toggle="pill" href="#tab5" id="btn-tab5">
          <div class="div-btn">
            <img class="img-btn img1" src="<?php echo e(asset('image/global/section5/tab1-on.png')); ?>" alt="">
            <div class="ket-btn">
            <span>TEA FOR</span>
            <span>MOMS</span>
            </div>
          </div>
        </a>
      </li>
    </ul>

    <?php
      $template = App\Models\Slider::get();
    ?>
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="tab1" class="container tab-pane active">
        <img src="<?php echo e(asset($template[0]->foto)); ?>" width="100%" alt="" class="d-none d-md-block d-lg-block">
        <img src="<?php echo e(asset($template[0]->foto_m)); ?>" width="100%" alt="" class="d-block d-md-none d-lg-none">
      </div>
      <div id="tab2" class="container tab-pane">
        <img src="<?php echo e(asset($template[1]->foto)); ?>" width="100%" alt="" class="d-none d-md-block d-lg-block">
        <img src="<?php echo e(asset($template[1]->foto_m)); ?>" width="100%" alt="" class="d-block d-md-none d-lg-none">
      </div>
      <div id="tab3" class="container tab-pane">
        <img src="<?php echo e(asset($template[2]->foto)); ?>" width="100%" alt="" class="d-none d-md-block d-lg-block">
        <img src="<?php echo e(asset($template[2]->foto_m)); ?>" width="100%" alt="" class="d-block d-md-none d-lg-none">
      </div>
      <div id="tab4" class="container tab-pane">
        <img src="<?php echo e(asset($template[3]->foto)); ?>" width="100%" alt="" class="d-none d-md-block d-lg-block">
        <img src="<?php echo e(asset($template[3]->foto_m)); ?>" width="100%" alt="" class="d-block d-md-none d-lg-none">
      </div>
      <div id="tab5" class="container tab-pane">
        <img src="<?php echo e(asset($template[4]->foto)); ?>" width="100%" alt="" class="d-none d-md-block d-lg-block">
        <img src="<?php echo e(asset($template[4]->foto_m)); ?>" width="100%" alt="" class="d-block d-md-none d-lg-none">
      </div>
    </div>
    <br>
    <br>
    <div class="header">
      <h2>Tersedia di Gramedia seluruh Indonesia dan <a class="link_gramedia" href="https://www.gramedia.com/">Gramedia.com</a></h2>
    </div>
  </div>
</section>
<section id="sec6">
  <div class="d-none d-md-block d-lg-block">
  <div class="sec6-bg">
    <img src="<?php echo e(asset('image/global/section6/bg.jpg')); ?>" alt="" width="100%">
  </div>
  <div class="sec6-isi">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        
      </div>
      <div class="col-lg-5 col-md-5">
        <h4 class="header">CONNECT WITH ME</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://www.facebook.com/irene.phiter">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-fb.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">Irene Phiter</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://www.instagram.com/irenephiter/">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">Irene Phiter</span>
              </div>
            </div>
            </a>
          </div>
        </div>
        <h4 class="header">MY TEAM</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://id-id.facebook.com/brainfitindonesia/">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-fb.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">BrainFit Indonesia</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://www.instagram.com/brainfitindonesia/">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">BrainFit Indonesia</span>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="row" style="margin-top:1vw">
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://www.youtube.com/user/brainfitindonesia">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-yt.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">BrainFitIndonesia</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-6 bg-blue">
            <a target="_blank" href="https://www.instagram.com/mindgrow.id/">
            <div class="row bg-blue-x">
              <div class="col-lg-3 col-md-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">Mindgrow.id</span>
              </div>
            </div>
            </a>
          </div>
        </div>
        <h4 class="header">TO WORK WITH ME</h4>
        <div class="row">
          <div class="col-lg-8 col-md-8 bg-blue">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+6281212965224&text=Halo%20Admin...">
            <div class="row bg-blue-x">
              <div class="col-lg-2 col-md-2">
                <img src="<?php echo e(asset('image/global/section6/btn-wa.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-lg-9 col-md-9">
                <span class="bg-blue-text">+62 812 1296 5224 (Ayu)</span>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="d-block d-md-none d-lg-none">
     <div>
        <img src="<?php echo e(asset('image/global/section6/mobile/bg.jpg')); ?>" alt="" width="100%">
     </div>
     <div style="position:absolute">
        <img src="<?php echo e(asset('image/global/section6/mobile/bg2.jpg')); ?>" alt="" width="100%">
     </div>
     <div class="sec6-m">
        <h4 class="header">CONNECT WITH ME</h4>
        <div class="row">
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://www.facebook.com/irene.phiter">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-fb.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">Irene Phiter</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://www.instagram.com/irenephiter/">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">Irene Phiter</span>
              </div>
            </div>
            </a>
          </div>
        </div>

        <h4 class="header">MY TEAM</h4>
        <div class="row">
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://id-id.facebook.com/brainfitindonesia/">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-fb.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">BrainFit Indonesia</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://www.instagram.com/brainfitindonesia/">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">BrainFit Indonesia</span>
              </div>
            </div>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://www.youtube.com/user/brainfitindonesia">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-yt.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">BrainFitIndonesia</span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://www.instagram.com/mindgrow.id/">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-ig.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">Mindgrow.id</span>
              </div>
            </div>
            </a>
          </div>
        </div>

        <h4 class="header">TO WORK WITH ME</h4>
        <div class="row">
          <div class="col-12 bg-blue">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=+6281212965224&text=Halo%20Admin...">
            <div class="row _bg-blue-x">
              <div class="col-3">
                <img src="<?php echo e(asset('image/global/section6/btn-wa.png')); ?>" width="100%" alt="">
              </div>
              <div class="col-9">
                <span class="_bg-blue-text">+62 812 1296 5224 (Ayu)</span>
              </div>
            </div>
            </a>
          </div>
        </div>

    </div>
  </div>
</section>
<section id="sec7">
  <div class="header">
    <h3>More videos for Moms</h3>
  </div>

  <div class="sec7-isi container">
      <div class="row">
        <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
          <?php echo $data->link; ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</section>
<section id="sec8">
      <div class="footer">
        <div class="container">
          <div class="row x">
                <div class="col-sm-6 left">
                    <h6>BRAIN SCULPTOR</h6>
                    <h6>Seni Membentuk dan Melatih Otak Anak</h6>
                    <h6 style='font-family: "Gotham-Medium";'>Oleh: Irene Phiter</h6>
                </div>
                <div class="col-sm-6 right">
                    <h6>© 2022 Irene Phiter</h6>
                    <h6>Hak Cipta dilindungi oleh Undang-Undang</h6>
                    <h6>Diterbitkan pertama kali oleh:</h6>
                    <h6>Penerbit PT Elex Media Komputindo</h6>
                    <h6>Kelompok Gramedia, Anggota IKAPI Jakarta</h6>
                </div>
            </div>
        </div>
      </div>
</section>
<!-- jquery-validation -->
<script src="<?php echo e(asset('layout/adminlte3/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('layout/adminlte3/plugins/jquery-validation/additional-methods.min.js')); ?>"></script>
<!-- Loading Overlay -->
<script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js'></script>
<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Global -->
<script src="<?php echo e(asset('js/global.js')); ?>"></script>
<script>
  $(document).ready(function(){
    $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
      var target = $(e.target).attr("href") // activated tab
      idbtn = $(this).attr('id');
      $(".nav-item").css('z-index','0');
      $('#'+idbtn).parent().css('z-index','1');
    });

    $(".int").on('input paste', function () {
      hanyaAngka(this);
    });

        // Fungsi Add Data
        $('#_formData').validate({
          rules: {
            username: {
              required: true
            },
            email: {
              required: true,
              email: true,
            },
            kabupaten: {
              required: true
            },
            no_wa: {
              required: true
            }
          },
          messages: {
            username: {
              required: "Kolom nama tidak boleh kosong"
            },
            email: {
              required: "Kolom email tidak boleh kosong",
              email: "Masukkan alamat email yang benar"
            },
            kabupaten: {
              required: "Kolom kota tidak boleh kosong"
            },
            no_wa: {
              required: "Kolom whatsapp tidak boleh kosong"
            }
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
              if (element.hasClass('_select2')) {     
                  element.parent().addClass('select2-error');
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);
              }else if (element.hasClass('input-foto')){
                  element.parent().addClass('input-foto-error');
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);
              }else {                                      
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);
              }
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
              if(element.tagName.toLowerCase()=='select'){
                var x = element.getAttribute('id');
                $('#'+x).parent().addClass('select2-error');
              }else if(element.tagName.toLowerCase()=='input'){
                var x = element.getAttribute('class');
                var z = element.getAttribute('id');
                if(x=="input-foto is-invalid"){
                  $('#'+z).parent().addClass('input-foto-error');
                }
              }
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
              if(element.tagName.toLowerCase()=='select'){
                var x = element.getAttribute('id');
                $('#'+x).parent().removeClass('select2-error');
              }else if(element.tagName.toLowerCase()=='input'){
                var x = element.getAttribute('class');
                var z = element.getAttribute('id');
                if(x=="input-foto"){
                  $('#'+z).parent().removeClass('input-foto-error');
                }
              }
            },

          submitHandler: function () {
          
            var formData = new FormData($('#_formData')[0]);

            var url = "<?php echo e(url('/storeuser')); ?>";
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
                    $.LoadingOverlay("show", {
                      image : "<?php echo e(asset('/image/global/loading.gif')); ?>"
                    });
                },
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                          html: response.message,
                          icon: 'success',
                          showConfirmButton: false
                        });
                        reload(1000);
                    }else{
                      Swal.fire({
                          html: response.message,
                          icon: 'error',
                          confirmButtonText: 'Ok'
                      });
                    }
                },
                error: function (xhr, status) {
                    alert('Error!!!');
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


<?php /**PATH /home/u726706882/domains/brainsculptorbook.id/public_html/resources/views/utama/Home.blade.php ENDPATH**/ ?>